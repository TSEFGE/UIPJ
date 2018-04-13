<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use App\Http\Requests\StoreAutoridad;
use App\Models\Carpeta;
use App\Models\CatEscolaridad;
use App\Models\CatEstado;
use App\Models\CatMunicipio;
use App\Models\CatEstadoCivil;
use App\Models\CatEtnia;
use App\Models\CatLengua;
use App\Models\CatNacionalidad;
use App\Models\CatOcupacion;
use App\Models\CatPuesto;
use App\Models\CatReligion;
use App\Models\Persona;
use App\Models\Domicilio;
use App\Models\VariablesPersona;
use App\Models\ExtraAutoridad;
use App\Models\Bitacora;
use App\Models\Narracion;

class AutoridadController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if(count($carpetaNueva)>0){ 
            $autoridades = CarpetaController::getAutoridades($idCarpeta);
            $escolaridades = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $municipiosVer = CatMunicipio::select('id', 'nombre')->where('idEstado',30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $etnias = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lenguas = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $ocupaciones=  DB::table('cat_ocupacion')->select('id','nombre')->where('id','>',2941)->pluck('nombre', 'id');
            $religiones = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            //dd($ocupaciones);
            return view('forms.autoridad')->with('idCarpeta', $idCarpeta)
                ->with('autoridades', $autoridades)
                ->with('escolaridades', $escolaridades)
                ->with('estados', $estados)
                ->with('municipiosVer', $municipiosVer)
                ->with('estadoscivil', $estadoscivil)
                ->with('etnias', $etnias)
                ->with('lenguas', $lenguas)
                ->with('nacionalidades', $nacionalidades)
                ->with('ocupaciones', $ocupaciones)
                ->with('religiones', $religiones);
        }else{
            return redirect()->route('home');
        }
    }

    public function storeAutoridad(StoreAutoridad $request){
        //dd($request->all());
        $persona = new Persona();
        $persona->nombres = $request->nombres;
        $persona->primerAp = $request->primerAp;
        $persona->segundoAp = $request->segundoAp;
        $persona->fechaNacimiento = $request->fechaNacimiento;
        $persona->rfc = $request->rfc.$request->homo;
        $persona->curp = $request->curp;
        $persona->sexo = $request->sexo;
        $persona->idNacionalidad = $request->idNacionalidad;
        $persona->idEtnia = $request->idEtnia;
        $persona->idLengua = $request->idLengua;
        $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
        $persona->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado Datos Personales de una nueva Autoridad', 'idFilaAccion' => $persona->id]);

        if($request->rfcAux!=$request->rfc.$request->homo){
          Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo Autoridad.', 'idFilaAccion' => $persona->id]);
        }

        $idPersona = $persona->id;

        $domicilio = new Domicilio();
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia = $request->idColonia;
        $domicilio->calle = $request->calle;
        $domicilio->numExterno = $request->numExterno;
        $domicilio->numInterno = $request->numInterno;
        $domicilio->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado la Direccion de Autoridad', 'idFilaAccion' => $domicilio->id]);

        $idD1 = $domicilio->id;

        $domicilio2 = new Domicilio();
        $domicilio2->idMunicipio = $request->idMunicipio2;
        $domicilio2->idLocalidad = $request->idLocalidad2;
        $domicilio2->idColonia = $request->idColonia2;
        $domicilio2->calle = $request->calle2;
        $domicilio2->numExterno = $request->numExterno2;
        $domicilio2->numInterno = $request->numInterno2;
        $domicilio2->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona,domicilio', 'accion' => 'insert', 'descripcion' => 'Se han registrado Datos del Trabajo de Autoridad', 'idFilaAccion' => $domicilio2->id]);

        $idD2 = $domicilio2->id;

        $VariablesPersona = new VariablesPersona();
        $VariablesPersona->idCarpeta = $request->idCarpeta;
        $VariablesPersona->idPersona = $idPersona;
        $VariablesPersona->edad = $request->edad;
        $VariablesPersona->telefono = $request->telefono;
        $VariablesPersona->motivoEstancia = $request->motivoEstancia;
        $VariablesPersona->idOcupacion = $request->idOcupacion;
        $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
        $VariablesPersona->idEscolaridad = $request->idEscolaridad;
        $VariablesPersona->idReligion = $request->idReligion;
        $VariablesPersona->idDomicilio = $idD1;
        $VariablesPersona->docIdentificacion = $request->docIdentificacion;
        $VariablesPersona->numDocIdentificacion = $request->numDocIdentificacion;
        $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
        $VariablesPersona->idDomicilioTrabajo = $idD2;
        $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;
        $VariablesPersona->representanteLegal = "NO APLICA";
        $VariablesPersona->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado Variables Persona de Autoridad', 'idFilaAccion' => $VariablesPersona->id]);
        $idVariablesPersona = $VariablesPersona->id;

        $ExtraAutoridad = new ExtraAutoridad();
        $ExtraAutoridad->idVariablesPersona = $idVariablesPersona;
        $ExtraAutoridad->antiguedad = $request->antiguedad;
        $ExtraAutoridad->rango = $request->rango;
        $ExtraAutoridad->horarioLaboral = $request->horarioLaboral;
      
        $ExtraAutoridad->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_autoridad', 'accion' => 'insert', 'descripcion' => 'Se ha registrado Informacion extra de Autoridad', 'idFilaAccion' => $ExtraAutoridad->id]);

        $narracion= new Narracion();
        $narracion->idInvolucrado=$ExtraAutoridad->id;
        $narracion->idCarpeta=$request->idCarpeta;
        $narracion->narracion=$request->narracionUno;
        $narracion->tipoInvolucrado=3;
        $narracion->archivo=null;
        $narracion->save();

        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'narracion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva narracion de autoridad.', 'idFilaAccion' => $narracion->id]);

        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        Alert::success('Autoridad registrada con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.autoridad', $request->idCarpeta);
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
