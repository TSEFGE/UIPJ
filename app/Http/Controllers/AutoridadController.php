<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\StoreAutoridad;
use App\Models\Bitacora;
use App\Models\Carpeta;
use App\Models\CatEscolaridad;
use App\Models\CatEstado;
use App\Models\CatEstadoCivil;
use App\Models\CatEtnia;
use App\Models\CatLengua;
use App\Models\CatMunicipio;
use App\Models\CatNacionalidad;
use App\Models\CatOcupacion;
use App\Models\CatReligion;
use App\Models\Domicilio;
use App\Models\ExtraAutoridad;
use App\Models\Narracion;
use App\Models\Persona;
use App\Models\VariablesPersona;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutoridadController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $numCarpeta     = $carpetaNueva[0]->numCarpeta;
            $autoridades    = CarpetaController::getAutoridades($idCarpeta);
            $escolaridades  = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil   = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $etnias         = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lenguas        = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $ocupaciones    = DB::table('cat_ocupacion')->select('id', 'nombre')->where('id', '>', 2941)->pluck('nombre', 'id');
            $religiones     = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            //dd($ocupaciones);
            return view('forms.autoridad')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
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
        } else {
            return redirect()->route('home');
        }
    }

    public function storeAutoridad(StoreAutoridad $request)
    {
        $persona = Persona::where('curp', $request->curp)->get();
        if ($persona->isNotEmpty()) {
            Alert::error('Ya existe una persona registrada con ese CURP.', 'Error')->persistent("Aceptar");
            return back()->withInput();
        }
        //dd($request->all());
        $persona                    = new Persona();
        $persona->nombres           = $request->nombres;
        $persona->primerAp          = $request->primerAp;
        $persona->segundoAp         = $request->segundoAp;
        $fechaAux                   = $request->fechaNacimiento;
        $fechaNacimiento            = date("Y-m-d", strtotime($fechaAux));
        $persona->fechaNacimiento   = $fechaNacimiento;
        $persona->rfc               = $request->rfc . $request->homo;
        $persona->curp              = $request->curp;
        $persona->sexo              = $request->sexo;
        $persona->idNacionalidad    = $request->idNacionalidad;
        $persona->idEtnia           = $request->idEtnia;
        $persona->idLengua          = $request->idLengua;
        $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
        $persona->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado Datos Personales de una nueva Autoridad', 'idFilaAccion' => $persona->id]);

        if ($request->rfcAux != $request->rfc . $request->homo) {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo Autoridad.', 'idFilaAccion' => $persona->id]);
        }

        $idPersona = $persona->id;

        $domicilio              = new Domicilio();
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia   = $request->idColonia;
        $domicilio->calle       = $request->calle;
        $domicilio->numExterno  = $request->numExterno;
        $domicilio->numInterno  = $request->numInterno;
        $domicilio->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado la Direccion de Autoridad', 'idFilaAccion' => $domicilio->id]);

        $idD1 = $domicilio->id;

        $VariablesPersona                 = new VariablesPersona();
        $VariablesPersona->idCarpeta      = $request->idCarpeta;
        $VariablesPersona->idPersona      = $idPersona;
        $VariablesPersona->edad           = $request->edad;
        $VariablesPersona->telefono       = $request->telefono;
        $VariablesPersona->motivoEstancia = $request->motivoEstancia;
        $VariablesPersona->idOcupacion    = $request->idOcupacion;

        if ($request->idOcupacion == 2947) {

            $domicilio2              = new Domicilio();
            $domicilio2->idMunicipio = 2496;
            $domicilio2->idLocalidad = 27153;
            $domicilio2->idColonia   = 49172;
            $domicilio2->calle       = "SIN INFORMACION";
            $domicilio2->numExterno  = "S/N";
            $domicilio2->numInterno  = "S/N";
            $domicilio2->save();
            //Agregar a bitacora
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona,domicilio', 'accion' => 'insert', 'descripcion' => 'Se han registrado Datos del Trabajo de Autoridad', 'idFilaAccion' => $domicilio2->id]);

            $idD2 = $domicilio2->id;

            $VariablesPersona->lugarTrabajo       = "SIN INFORMACION";
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            $VariablesPersona->telefonoTrabajo    = "SIN INFORMACION";
        } else {

            $domicilio2              = new Domicilio();
            $domicilio2->idMunicipio = $request->idMunicipio2;
            $domicilio2->idLocalidad = $request->idLocalidad2;
            $domicilio2->idColonia   = $request->idColonia2;
            $domicilio2->calle       = $request->calle2;
            $domicilio2->numExterno  = $request->numExterno2;
            $domicilio2->numInterno  = $request->numInterno2;
            $domicilio2->save();
            //Agregar a bitacora
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona,domicilio', 'accion' => 'insert', 'descripcion' => 'Se han registrado Datos del Trabajo de Autoridad', 'idFilaAccion' => $domicilio2->id]);

            $idD2 = $domicilio2->id;

            $VariablesPersona->lugarTrabajo       = $request->lugarTrabajo;
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            $VariablesPersona->telefonoTrabajo    = $request->telefonoTrabajo;

        }

        $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
        $VariablesPersona->idEscolaridad = $request->idEscolaridad;
        $VariablesPersona->idReligion    = $request->idReligion;
        $VariablesPersona->idDomicilio   = $idD1;
        // $VariablesPersona->docIdentificacion = $request->docIdentificacion;
        if (!is_null($request->docIdentificacion)) {
            if ($request->docIdentificacion == 'OTRO') {
                $VariablesPersona->docIdentificacion = $request->otroDocumento;
            } else {
                $VariablesPersona->docIdentificacion = $request->docIdentificacion;
            }
        }
        $VariablesPersona->numDocIdentificacion = $request->numDocIdentificacion;
        $VariablesPersona->representanteLegal   = "NO APLICA";
        $VariablesPersona->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado Variables Persona de Autoridad', 'idFilaAccion' => $VariablesPersona->id]);
        $idVariablesPersona = $VariablesPersona->id;

        $ExtraAutoridad                     = new ExtraAutoridad();
        $ExtraAutoridad->idVariablesPersona = $idVariablesPersona;
        $ExtraAutoridad->antiguedad         = $request->antiguedad;
        $ExtraAutoridad->rango              = $request->rango;
        $ExtraAutoridad->horarioLaboral     = $request->horarioLaboral;

        $ExtraAutoridad->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_autoridad', 'accion' => 'insert', 'descripcion' => 'Se ha registrado Informacion extra de Autoridad', 'idFilaAccion' => $ExtraAutoridad->id]);

        $narracion                  = new Narracion();
        $narracion->idInvolucrado   = $ExtraAutoridad->id;
        $narracion->idCarpeta       = $request->idCarpeta;
        $narracion->narracion       = $request->narracionUno;
        $narracion->tipoInvolucrado = 3;
        $narracion->archivo         = null;
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
    public function edit($idCarpeta, $idExtraAutoridad)
    {
        $personales = DB::table('extra_autoridad', 'extra_autoridad.id', '=', $idExtraAutoridad)
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_autoridad.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'persona.idMunicipioOrigen')
            ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
        //->select('persona.*', 'persona.id as idPersona', 'variables_persona.*', 'variables_persona.id as idVariablesPersona', 'extra_autoridad.*', 'extra_autoridad.id $idExtraAutoridad')
            ->select('cat_estado.id as idEstadoOrigen', 'persona.*', 'persona.id as idPersona', 'variables_persona.id as idVariablesPersona', 'variables_persona.*', 'extra_autoridad.*', 'extra_autoridad.id as idExtraAutoridad')
            ->where('extra_autoridad.id', '=', $idExtraAutoridad)

            ->get()->first();
        $direccion = DB::table('domicilio', 'domicilio.id', '=', $personales->idDomicilio)
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->select('cat_municipio.idEstado as idEstado', 'domicilio.*', 'domicilio.id as idDomicilio')
            ->where('domicilio.id', '=', $personales->idDomicilio)
            ->get()->first();
        $direccionTrab = DB::table('variables_persona', 'variables_persona.idPersona', '=', $personales->idPersona)
            ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilioTrabajo')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->select('cat_municipio.idEstado as idEstado', 'domicilio.*', 'domicilio.id as idDomicilio')
            ->where('variables_persona.idPersona', '=', $personales->idPersona)
            ->get()->first();
        //dump($personales, $direccion, $direccionTrab);
        $carpeta    = Carpeta::find($idCarpeta);
        $numCarpeta = $carpeta->numCarpeta;

        $escolaridades  = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $estadoscivil   = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $etnias         = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $lenguas        = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $ocupaciones    = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $religiones     = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $autoridades    = CarpetaController::getAutoridades($idCarpeta)->first();

        //dump($autoridades, $idCarpeta, $personales, $direccion, $direccionTrab);

        $idCarpeta = $personales->idCarpeta;

        return view('edit-forms.autoridad')
            ->with('personales', $personales)
            ->with('direccion', $direccion)
            ->with('direccionTrab', $direccionTrab)
            ->with('idCarpeta', $idCarpeta)
            ->with('numCarpeta', $numCarpeta)
            ->with('escolaridades', $escolaridades)
            ->with('estados', $estados)
            ->with('municipiosVer', $municipiosVer)
            ->with('estadoscivil', $estadoscivil)
            ->with('etnias', $etnias)
            ->with('lenguas', $lenguas)
            ->with('nacionalidades', $nacionalidades)
            ->with('ocupaciones', $ocupaciones)
            ->with('religiones', $religiones)
            ->with('autoridades', $autoridades);
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
        $persona = Persona::where('curp', $request->curp)->where('curp', '!=', null)->where('id', '!=', $request->idPersona)->get();
        if ($persona->isNotEmpty()) {
            Alert::error('Ya existe una persona registrada con ese CURP.', 'Error')->persistent("Aceptar");
            return back()->withInput();
        }

        $persona                    = Persona::find($request->idPersona);
        $persona->nombres           = $request->nombres;
        $persona->primerAp          = $request->primerAp;
        $persona->segundoAp         = $request->segundoAp;
        $fechaAux                   = $request->fechaNacimiento;
        $fechaNacimiento            = date("Y-m-d", strtotime($fechaAux));
        $persona->fechaNacimiento   = $fechaNacimiento;
        $persona->rfc               = $request->rfc . $request->homo;
        $persona->curp              = $request->curp;
        $persona->sexo              = $request->sexo;
        $persona->idNacionalidad    = $request->idNacionalidad;
        $persona->idEtnia           = $request->idEtnia;
        $persona->idLengua          = $request->idLengua;
        $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
        $persona->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'update', 'descripcion' => 'Se ha actualizado Datos Personales de una Autoridad', 'idFilaAccion' => $persona->id]);

        if ($request->rfcAux != $request->rfc . $request->homo) {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'update', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo Autoridad.', 'idFilaAccion' => $persona->id]);
        }

        $idPersona = $persona->id;

        $domicilio              = Domicilio::find($request->idDomicilio);
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia   = $request->idColonia;
        $domicilio->calle       = $request->calle;
        $domicilio->numExterno  = $request->numExterno;
        $domicilio->numInterno  = $request->numInterno;
        $domicilio->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado la Direccion de Autoridad', 'idFilaAccion' => $domicilio->id]);

        $idD1 = $domicilio->id;

        $VariablesPersona                 = VariablesPersona::find($request->idVariablesPersona);
        $VariablesPersona->idCarpeta      = $request->idCarpeta;
        $VariablesPersona->idPersona      = $idPersona;
        $VariablesPersona->edad           = $request->edad;
        $VariablesPersona->telefono       = $request->telefono;
        $VariablesPersona->motivoEstancia = $request->motivoEstancia;
        $VariablesPersona->idOcupacion    = $request->idOcupacion;
        if ($request->idOcupacion == 2947) {

            $domicilio2              = Domicilio::find($request->idDomicilioTrabajo);
            $domicilio2->idMunicipio = 2496;
            $domicilio2->idLocalidad = 27153;
            $domicilio2->idColonia   = 49172;
            $domicilio2->calle       = "SIN INFORMACION";
            $domicilio2->numExterno  = "S/N";
            $domicilio2->numInterno  = "S/N";
            $domicilio2->save();
            //Agregar a bitacora
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona,domicilio', 'accion' => 'insert', 'descripcion' => 'Se han registrado Datos del Trabajo de Autoridad', 'idFilaAccion' => $domicilio2->id]);

            $idD2 = $domicilio2->id;

            $VariablesPersona->lugarTrabajo       = "SIN INFORMACION";
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            $VariablesPersona->telefonoTrabajo    = "SIN INFORMACION";
        } else {

            $domicilio2              = Domicilio::find($request->idDomicilioTrabajo);
            $domicilio2->idMunicipio = $request->idMunicipio2;
            $domicilio2->idLocalidad = $request->idLocalidad2;
            $domicilio2->idColonia   = $request->idColonia2;
            $domicilio2->calle       = $request->calle2;
            $domicilio2->numExterno  = $request->numExterno2;
            $domicilio2->numInterno  = $request->numInterno2;
            $domicilio2->save();
            //Agregar a bitacora
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona,domicilio', 'accion' => 'insert', 'descripcion' => 'Se han registrado Datos del Trabajo de Autoridad', 'idFilaAccion' => $domicilio2->id]);

            $idD2 = $domicilio2->id;

            $VariablesPersona->lugarTrabajo       = $request->lugarTrabajo;
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            $VariablesPersona->telefonoTrabajo    = $request->telefonoTrabajo;

        }
        $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
        $VariablesPersona->idEscolaridad = $request->idEscolaridad;
        $VariablesPersona->idReligion    = $request->idReligion;
        $VariablesPersona->idDomicilio   = $idD1;
        // $VariablesPersona->docIdentificacion = $request->docIdentificacion;
        if (!is_null($request->docIdentificacion)) {
            if ($request->docIdentificacion == 'OTRO') {
                $VariablesPersona->docIdentificacion = $request->otroDocumento;
            } else {
                $VariablesPersona->docIdentificacion = $request->docIdentificacion;
            }
        }
        $VariablesPersona->numDocIdentificacion = $request->numDocIdentificacion;
        $VariablesPersona->representanteLegal   = "NO APLICA";
        $VariablesPersona->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'update', 'descripcion' => 'Se ha actualizado Variables Persona de Autoridad', 'idFilaAccion' => $VariablesPersona->id]);
        $idVariablesPersona = $VariablesPersona->id;

        $ExtraAutoridad                     = ExtraAutoridad::find($request->idExtraAutoridad);
        $ExtraAutoridad->idVariablesPersona = $idVariablesPersona;
        $ExtraAutoridad->antiguedad         = $request->antiguedad;
        $ExtraAutoridad->rango              = $request->rango;
        $ExtraAutoridad->horarioLaboral     = $request->horarioLaboral;

        $ExtraAutoridad->save();
        //Agregar a bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_autoridad', 'accion' => 'update', 'descripcion' => 'Se ha actualizado Informacion extra de Autoridad', 'idFilaAccion' => $ExtraAutoridad->id]);

        Alert::success('Autoridad actualizada con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('carpeta', ['idCarpeta' => $request->idCarpeta, 'id' => $request->idExtraAutoridad]);
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
