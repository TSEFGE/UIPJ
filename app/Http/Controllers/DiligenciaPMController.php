<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiligenciaPM;
use App\Http\Controllers\DocxMakerController;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use Carbon\Carbon;
use GuzzleHttp\Client;

class DiligenciaPMController extends Controller
{
    public static function test(Request $request)
    {
        //DiligenciaPM::create(['idAcusacion' => $request->idAcusacion, 'numOficio' => $request->numOficio, 'termino' => $request->termino, 'dictamen' => $request->dictamen, 'status' => $request->status]);
        if (is_null($request)) {
            $res = ['msg'=> 'error de servidor', 'code' => 500];
            $res = ['msg'=> 'error de cliente', 'code' => 400];
        } else {
            $res = ['msg'=> 'exitoso', 'code' => 200];
        }
        return $res;
    }

    public static function enviarSolicitud(Request $request)
    {
        //dd($request->all());
        $carpeta = DB::table('acusacion')
            ->join('carpeta', 'carpeta.id', '=', 'acusacion.idCarpeta')
            ->join('users', 'users.id', '=', 'carpeta.idFiscal')
            ->join('unidad', 'unidad.id', '=', 'users.idUnidad')
            ->join('distrito', 'distrito.id', '=', 'unidad.idDistrito')
            ->join('region', 'region.id', '=', 'distrito.idRegion')
            ->select('carpeta.numCarpeta', 'carpeta.fechaInicio', 'carpeta.conDetenido', 'users.nombres', 'users.apellidos', 'users.numFiscal', 'users.oficioConsecutivo', 'unidad.direccion', 'unidad.telefono', 'unidad.municipio', 'distrito.distrito', 'region.region')
            ->where('acusacion.id', '=', $request->radioAcusacion)
            ->get();

        $acusacion = DB::table('acusacion')
            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilio')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona as var', 'var.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona as per', 'per.id', '=', 'var.idPersona')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->select('acusacion.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'variables_persona.telefono', 'domicilio.calle', 'domicilio.numExterno', 'cat_estado.nombre as estado', 'cat_municipio.nombre as municipio', 'cat_colonia.nombre as colonia', 'cat_delito.nombre as delito', 'per.nombres as nombres2', 'per.primerAp as primerAp2', 'per.segundoAp as segundoAp2')
            ->where('acusacion.id', '=', $request->radioAcusacion)
            ->get();
        /*$servicios = DB::table('cat_spericiales')
            ->whereIn('id', $request->servicios)
            ->select('id', 'nombre')
            ->orderBy('nombre', 'ASC')
            ->get();*/
        $servicios = DB::table('cat_pministerial')
            ->where('nombre', $request->servicio)
            ->select('id', 'nombre')
            ->orderBy('nombre', 'ASC')
            ->get();
        //dd($servicios);
        $carpeta = $carpeta[0];
        $acusacion = $acusacion[0];

        //Construcción del arreglo
        $data = [
            'data' => [
                'numCarpeta' => $carpeta->numCarpeta,
                'conDetenido' => $carpeta->conDetenido,
                'nombresF' => $carpeta->nombres,
                'apellidosF' => $carpeta->apellidos,
                'numFiscal' => $carpeta->numFiscal,
                'numOficio' => $carpeta->oficioConsecutivo+1,
                'direccionU' => $carpeta->direccion,
                'telefonoU' => $carpeta->telefono,
                'municipioU' => $carpeta->municipio,
                'distritoU' => $carpeta->distrito,
                'regionU' => $carpeta->region,

                'nombresV' => $acusacion->nombres,
                'primerApV' => $acusacion->primerAp,
                'segundoApV' => $acusacion->segundoAp,
                'telefonoV' => $acusacion->telefono,
                'calleV' => $acusacion->calle,
                'numExternoV' => $acusacion->numExterno,
                'estadoV' => $acusacion->estado,
                'municipioV' => $acusacion->municipio,
                'coloniaV' => $acusacion->colonia,
                'delito' => $acusacion->delito,
                'nombresI' => $acusacion->nombres2,
                'primerApI' => $acusacion->primerAp2,
                'segundoApI' => $acusacion->segundoAp2,

                'conIndicio' => $request->conIndicio,
                'unidadTermino' => $request->unidadTermino,
                'cantidadTermino' => $request->cantidadTermino,
                'dictamen' => $request->servicio,
                'observaciones' => $request->observaciones
            ]
        ];
        //dd($data);
        //Envío POST
        $client = new Client(['base_uri' => route('test')]);
        $res = $client->post("test", $data);
        //$response = $res->getStatusCode();
        $result= $res->getBody()->getContents();
        //dd($result);

        if ($result == '{"msg":"exitoso","code":200}') {
            //Si todo sale bien se crea el documento y se almacena la información en la base de datos
            $distritoLetra = DocxMakerController::getDistritoLetra($carpeta->distrito);
            $dirDenunciante = $acusacion->calle." #".$acusacion->numExterno.", COLONIA ".$acusacion->colonia.", EN ".$acusacion->municipio.", ".$acusacion->estado;
            $fechaHoy = new Carbon();
            $mesLetra = DocxMakerController::getMesLetra($fechaHoy->month);
            $fechaCompleta = $fechaHoy->day." de ".$mesLetra." de ".$fechaHoy->year;

            $templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templates/InvestigaciónPolicíaMinisterial.docx');

            $templateProcessor->setValue('nombreFiscal', mb_strtoupper($carpeta->nombres." ".$carpeta->apellidos));
            $templateProcessor->setValue('distrito', $carpeta->distrito);
            $templateProcessor->setValue('distritoLetra', $distritoLetra);
            $templateProcessor->setValue('municipioUnidadM', mb_strtoupper($carpeta->municipio));
            $templateProcessor->setValue('dirUnidad', $carpeta->direccion);
            $templateProcessor->setValue('telUnidad', $carpeta->telefono);
            $templateProcessor->setValue('numOficio', $carpeta->oficioConsecutivo+1);
            $templateProcessor->setValue('anio', $fechaHoy->year);
            $templateProcessor->setValue('numCarpeta', $carpeta->numCarpeta);
            $templateProcessor->setValue('numFiscal', $carpeta->numFiscal);
            $templateProcessor->setValue('municipioUnidad', $carpeta->municipio);
            $templateProcessor->setValue('fechaCompleta', $fechaCompleta);
            $templateProcessor->setValue('nombreDenunciante', $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp);
            $templateProcessor->setValue('nombreDenunciado', $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2);
            $templateProcessor->setValue('delito', $acusacion->delito);
            $templateProcessor->setValue('dirDenunciante', $dirDenunciante);
            $templateProcessor->setValue('telefono', $acusacion->telefono);
            //Servicios
            $templateProcessor->cloneRow('rowService', count($servicios));
            $cont = 1;
            foreach ($servicios as $servi) {
                $templateProcessor->setValue('rowNum#'.$cont, $cont.").-");
                $templateProcessor->setValue('rowService#'.$cont, $servi->nombre);
                $cont ++;
            }
            $templateProcessor->setValue('termino', $request->cantidadTermino." ".$request->unidadTermino);

            $name = 'InvestigaciónPolicíaMinisterial'.time().$request->radioAcusacion.'.docx';
            $path = public_path().'\storage\diligencias-pm\\';
            $templateProcessor->saveAs($path.$name);
            DiligenciaPM::create(['idAcusacion' => $request->radioAcusacion, 'numOficio' => $carpeta->oficioConsecutivo+1, 'dictamen' => $request->servicio, 'status' => 1, 'oficio' => $name]);
            DB::table('users')->where('id', Auth::user()->id)->update(['oficioConsecutivo' => $carpeta->oficioConsecutivo+1]);
            Alert::success('Diligencia solicitada con éxito.', 'Hecho')->persistent("Aceptar");
            return redirect()->route('new.colaboracionpm', $request->idCarpeta);
            //return response()->download($path.$name);
        }
    }
}
