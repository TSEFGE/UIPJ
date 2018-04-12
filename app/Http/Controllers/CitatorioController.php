<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use Carbon\Carbon;
use App\Http\Controllers\DocxMakerController;
use App\Models\Citatorio;

class CitatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
Citatorio     * @return \Illuminate\Http\Response
     */
    public function index($idCarpeta,$idCitado,$tipoInvolucrado)
    {
        $citatorios= Citatorio::where('idCarpeta',$idCarpeta)->where('idCitado',$idCitado)->where('tipo',$tipoInvolucrado)->get();
        return view('forms.citatorio')->with('idCarpeta',$idCarpeta)->with('idCitado',$idCitado)->with('tipoInvolucrado',$tipoInvolucrado)->with('citatorios', $citatorios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $fecha = Carbon::parse($request->fecha)->format("Y-d-m H:i:00");
        if($request->tipo==1){//Investigado
            $info = DB::table('extra_denunciado')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
                ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilio')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
                ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->join('carpeta', 'carpeta.id', '=', 'variables_persona.idCarpeta' )
                ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
                ->join('users', 'users.id', '=', 'carpeta.idFiscal')
                ->select('persona.nombres as nombresD', 'persona.primerAp as primerApD', 'persona.segundoAp as segundoApD', 'carpeta.id', 'carpeta.numCarpeta', 'carpeta.fechaInicio', 'unidad.direccion', 'unidad.telefono', 'unidad.distrito', 'unidad.municipio', 'users.nombres', 'users.apellidos', 'users.numFiscal', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno',  'cat_municipio.nombre as municipio2', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal as cp')
                ->where('extra_denunciado.id', '=', $request->idCitado)
                ->get();
        }elseif($request->tipo==2){
            $info = DB::table('extra_testigo')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_testigo.idVariablesPersona')
                ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilio')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
                ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->join('carpeta', 'carpeta.id', '=', 'variables_persona.idCarpeta' )
                ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
                ->join('users', 'users.id', '=', 'carpeta.idFiscal')
                ->select('persona.nombres as nombresD', 'persona.primerAp as primerApD', 'persona.segundoAp as segundoApD', 'carpeta.id', 'carpeta.numCarpeta', 'carpeta.fechaInicio', 'unidad.direccion', 'unidad.telefono', 'unidad.distrito', 'unidad.municipio', 'users.nombres', 'users.apellidos', 'users.numFiscal', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno',  'cat_municipio.nombre as municipio2', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal as cp')
                ->where('extra_testigo.id', '=', $request->idCitado)
                ->get();
        }
        //dd($info);
        $info=$info[0];

        $citatorios = Citatorio::where('idCarpeta',$request->idCarpeta)->where('idCitado',$request->idCitado)->where('tipo',$request->tipo)->get();
        $numCitatorio = count($citatorios)+1;
        $intentoLetra = CitatorioController::getIntentoLetra($numCitatorio);

        $distritoLetra = DocxMakerController::getDistritoLetra($info->distrito);
        $fechaHoy = new Carbon();
        $mesLetra = DocxMakerController::getMesLetra($fechaHoy->month);
        $fechaCompleta = mb_strtoupper($fechaHoy->day." DE ".$mesLetra." DE ".$fechaHoy->year);
        $nombreFiscal = mb_strtoupper($info->nombres." ".$info->apellidos);
        //$diaLetra = mb_strtolower(DocxMakerController::getDiaLetra($fechaHoy->day));
        //$mesLetra = mb_strtolower($mesLetra);
        $diaCit = Carbon::parse($request->fecha)->format("d");
        $mesCit = Carbon::parse($request->fecha)->format("m");
        $yearCit = Carbon::parse($request->fecha)->format("Y");
        $mesLetraCit = DocxMakerController::getMesLetra((int)$mesCit);
        $fechaCompletaCit = mb_strtoupper($diaCit." DE ".$mesLetraCit." DE ".$yearCit);
        $horaCit = Carbon::parse($request->fecha)->format("H:i");

        //Generar documento
        if($request->tipo==1){//Investigado
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templates/CitaInvestigado.docx');
        }elseif($request->tipo==2){//Testigo
            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templates/CitaTestigo.docx');
        }
        
        $templateProcessor->setValue('distritoLetra', $distritoLetra);
        $templateProcessor->setValue('municipioUnidadM', mb_strtoupper($info->municipio));
        $templateProcessor->setValue('motivoCita', $request->motivo);
        $templateProcessor->setValue('numCarpeta', $info->numCarpeta);
        $templateProcessor->setValue('numCitatorio', $intentoLetra);//numCitatorio
        $templateProcessor->setValue('fechaCompleta', $fechaCompleta);
        $templateProcessor->setValue('distrito', $info->distrito);
        $templateProcessor->setValue('numFiscal', $info->numFiscal);
        $templateProcessor->setValue('numOficio', 0);
        $templateProcessor->setValue('anio', $fechaHoy->year);
        $templateProcessor->setValue('nombreDenunciado', $info->nombresD." ".$info->primerApD." ".$info->segundoApD);
        $templateProcessor->setValue('calleDen', $info->calle);//calleDen
        $templateProcessor->setValue('coloniaDen', $info->colonia);//coloniaDen
        $templateProcessor->setValue('municipioDen', $info->municipio);//municipioDen
        $templateProcessor->setValue('fechaCitatorio', $fechaCompletaCit);//fechaCitatorio
        $templateProcessor->setValue('horaCitatorio', $horaCit);//horaCitatorio
        $templateProcessor->setValue('direccion', $info->direccion);
        $templateProcessor->setValue('telefono', $info->telefono);
        $templateProcessor->setValue('nombreFiscal', $nombreFiscal);
        
        $name='Citatorio'.time().'.docx';
        $templateProcessor->saveAs(public_path().'\storage\citatorios\\'.$name);
        //$templateProcessor->saveAs('../storage/oficios/ConstanciaDeHechos'.$info->id.'.docx');

        $citatorio = new Citatorio($request->all());
        $citatorio->fecha = $fecha;
        $citatorio->intento = $numCitatorio;
        $citatorio->documento = $name;
        $citatorio->save();
        //Retornar documento
        Alert::success('Citatorio registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return response()->download(public_path().'\storage\citatorios\\'.$name);
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('citatorio', ['idCarpeta'=>$request->idCarpeta,'idCitado'=>$request->idCitado, 'tipoInvolucrado'=>$request->tipo]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public static function getIntentoLetra($numIntento){
        switch ($numIntento) {
            case '1':
                $intentoLetra = "PRIMERA";
                break;
            case '2':
                $intentoLetra = "SEGUNDA";
                break;
            case '3':
                $intentoLetra = "TERCERA";
                break;
            case '4':
                $intentoLetra = "CUARTA";
                break;
            case '5':
                $intentoLetra = "QUINTA";
                break;
            case '6':
                $intentoLetra = "SEXTA";
                break;
            case '7':
                $intentoLetra = "SEPTIMA";
                break;
            case '8':
                $intentoLetra = "OCTAVA";
                break;
            case '9':
                $intentoLetra = "NOVENA";
                break;
            case '10':
                $intentoLetra = "DECIMA";
                break;
            case '11':
                $intentoLetra = "DECIMOPRIMERA";
                break;
            case '12':
                $intentoLetra = "DECIMOSEGUNDA";
                break;
            default:
                $intentoLetra = "PRIMERA";
                break;
        }
        return $intentoLetra;
    }
}
