<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\StoreTestigo;
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
use App\Models\ExtraTestigo;
use App\Models\Interprete;
use App\Models\Narracion;
use App\Models\Notificacion;
use App\Models\Persona;
use App\Models\VariablesPersona;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestigoController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $numCarpeta     = $carpetaNueva[0]->numCarpeta;
            $testigos       = CarpetaController::getTestigos($idCarpeta);
            $escolaridades  = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil   = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $etnias         = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lenguas        = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $ocupaciones    = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $religiones     = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            return view('forms.testigo')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('testigos', $testigos)
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

    public function storeTestigo(StoreTestigo $request)
    {
        //dd($request->all());
        $persona = Persona::where('curp', $request->curp)->get();
        if ($persona->isNotEmpty()) {
            Alert::error('Ya existe una persona registrada con ese CURP.', 'Error')->persistent("Aceptar");
            return back()->withInput();
        } else {
            $persona                  = new Persona();
            $persona->nombres         = $request->nombres;
            $persona->primerAp        = $request->primerAp;
            $persona->segundoAp       = $request->segundoAp;
            $fechaAux                 = $request->fechaNacimiento;
            $fechaNacimiento          = date("Y-m-d", strtotime($fechaAux));
            $persona->fechaNacimiento = $fechaNacimiento;

            $persona->rfc  = $request->rfc . $request->homo;
            $persona->curp = $request->curp;
            if (!is_null($request->sexo)) {
                $persona->sexo = $request->sexo;
            }
            if (!is_null($request->idNacionalidad)) {
                $persona->idNacionalidad = $request->idNacionalidad;
            }
            if (!is_null($request->idEtnia)) {
                $persona->idEtnia = $request->idEtnia;
            }
            if (!is_null($request->idLengua)) {
                $persona->idLengua = $request->idLengua;
                if (($request->idLengua == 70) | ($request->idLengua == 69)) {
                    $idInterprete = null;
                } else {
                    $interprete               = new Interprete();
                    $interprete->nombre       = $request->nombreInterprete;
                    $interprete->organizacion = $request->lugarTrabInterprete;
                    $interprete->idLengua     = $request->idLengua;
                    $interprete->save();
                    $idInterprete = $interprete->id;
                }
            }
            if (!is_null($request->idMunicipioOrigen)) {
                $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
            }
            $persona->save();
            if ($request->rfcAux != $request->rfc . $request->homo) {
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo testigo.', 'idFilaAccion' => $persona->id]);
            }
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona física de tipo testigo.', 'idFilaAccion' => $persona->id]);
            $idPersona = $persona->id;

            $domicilio = new Domicilio();
            if (!is_null($request->idMunicipio)) {
                $domicilio->idMunicipio = $request->idMunicipio;
            }
            if (!is_null($request->idLocalidad)) {
                $domicilio->idLocalidad = $request->idLocalidad;
            }
            if (!is_null($request->idColonia)) {
                $domicilio->idColonia = $request->idColonia;
            }
            if (!is_null($request->calle)) {
                $domicilio->calle = $request->calle;
            }
            if (!is_null($request->numExterno)) {
                $domicilio->numExterno = $request->numExterno;
            }
            if (!is_null($request->numInterno)) {
                $domicilio->numInterno = $request->numInterno;
            }
            $domicilio->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio para persona física de tipo testigo.', 'idFilaAccion' => $domicilio->id]);
            $idD1 = $domicilio->id;

            $domicilio3 = new Domicilio();
            if (!is_null($request->idMunicipio3)) {
                $domicilio3->idMunicipio = $request->idMunicipio3;
            }
            if (!is_null($request->idLocalidad3)) {
                $domicilio3->idLocalidad = $request->idLocalidad3;
            }
            if (!is_null($request->idColonia3)) {
                $domicilio3->idColonia = $request->idColonia3;
            }
            if (!is_null($request->calle3)) {
                $domicilio3->calle = $request->calle3;
            }
            if (!is_null($request->numExterno3)) {
                $domicilio3->numExterno = $request->numExterno3;
            }
            if (!is_null($request->numInterno3)) {
                $domicilio3->numInterno = $request->numInterno3;
            }
            $domicilio3->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio para notificaciones para persona física.', 'idFilaAccion' => $domicilio3->id]);
            $idD3 = $domicilio3->id;

            $notificacion              = new Notificacion();
            $notificacion->idDomicilio = $idD3;
            $notificacion->correo      = $request->correo;
            $notificacion->telefono    = $request->telefono;
            $notificacion->fax         = $request->fax;
            $notificacion->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva notificación para persona física de tipo testigo.', 'idFilaAccion' => $notificacion->id]);
            $idNotificacion = $notificacion->id;

            $VariablesPersona            = new VariablesPersona();
            $VariablesPersona->idCarpeta = $request->idCarpeta;
            $VariablesPersona->idPersona = $idPersona;
            $VariablesPersona->edad      = $request->edad;
            if (!is_null($request->telefono)) {
                $VariablesPersona->telefono = $request->telefono;
            }
            if (!is_null($request->motivoEstancia)) {
                $VariablesPersona->motivoEstancia = $request->motivoEstancia;
            }
            if ($request->filled('idOcupacion')) {
                $VariablesPersona->idOcupacion = $request->idOcupacion;

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
                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona,domicilio', 'accion' => 'insert', 'descripcion' => 'Se han registrado Datos del Trabajo de Testigo', 'idFilaAccion' => $domicilio2->id]);

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
            }
            if (!is_null($request->idEstadoCivil)) {
                $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
            }
            if (!is_null($request->idEscolaridad)) {
                $VariablesPersona->idEscolaridad = $request->idEscolaridad;
            }
            if (!is_null($request->idReligion)) {
                $VariablesPersona->idReligion = $request->idReligion;
            }
            $VariablesPersona->idDomicilio  = $idD1;
            $VariablesPersona->idInterprete = $idInterprete;

            if (!is_null($request->docIdentificacion)) {
                $VariablesPersona->docIdentificacion = $request->docIdentificacion;
            }
            if (!is_null($request->numDocIdentificacion)) {
                $VariablesPersona->numDocIdentificacion = $request->numDocIdentificacion;
            }
            if (!is_null($request->lugarTrabajo)) {
                $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
            }
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            if (!is_null($request->telefonoTrabajo)) {
                $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;
            }
            $VariablesPersona->representanteLegal = "NO APLICA";
            $VariablesPersona->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo variables persona de persona física de tipo testigo.', 'idFilaAccion' => $VariablesPersona->id]);
            $idVariablesPersona = $VariablesPersona->id;

            $ExtraTestigo                     = new ExtraTestigo();
            $ExtraTestigo->idVariablesPersona = $idVariablesPersona;
            $ExtraTestigo->idNotificacion     = $idNotificacion;
            if ($request->conoceAlDenunciado === 1) {
                $ExtraTestigo->conoceAlDenunciado = 1;
            }

            $ExtraTestigo->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_testigo', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo extra testigo de persona física.', 'idFilaAccion' => $ExtraTestigo->id]);

            $narracion                = new Narracion();
            $narracion->idInvolucrado = $ExtraTestigo->id;
            $narracion->idCarpeta     = $request->idCarpeta;
            //dd($request);
            $narracion->narracion       = $request->narracionUno;
            $narracion->tipoInvolucrado = 4;
            $narracion->archivo         = null;
            $narracion->save();

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'narracion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva narracion de persona física de tipo testigo.', 'idFilaAccion' => $narracion->id]);

            Alert::success('Testigo registrado con éxito', 'Hecho')->persistent("Aceptar");
            //return redirect()->route('carpeta', $request->idCarpeta);
            return redirect()->route('new.testigo', $request->idCarpeta);
        }
    }

    public function edit($idCarpeta, $idExtraTestigo)
    {
        $testigo = ExtraTestigo::where('id', $idExtraTestigo)->get();
        //dump($testigo->isNotEmpty());
        if ($testigo->isNotEmpty()) {
            $personales = DB::table('extra_testigo', 'extra_testigo.id', '=', $idExtraTestigo)
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_testigo.idVariablesPersona')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->leftjoin('interprete', 'interprete.id', '=', 'variables_persona.idInterprete')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'persona.idMunicipioOrigen')
            //->join('cat_estado','cat_estado.id','=','cat_municipio.idEstado')
                ->select('extra_testigo.id as $idExtraTestigo', 'cat_municipio.idEstado as idEstado', 'persona.*', 'persona.id as idPersona', 'variables_persona.id as idVariablesPersona', 'variables_persona.*', 'extra_testigo.idNotificacion as idNotificacion', 'interprete.id as idInterprete', 'interprete.nombre as nombreInterprete', 'interprete.organizacion as trabajoInterprete')
                ->where('extra_testigo.id', '=', $idExtraTestigo)
                ->get()->first();
            //dd($personales);

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
            $direccionNotif = DB::table('notificacion', 'notificacion.id', '=', $personales->idNotificacion)
                ->join('domicilio', 'domicilio.id', '=', 'notificacion.idDomicilio')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
                ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
                ->select('notificacion.*', 'cat_municipio.idEstado as idEstado', 'domicilio.*', 'domicilio.id as idDomicilio')
                ->where('notificacion.id', '=', $personales->idNotificacion)
                ->get()->first();

            $carpeta    = Carpeta::find($idCarpeta);
            $numCarpeta = $carpeta->numCarpeta;

            //dump($numCarpeta, $idCarpeta, $personales, $direccion, $direccionTrab, $direccionNotif);
            $escolaridades  = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil   = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $etnias         = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lenguas        = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $ocupaciones    = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $religiones     = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $idCarpeta      = $personales->idCarpeta;

            return view('edit-forms.testigo')
                ->with('personales', $personales)
                ->with('direccion', $direccion)
                ->with('direccionTrab', $direccionTrab)
                ->with('direccionNotif', $direccionNotif)
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
                ->with('religiones', $religiones);
        } else {
            return redirect()->route('home');
        }
    }

    public function update(Request $request, $id)
    {
        $persona = Persona::where('curp', $request->curp)->where('curp', '!=', null)->where('id', '!=', $request->idPersona)->get();        
        if ($persona->isNotEmpty()) {
            Alert::error('Ya existe una persona registrada con ese CURP.', 'Error')->persistent("Aceptar");
            return back()->withInput();
        } else {
            $persona                  = Persona::find($request->idPersona);
            $persona->nombres         = $request->nombres;
            $persona->primerAp        = $request->primerAp;
            $persona->segundoAp       = $request->segundoAp;
            $fechaAux                 = $request->fechaNacimiento;
            $fechaNacimiento          = date("Y-m-d", strtotime($fechaAux));
            $persona->fechaNacimiento = $fechaNacimiento;

            $persona->rfc  = $request->rfc . $request->homo;
            $persona->curp = $request->curp;
            if (!is_null($request->sexo)) {
                $persona->sexo = $request->sexo;
            }
            if (!is_null($request->idNacionalidad)) {
                $persona->idNacionalidad = $request->idNacionalidad;
            }
            if (!is_null($request->idEtnia)) {
                $persona->idEtnia = $request->idEtnia;
            }
            if ($request->filled('idLengua')) {
                $persona->idLengua = $request->idLengua;

                if (($request->idLengua == 70) | ($request->idLengua == 69)) {
                    $idInterprete = null;

                } elseif (is_null($request->idInterprete)) {
                    $interprete               = new Interprete();
                    $interprete->nombre       = $request->nombreInterprete;
                    $interprete->organizacion = $request->lugarTrabInterprete;
                    $interprete->idLengua     = $request->idLengua;
                    $interprete->save();
                    $idInterprete = $interprete->id;
                } else {
                    $interprete               = Interprete::find($request->idInterprete);
                    $interprete->nombre       = $request->nombreInterprete;
                    $interprete->organizacion = $request->lugarTrabInterprete;
                    $interprete->idLengua     = $request->idLengua;
                    $interprete->save();
                    $idInterprete = $interprete->id;
                }

            }

            if (!is_null($request->idMunicipioOrigen)) {
                $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
            }
            $persona->save();
            if ($request->rfcAux != $request->rfc . $request->homo) {
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'update', 'descripcion' => 'Se ha registrado y actualizado un RFC diferente al generado por el sistema para una persona física de tipo testigo.', 'idFilaAccion' => $persona->id]);
            }
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'update', 'descripcion' => 'Se ha actualizado  persona física de tipo testigo.', 'idFilaAccion' => $persona->id]);
            $idPersona = $persona->id;

            $domicilio = Domicilio::find($request->idDomicilio);
            if (!is_null($request->idMunicipio)) {
                $domicilio->idMunicipio = $request->idMunicipio;
            }
            if (!is_null($request->idLocalidad)) {
                $domicilio->idLocalidad = $request->idLocalidad;
            }
            if (!is_null($request->idColonia)) {
                $domicilio->idColonia = $request->idColonia;
            }
            if (!is_null($request->calle)) {
                $domicilio->calle = $request->calle;
            }
            if (!is_null($request->numExterno)) {
                $domicilio->numExterno = $request->numExterno;
            }
            if (!is_null($request->numInterno)) {
                $domicilio->numInterno = $request->numInterno;
            }
            $domicilio->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado domicilio para persona física de tipo testigo.', 'idFilaAccion' => $domicilio->id]);
            $idD1 = $domicilio->id;

            $domicilio2 = Domicilio::find($request->idDomicilioTrabajo);
            if (!is_null($request->idMunicipio2)) {
                $domicilio2->idMunicipio = $request->idMunicipio2;
            }
            if (!is_null($request->idLocalidad2)) {
                $domicilio2->idLocalidad = $request->idLocalidad2;
            }
            if (!is_null($request->idColonia2)) {
                $domicilio2->idColonia = $request->idColonia2;
            }
            if (!is_null($request->calle2)) {
                $domicilio2->calle = $request->calle2;
            }
            if (!is_null($request->numExterno2)) {
                $domicilio2->numExterno = $request->numExterno2;
            }
            if (!is_null($request->numInterno2)) {
                $domicilio2->numInterno = $request->numInterno2;
            }
            $domicilio2->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado domicilio de trabajo para persona física de tipo testigo.', 'idFilaAccion' => $domicilio2->id]);
            $idD2 = $domicilio2->id;

            $domicilio3 = Domicilio::find($request->idDomicilioNotif);
            if (!is_null($request->idMunicipio3)) {
                $domicilio3->idMunicipio = $request->idMunicipio3;
            }
            if (!is_null($request->idLocalidad3)) {
                $domicilio3->idLocalidad = $request->idLocalidad3;
            }
            if (!is_null($request->idColonia3)) {
                $domicilio3->idColonia = $request->idColonia3;
            }
            if (!is_null($request->calle3)) {
                $domicilio3->calle = $request->calle3;
            }
            if (!is_null($request->numExterno3)) {
                $domicilio3->numExterno = $request->numExterno3;
            }
            if (!is_null($request->numInterno3)) {
                $domicilio3->numInterno = $request->numInterno3;
            }
            $domicilio3->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado domicilio para notificaciones para persona física.', 'idFilaAccion' => $domicilio3->id]);
            $idD3 = $domicilio3->id;

            $notificacion              = Notificacion::find($request->idNotificacion);
            $notificacion->idDomicilio = $idD3;
            $notificacion->correo      = $request->correo;
            $notificacion->telefono    = $request->telefono;
            $notificacion->fax         = $request->fax;
            $notificacion->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'update', 'descripcion' => 'Se ha actualizado  notificación para persona física de tipo testigo.', 'idFilaAccion' => $notificacion->id]);
            $idNotificacion = $notificacion->id;

            $VariablesPersona            = VariablesPersona::find($request->idNotificacion);
            $VariablesPersona->idCarpeta = $request->idCarpeta;
            $VariablesPersona->idPersona = $idPersona;
            $VariablesPersona->edad      = $request->edad;
            if (!is_null($request->telefono)) {
                $VariablesPersona->telefono = $request->telefono;
            }
            if (!is_null($request->motivoEstancia)) {
                $VariablesPersona->motivoEstancia = $request->motivoEstancia;
            }
            if (!is_null($request->idOcupacion)) {
                $VariablesPersona->idOcupacion = $request->idOcupacion;
            }
            if (!is_null($request->idEstadoCivil)) {
                $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
            }
            if (!is_null($request->idEscolaridad)) {
                $VariablesPersona->idEscolaridad = $request->idEscolaridad;
            }
            if (!is_null($request->idReligion)) {
                $VariablesPersona->idReligion = $request->idReligion;
            }
            $VariablesPersona->idDomicilio  = $idD1;
            $VariablesPersona->idInterprete = $idInterprete;
            if (!is_null($request->docIdentificacion)) {
                $VariablesPersona->docIdentificacion = $request->docIdentificacion;
            }
            if (!is_null($request->numDocIdentificacion)) {
                $VariablesPersona->numDocIdentificacion = $request->numDocIdentificacion;
            }
            if (!is_null($request->lugarTrabajo)) {
                $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
            }
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            if (!is_null($request->telefonoTrabajo)) {
                $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;
            }
            $VariablesPersona->representanteLegal = "NO APLICA";
            $VariablesPersona->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'update', 'descripcion' => 'Se ha actualizado variables persona de persona física de tipo testigo.', 'idFilaAccion' => $VariablesPersona->id]);
            $idVariablesPersona = $VariablesPersona->id;

            $ExtraTestigo = ExtraTestigo::where('idVariablesPersona', '=', $request->idExtraTestigo)->get()->first();
            if ($request->conoceAlDenunciado === 1) {
                $ExtraTestigo->conoceAlDenunciado = 1;
            }
            //    dump($ExtraTestigo);
            $ExtraTestigo->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_testigo', 'accion' => 'update', 'descripcion' => 'Se ha actualizado extra testigo de persona física.', 'idFilaAccion' => $ExtraTestigo->id]);

            // $narracion                = new Narracion();
            // $narracion->idInvolucrado = $ExtraTestigo->id;
            // $narracion->idCarpeta     = $request->idCarpeta;
            // //dd($request);
            // $narracion->narracion       = $request->narracionUno;
            // $narracion->tipoInvolucrado = 4;
            // $narracion->archivo         = null;
            // $narracion->save();

            //Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'narracion', 'accion' => 'update', 'descripcion' => 'Se ha actualizado  narracion de persona física de tipo testigo.', 'idFilaAccion' => $narracion->id]);

            Alert::success('Testigo actualizado con éxito', 'Hecho')->persistent("Aceptar");            
            return redirect()->route('carpeta', $request->idCarpeta);
            //return redirect()->route('edit.testigo', ['idCarpeta' => $request->idCarpeta, '$idExtraTestigo' => $request->idExtraTestigo]);
        }
    }
}
