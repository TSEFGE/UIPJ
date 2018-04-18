<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use Carbon\Carbon;
use App\Http\Requests\StoreAbogado;
use App\Models\Carpeta;
use App\Models\CatEstado;
use App\Models\CatMunicipio;
use App\Models\CatEstadoCivil;
use App\Models\ExtraDenunciante;
use App\Models\ExtraDenunciado;
use App\Models\Persona;
use App\Models\VariablesPersona;
use App\Models\ExtraAbogado;
use App\Models\Domicilio;
use App\Models\Bitacora;

class AbogadoController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if(count($carpetaNueva)>0){
            $numCarpeta = $carpetaNueva[0]->numCarpeta;
            $abogados = CarpetaController::getAbogados($idCarpeta);
            $estados = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $municipiosVer = CatMunicipio::select('id', 'nombre')->where('idEstado',30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            return view('forms.abogado')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('abogados', $abogados)
                ->with('estados', $estados)
                ->with('municipiosVer', $municipiosVer)
                ->with('estadoscivil', $estadoscivil);
        }else{
            return redirect()->route('home');
        }
    }

    public function storeAbogado(StoreAbogado $request)
    {
      $persona = Persona::where('curp', $request->curp)->get();
      if ($persona->isNotEmpty()){
          Alert::error('Ya existe una persona registrada con ese CURP.', 'Error')->persistent("Aceptar");
          return back()->withInput();
      }else{
        //dd($request->all());
        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->primerAp = $request->primerAp;
        $persona->segundoAp = $request->segundoAp;
        $persona->fechaNacimiento = $request->fechaNacimiento;
        $persona->rfc = $request->rfc.$request->homo;  
        $persona->sexo = $request->sexo;
        $persona->idNacionalidad = 1;
        $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
        $persona->curp = $request->curp;
        $persona->save();

        if($request->rfcAux!=$request->rfc.$request->homo){
          Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo Abogado.', 'idFilaAccion' => $persona->id]);
        }
        $idPersona = $persona->id;
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona física de tipo abogado.', 'idFilaAccion' => $idPersona]);

        

        $domicilio2 = new Domicilio();
        $domicilio2->idMunicipio = $request->idMunicipio2;
        $domicilio2->idLocalidad = $request->idLocalidad2;
        $domicilio2->idColonia = $request->idColonia2;
        $domicilio2->calle = $request->calle2;
        $domicilio2->numExterno = $request->numExterno2;
        $domicilio2->numInterno = $request->numInterno2;
        $domicilio2->save();
        $idD2 = $domicilio2->id;

        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo abogado.', 'idFilaAccion' => $idD2]);

        $VariablesPersona = new VariablesPersona();
        $VariablesPersona->idCarpeta = $request->idCarpeta;
        $VariablesPersona->idPersona = $idPersona;
        $VariablesPersona->telefono = $request->telefono;
        $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
        $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
        $VariablesPersona->idDomicilioTrabajo = $idD2;
        $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;
        $fecha = Carbon::parse($request->fechaNacimiento);
        $VariablesPersona->edad = Carbon::createFromDate($fecha->year, $fecha->month, $fecha->day)->age;
        $VariablesPersona->motivoEstancia = "NO APLICA";
        $VariablesPersona->idOcupacion = 2469;
        $VariablesPersona->idEscolaridad = 8;
        $VariablesPersona->docIdentificacion = "NO APLICA";
        $VariablesPersona->numDocIdentificacion = "NO APLICA";
        $VariablesPersona->representanteLegal = "NO APLICA";
        $VariablesPersona->save();
        $idVariablesPersona = $VariablesPersona->id;

        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado nuevas variables de persona física de tipo abogado.', 'idFilaAccion' => $idVariablesPersona]);

        $ExtraAbogado = new ExtraAbogado();
        $ExtraAbogado->idVariablesPersona = $idVariablesPersona;
        $ExtraAbogado->cedulaProf = $request->cedulaProf;
        $ExtraAbogado->sector = $request->sector;
        $ExtraAbogado->correo = $request->correo;
        $ExtraAbogado->tipo = $request->tipo;
        $ExtraAbogado->save();
        $idAbogado = $ExtraAbogado->id;

        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_abogado', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo extra abogado de persona física de tipo abogado.', 'idFilaAccion' => $idVariablesPersona]);

        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        Alert::success('Abogado registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.abogado', $request->idCarpeta);
       }
    }

    public function showForm2($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if(count($carpetaNueva)>0){
            $numCarpeta = $carpetaNueva[0]->numCarpeta;
            $defensas = CarpetaController::getDefensas($idCarpeta);
            $abogados = DB::table('extra_abogado')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->select('extra_abogado.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
                ->where('variables_persona.idCarpeta', '=', $idCarpeta)
                ->orderBy('persona.nombres', 'ASC')
                ->get();
            return view('forms.defensa')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('defensas', $defensas)
                ->with('abogados', $abogados);
        }else{
            return redirect()->route('home');
        }
    }

    public function storeDefensa(Request $request)
    {
        //dd($request->all());
        $idAbogado = $request->idAbogado;
        $tipo = $request->tipo;
        $idInvolucrado = $request->idInvolucrado;
        $xd = DB::table('extra_denunciante')->select('id')->where('idVariablesPersona', $idInvolucrado)->get();
        if(count($xd)>0){
            DB::table('extra_denunciante')->where('idVariablesPersona', $idInvolucrado)->update(['idAbogado' => $idAbogado]);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciante', 'accion' => 'update', 'descripcion' => 'Se ha asignado un abogado a un denunciante.', 'idFilaAccion' => $xd[0]->id]);
        }else{
            DB::table('extra_denunciado')->where('idVariablesPersona', $idInvolucrado)->update(['idAbogado' => $idAbogado]);
            $idExtraDenunciado=ExtraDenunciado::where('idVariablesPersona','=',$idInvolucrado)->first();
            //dd($idExtraDenunciado);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'update', 'descripcion' => 'Se ha asignado un abogado a un denunciado.', 'idFilaAccion' => $idExtraDenunciado->id]);

        }

        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        Alert::success('Defensa asignada con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.defensa', $request->idCarpeta);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
}
