<?php

namespace App\Http\Controllers;

use DB;
use Alert;
use App\Http\Requests\StoreDenunciado;
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
use App\Models\CatPuesto;
use App\Models\CatReligion;
use App\Models\Domicilio;
use App\Models\ExtraDenunciado;
use App\Models\Narracion;
use App\Models\Notificacion;
use App\Models\Persona;
use App\Models\VariablesPersona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DenunciadoController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()) {
            return redirect()->route('home');
        }

        $numCarpeta     = $carpetaNueva[0]->numCarpeta;
        $denunciados    = CarpetaController::getDenunciados($idCarpeta);
        $escolaridades  = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $estadoscivil   = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $etnias         = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $lenguas        = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $ocupaciones    = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $puestos        = CatPuesto::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $religiones     = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        return view('forms.denunciado')->with('idCarpeta', $idCarpeta)
            ->with('numCarpeta', $numCarpeta)
            ->with('denunciados', $denunciados)
            ->with('escolaridades', $escolaridades)
            ->with('estados', $estados)
            ->with('municipiosVer', $municipiosVer)
            ->with('estadoscivil', $estadoscivil)
            ->with('etnias', $etnias)
            ->with('lenguas', $lenguas)
            ->with('nacionalidades', $nacionalidades)
            ->with('ocupaciones', $ocupaciones)
            ->with('puestos', $puestos)
            ->with('religiones', $religiones);
    }

    public function storeDenunciado(StoreDenunciado $request)
    {
        //dd($request->all());
        //QRR
        if ($request->tipoDenunciado == 1) {
            $persona          = new Persona();
            $persona->nombres = $request->nombresQ;
            $persona->save();
            $idPersona = $persona->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona física de tipo denunciado QRR.', 'idFilaAccion' => $idPersona]);

            $domicilio = new Domicilio();
            $domicilio->save();
            $idD1 = $domicilio->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado QRR.', 'idFilaAccion' => $idD1]);

            $domicilio2 = new Domicilio();
            $domicilio2->save();
            $idD2 = $domicilio2->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado QRR.', 'idFilaAccion' => $idD2]);

            $domicilio3 = new Domicilio();
            $domicilio3->save();
            $idD3 = $domicilio3->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado QRR.', 'idFilaAccion' => $idD3]);

            $VariablesPersona                     = new VariablesPersona();
            $VariablesPersona->idCarpeta          = $request->idCarpeta;
            $VariablesPersona->idPersona          = $idPersona;
            $VariablesPersona->idDomicilio        = $idD1;
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            $VariablesPersona->save();
            $idVariablesPersona = $VariablesPersona->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado nuevas variables de persona física de tipo denunciado QRR.', 'idFilaAccion' => $idVariablesPersona]);

            $notificacion              = new Notificacion();
            $notificacion->idDomicilio = $idD3;
            $notificacion->save();
            $idNotificacion = $notificacion->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva notificación de persona física de tipo denunciado QRR.', 'idFilaAccion' => $idNotificacion]);

            $ExtraDenunciado                     = new ExtraDenunciado();
            $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
            $ExtraDenunciado->idNotificacion     = $idNotificacion;
            $ExtraDenunciado->save();
            $idExtraDenunciado = $ExtraDenunciado->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo extra denunciado de persona fisica de tipo denunciado QRR.', 'idFilaAccion' => $idExtraDenunciado]);

        }
        //Denunciado conocido
        elseif ($request->tipoDenunciado == 2) {
            $persona           = new Persona();
            $persona->nombres  = $request->nombresC;
            $persona->primerAp = $request->primerApC;
            $persona->rfc      = "SIN INFORMACION";
            $persona->save();
            $idPersona = $persona->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona fisica de tipo denunciado conocido.', 'idFilaAccion' => $idPersona]);

            $domicilio              = new Domicilio();
            $domicilio->idMunicipio = $request->idMunicipioC;
            $domicilio->idLocalidad = $request->idLocalidadC;
            $domicilio->idColonia   = $request->idColoniaC;
            $domicilio->calle       = $request->calleC;
            $domicilio->numExterno  = $request->numExternoC;
            $domicilio->numInterno  = $request->numInternoC;
            $domicilio->save();
            $idD1 = $domicilio->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado conocido.', 'idFilaAccion' => $idD1]);

            $domicilio2 = new Domicilio();
            $domicilio2->save();
            $idD2 = $domicilio2->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado conocido.', 'idFilaAccion' => $idD2]);

            $domicilio3 = new Domicilio();
            $domicilio3->save();
            $idD3 = $domicilio3->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado conocido.', 'idFilaAccion' => $idD3]);

            $VariablesPersona                     = new VariablesPersona();
            $VariablesPersona->idCarpeta          = $request->idCarpeta;
            $VariablesPersona->idPersona          = $idPersona;
            $VariablesPersona->idDomicilio        = $idD1;
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            $VariablesPersona->save();
            $idVariablesPersona = $VariablesPersona->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado nuevas variables de persona física de tipo denunciado conocido.', 'idFilaAccion' => $idVariablesPersona]);

            $notificacion              = new Notificacion();
            $notificacion->idDomicilio = $idD3;
            $notificacion->save();
            $idNotificacion = $notificacion->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva notificación de persona física de tipo denunciado conocido.', 'idFilaAccion' => $idNotificacion]);

            $ExtraDenunciado                     = new ExtraDenunciado();
            $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
            $ExtraDenunciado->idNotificacion     = $idNotificacion;
            $ExtraDenunciado->alias              = $request->aliasC;
            $ExtraDenunciado->senasPartic        = $request->senasParticC;
            $ExtraDenunciado->save();
            $idExtraDenunciado = $ExtraDenunciado->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo extra denunciado de persona física de tipo denunciado conocido.', 'idFilaAccion' => $idExtraDenunciado]);
        }
        //Por comparecencia
        elseif ($request->tipoDenunciado == 3) {
            //Persona física
            if ($request->esEmpresa == 0) {
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
                    }
                    if (!is_null($request->idMunicipioOrigen)) {
                        $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
                    }
                    $persona->esEmpresa = 0;
                    $persona->save();
                    $idPersona = $persona->id;
                    if ($request->rfcAux != $request->rfc . $request->homo) {
                        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona fisica de tipo denunciado por comparecencia.', 'idFilaAccion' => $persona->id]);
                    }
                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona física de tipo denunciado por comparecencia.', 'idFilaAccion' => $idPersona]);

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
                    $idD1 = $domicilio->id;

                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado por comparecencia.', 'idFilaAccion' => $idD1]);

                    $domicilio2 = new Domicilio();
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
                    $idD2 = $domicilio2->id;

                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado por comparecencia.', 'idFilaAccion' => $idD2]);

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
                    $idD3 = $domicilio3->id;

                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'SSe ha registrado un nuevo domicilio de persona física de tipo denunciado por comparecencia.', 'idFilaAccion' => $idD3]);

                    $notificacion              = new Notificacion();
                    $notificacion->idDomicilio = $idD3;
                    $notificacion->correo      = $request->correo;
                    $notificacion->telefono    = $request->telefono;
                    $notificacion->fax         = $request->fax;
                    $notificacion->save();
                    $idNotificacion = $notificacion->id;

                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado notificación de persona física de tipo denunciado por comparecencia.', 'idFilaAccion' => $idNotificacion]);

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
                    $VariablesPersona->idDomicilio = $idD1;
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
                    $idVariablesPersona = $VariablesPersona->id;

                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado nuevas variables de persona física de tipo denunciado por comparecencia.', 'idFilaAccion' => $idVariablesPersona]);

                    $ExtraDenunciado                     = new ExtraDenunciado();
                    $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
                    $ExtraDenunciado->idNotificacion     = $idNotificacion;
                    if (!is_null($request->idPuesto)) {
                        $ExtraDenunciado->idPuesto = $request->idPuesto;
                    }
                    if (!is_null($request->alias)) {
                        $ExtraDenunciado->alias = $request->alias;
                    }
                    if (!is_null($request->senasPartic)) {
                        $ExtraDenunciado->senasPartic = $request->senasPartic;
                    }
                    if (!is_null($request->ingreso)) {
                        $ExtraDenunciado->ingreso = $request->ingreso;
                    }
                    if (!is_null($request->periodoIngreso)) {
                        $ExtraDenunciado->periodoIngreso = $request->periodoIngreso;
                    }
                    if (!is_null($request->residenciaAnterior)) {
                        $ExtraDenunciado->residenciaAnterior = $request->residenciaAnterior;
                    }
                    $ExtraDenunciado->idAbogado = null;
                    if (!is_null($request->personasBajoSuGuarda)) {
                        $ExtraDenunciado->personasBajoSuGuarda = $request->personasBajoSuGuarda;
                    }
                    if ($request->esperseguidoPenalmente == 1) {
                        $ExtraDenunciado->perseguidoPenalmente = 1;
                    }
                    if (!is_null($request->vestimenta)) {
                        $ExtraDenunciado->vestimenta = $request->vestimenta;
                    }

                    $ExtraDenunciado->save();
                    $idExtraDenunciado = $ExtraDenunciado->id;

                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'insert', 'descripcion' => 'Se ha registradoun nuevo extra denunciado de persona física de tipo denunciado por comparecencia.', 'idFilaAccion' => $idExtraDenunciado]);

                    //------------ N A R R A C I O N B I T A C O R A
                    $narracion                = new Narracion();
                    $narracion->idInvolucrado = $ExtraDenunciado->id;
                    $narracion->idCarpeta     = $request->idCarpeta;
                    //dd($request);
                    $narracion->narracion       = $request->narracionUno;
                    $narracion->tipoInvolucrado = 2;
                    $narracion->archivo         = null;
                    $narracion->save();
                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'narracion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una narracion de persona fisica de tipo denunciado por comparecencia.', 'idFilaAccion' => $narracion->id]);

                }
            } elseif ($request->esEmpresa == 1) {
                $persona            = new Persona();
                $persona->nombres   = $request->nombres2;
                $persona->rfc       = $request->rfc2 . $request->homo2;
                $persona->esEmpresa = 1;
                $persona->save();
                $idPersona = $persona->id;
                if ($request->rfcAux != $request->rfc2 . $request->homo2) {
                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona moral de tipo denunciado por comparecencia.', 'idFilaAccion' => $persona->id]);
                }
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona moral de tipo denunciado por comparecencia.', 'idFilaAccion' => $idPersona]);

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
                $idD1 = $domicilio->id;

                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo denunciado por comparecencia.', 'idFilaAccion' => $idD1]);

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
                $idD3 = $domicilio3->id;

                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona moral de tipo denunciado por comparecencia.', 'idFilaAccion' => $idD3]);

                $notificacion              = new Notificacion();
                $notificacion->idDomicilio = $idD3;
                $notificacion->correo      = $request->correo;
                $notificacion->telefono    = $request->telefonoN;
                $notificacion->fax         = $request->fax;
                $notificacion->save();
                $idNotificacion = $notificacion->id;

                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva notificación de persona moral de tipo denunciado por comparecencia.', 'idFilaAccion' => $idNotificacion]);

                $VariablesPersona                     = new VariablesPersona();
                $VariablesPersona->idCarpeta          = $request->idCarpeta;
                $VariablesPersona->idPersona          = $idPersona;
                $VariablesPersona->idDomicilio        = $idD1;
                $VariablesPersona->idDomicilioTrabajo = $idD1;
                $VariablesPersona->representanteLegal = $request->representanteLegal;
                $VariablesPersona->save();
                $idVariablesPersona = $VariablesPersona->id;

                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado nuevas variables de persona moral de tipo denunciado por comparecencia.', 'idFilaAccion' => $idVariablesPersona]);

                $ExtraDenunciado                     = new ExtraDenunciado();
                $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
                $ExtraDenunciado->idNotificacion     = $idNotificacion;
                $ExtraDenunciado->senasPartic        = $request->senasPartic;

                $ExtraDenunciado->save();
                $idExtraDenunciado = $ExtraDenunciado->id;

                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo extra denunciado de persona moral de tipo denunciado por comparecencia.', 'idFilaAccion' => $idExtraDenunciado]);

                //------------ N A R R A C I O N B I T A C O R A
                $narracion                = new Narracion();
                $narracion->idInvolucrado = $ExtraDenunciado->id;
                $narracion->idCarpeta     = $request->idCarpeta;
                //dd($request);
                $narracion->narracion       = $request->narracionUnoM;
                $narracion->tipoInvolucrado = 2;
                $narracion->archivo         = null;
                $narracion->save();
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'narracion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una narracion de persona moral de tipo denunciado por comparecencia.', 'idFilaAccion' => $narracion->id]);
            }
        }
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
         */
        Alert::success('Investigado o imputado registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.denunciado', $request->idCarpeta);
    }

    public function showComplement($idDenunciado, $idCarpeta)
    {
        $denunciado = ExtraDenunciado::find($idDenunciado);
        //dd($denunciante);
        return view('forms.complement2')->with('extra', $denunciado)->with('idCarpeta', $idCarpeta);
    }

    public function storeComplement(Request $request)
    {
        //dd($request->all());
        $denunciado = ExtraDenunciado::find($request->idExtra);
        //$denunciante->fill($request->all());

        $denunciado->save();
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'update', 'descripcion' => 'Se ha modificado el campo complemento de la narración en extra denunciado.', 'idFilaAccion' => $denunciado->id]);
        Alert::success('Complemento agregado con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('carpeta', $request->idCarpeta);
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
    public function edit($idCarpeta, $id)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        $var = ExtraDenunciado::where('id', $id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()) {
            return redirect()->route('home');
        }

        $esMoral = DB::table('extra_denunciado')
        ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
        ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
        ->select('persona.esEmpresa')
        ->where('extra_denunciado.id', '=', $id)
        ->get()->first();

        $numCarpeta     = $carpetaNueva[0]->numCarpeta;
        $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        //dd($esMoral->esEmpresa);
        if($esMoral->esEmpresa == 1){
            //consultas para empresa

            $personales = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciado.id as idDenunciado', 'extra_denunciado.idNotificacion', 'variables_persona.id as idVariablesPersona', 'variables_persona.idDomicilio', 'variables_persona.representanteLegal', 'persona.id as idPersona', 'persona.nombres', 'persona.fechaNacimiento', 'persona.rfc', 'persona.esEmpresa')
            ->where('extra_denunciado.id', '=', $id)
            ->get()->first();

            $direccion = DB::table('domicilio')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->select('domicilio.id', 'domicilio.idMunicipio', 'domicilio.idLocalidad', 'domicilio.idColonia', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno', 'cat_municipio.idEstado', 'cat_colonia.codigoPostal')
            ->where('domicilio.id', '=', $personales->idDomicilio)
            ->get()->first();

            $direccionNotif = DB::table('notificacion')
            ->join('domicilio', 'domicilio.id', '=', 'notificacion.idDomicilio')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->select('notificacion.id as idNotificacion', 'notificacion.correo', 'notificacion.telefono', 'notificacion.fax', 'domicilio.id as idDomicilio', 'domicilio.idMunicipio', 'domicilio.idLocalidad', 'domicilio.idColonia', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno', 'cat_municipio.idEstado', 'cat_colonia.codigoPostal')
            ->where('notificacion.id', '=', $personales->idNotificacion)
            ->get()->first();

            //dump($idCarpeta, $estados, $municipiosVer, $personales, $direccion, $direccionNotif);
            return view('edit-forms.denunciado')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('estados', $estados)
                ->with('municipiosVer', $municipiosVer)
                ->with('personales', $personales)
                ->with('direccion', $direccion)
                ->with('direccionNotif', $direccionNotif);

        }else{
            $numCarpeta     = $carpetaNueva[0]->numCarpeta;
            $escolaridades  = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil   = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $etnias         = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lenguas        = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $ocupaciones    = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $religiones     = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $puestos        = CatPuesto::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

            $personales = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'persona.idMunicipioOrigen')
            ->select('extra_denunciado.id as idDenunciado', 'extra_denunciado.idPuesto', 'extra_denunciado.alias', 'extra_denunciado.senasPartic', 'extra_denunciado.ingreso', 'extra_denunciado.periodoIngreso', 'extra_denunciado.residenciaAnterior', 'extra_denunciado.personasBajoSuGuarda', 'extra_denunciado.perseguidoPenalmente', 'extra_denunciado.vestimenta', 'extra_denunciado.idNotificacion', 'variables_persona.id as idVariablesPersona', 'variables_persona.edad', 'variables_persona.telefono', 'variables_persona.motivoEstancia', 'variables_persona.docIdentificacion', 'variables_persona.numDocIdentificacion', 'variables_persona.lugarTrabajo', 'variables_persona.telefonoTrabajo', 'variables_persona.idDomicilio', 'variables_persona.idDomicilioTrabajo', 'variables_persona.idOcupacion', 'variables_persona.idEstadoCivil', 'variables_persona.idEscolaridad', 'variables_persona.idReligion', 'persona.id as idPersona', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.fechaNacimiento', 'persona.rfc', 'persona.curp', 'persona.sexo', 'persona.idMunicipioOrigen', 'cat_municipio.idEstado', 'persona.esEmpresa', 'persona.idNacionalidad', 'persona.idEtnia', 'persona.idLengua')
            ->where('extra_denunciado.id', '=', $id)
            ->get()->first();

            $direccion = DB::table('domicilio')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->select('domicilio.id', 'domicilio.idMunicipio', 'domicilio.idLocalidad', 'domicilio.idColonia', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno', 'cat_municipio.idEstado', 'cat_colonia.codigoPostal')
            ->where('domicilio.id', '=', $personales->idDomicilio)
            ->get()->first();

            $direccionTrab = DB::table('domicilio')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->select('domicilio.id', 'domicilio.idMunicipio', 'domicilio.idLocalidad', 'domicilio.idColonia', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno', 'cat_municipio.idEstado', 'cat_colonia.codigoPostal')
            ->where('domicilio.id', '=', $personales->idDomicilioTrabajo)
            ->get()->first();

            $direccionNotif = DB::table('notificacion')
            ->join('domicilio', 'domicilio.id', '=', 'notificacion.idDomicilio')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->select('notificacion.id as idNotificacion', 'notificacion.correo', 'notificacion.telefono', 'notificacion.fax', 'domicilio.id as idDomicilio', 'domicilio.idMunicipio', 'domicilio.idLocalidad', 'domicilio.idColonia', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno', 'cat_municipio.idEstado', 'cat_colonia.codigoPostal')
            ->where('notificacion.id', '=', $personales->idNotificacion)
            ->get()->first();

            //dump($idCarpeta, $estados, $municipiosVer, $personales, $direccion, $direccionTrab, $direccionNotif);
            return view('edit-forms.denunciado')->with('idCarpeta', $idCarpeta)
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
                ->with('puestos', $puestos)
                ->with('personales', $personales)
                ->with('direccion', $direccion)
                ->with('direccionTrab', $direccionTrab)
                ->with('direccionNotif', $direccionNotif);
        }
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
        //dd($request->all());
        $carpetaNueva = Carpeta::where('id', $request->idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        $var = ExtraDenunciado::where('id', $id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()){
            return redirect()->route('home');
        }
        //Persona física
        if ($request->esEmpresa == 0) {
            $persona = Persona::where('curp', $request->curp)->get();
            if ($persona->isNotEmpty()) {
                Alert::error('Ya existe una persona registrada con ese CURP.', 'Error')->persistent("Aceptar");
                return back()->withInput();
            }

            $persona                  = Persona::find($request->idPersona);
            $persona->nombres         = $request->nombres;
            $persona->primerAp        = $request->primerAp;
            $persona->segundoAp       = $request->segundoAp;
            $fechaAux                 = $request->fechaNacimiento;
            $fechaNacimiento          = date("Y-m-d", strtotime($fechaAux));
            $persona->fechaNacimiento = $fechaNacimiento;
            $persona->rfc  = $request->rfc . $request->homo;
            $persona->curp = $request->curp;
            if ($request->filled('sexo')) {
                $persona->sexo = $request->sexo;
            }
            if ($request->filled('idNacionalidad')) {
                $persona->idNacionalidad = $request->idNacionalidad;
            }
            if ($request->filled('idEtnia')) {
                $persona->idEtnia = $request->idEtnia;
            }
            if ($request->filled('idLengua')) {
                $persona->idLengua = $request->idLengua;
            }
            if ($request->filled('idMunicipioOrigen')) {
                $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
            }
            $persona->esEmpresa = 0;
            $persona->save();
            $idPersona = $persona->id;
            if ($request->rfcAux != $request->rfc . $request->homo) {
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'update', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo denunciado.', 'idFilaAccion' => $persona->id]);
            }
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'update', 'descripcion' => 'Se ha actualizado una persona física de tipo denunciado.', 'idFilaAccion' => $idPersona]);

            $domicilio = Domicilio::find($request->idDireccion);
            if ($request->filled('idMunicipio')) {
                $domicilio->idMunicipio = $request->idMunicipio;
            }
            if ($request->filled('idLocalidad')) {
                $domicilio->idLocalidad = $request->idLocalidad;
            }
            if ($request->filled('idColonia')) {
                $domicilio->idColonia = $request->idColonia;
            }
            if ($request->filled('calle')) {
                $domicilio->calle = $request->calle;
            }
            if ($request->filled('numExterno')) {
                $domicilio->numExterno = $request->numExterno;
            }
            if ($request->filled('numInterno')) {
                $domicilio->numInterno = $request->numInterno;
            }
            $domicilio->save();
            $idD1 = $domicilio->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un domicilio de persona física de tipo denunciado.', 'idFilaAccion' => $idD1]);

            $domicilio2 = Domicilio::find($request->idDireccionTrabajo);
            if ($request->filled('idMunicipio2')) {
                $domicilio2->idMunicipio = $request->idMunicipio2;
            }
            if ($request->filled('idLocalidad2')) {
                $domicilio2->idLocalidad = $request->idLocalidad2;
            }
            if ($request->filled('idColonia2')) {
                $domicilio2->idColonia = $request->idColonia2;
            }
            if ($request->filled('calle2')) {
                $domicilio2->calle = $request->calle2;
            }
            if ($request->filled('numExterno2')) {
                $domicilio2->numExterno = $request->numExterno2;
            }
            if ($request->filled('numInterno2')) {
                $domicilio2->numInterno = $request->numInterno2;
            }
            $domicilio2->save();
            $idD2 = $domicilio2->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un domicilio de persona física de tipo denunciado.', 'idFilaAccion' => $idD2]);

            $domicilio3 = Domicilio::find($request->idDireccionNotificacion);
            if ($request->filled('idMunicipio3')) {
                $domicilio3->idMunicipio = $request->idMunicipio3;
            }
            if ($request->filled('idLocalidad3')) {
                $domicilio3->idLocalidad = $request->idLocalidad3;
            }
            if ($request->filled('idColonia3')) {
                $domicilio3->idColonia = $request->idColonia3;
            }
            if ($request->filled('calle3')) {
                $domicilio3->calle = $request->calle3;
            }
            if ($request->filled('numExterno3')) {
                $domicilio3->numExterno = $request->numExterno3;
            }
            if ($request->filled('numInterno3')) {
                $domicilio3->numInterno = $request->numInterno3;
            }
            $domicilio3->save();
            $idD3 = $domicilio3->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'SSe ha actualizado un domicilio de persona física de tipo denunciado.', 'idFilaAccion' => $idD3]);

            $notificacion              = Notificacion::find($request->idNotificacion);
            $notificacion->idDomicilio = $idD3;
            $notificacion->correo      = $request->correo;
            $notificacion->telefono    = $request->telefono;
            $notificacion->fax         = $request->fax;
            $notificacion->save();
            $idNotificacion = $notificacion->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'update', 'descripcion' => 'Se ha actualizado una notificación de persona física de tipo denunciado.', 'idFilaAccion' => $idNotificacion]);

            $VariablesPersona            = VariablesPersona::find($request->idVariablesPersona);
            $VariablesPersona->idCarpeta = $request->idCarpeta;
            $VariablesPersona->idPersona = $idPersona;
            $VariablesPersona->edad      = $request->edad;
            if ($request->filled('telefono')) {
                $VariablesPersona->telefono = $request->telefono;
            }
            if ($request->filled('motivoEstancia')) {
                $VariablesPersona->motivoEstancia = $request->motivoEstancia;
            }
            if ($request->filled('idOcupacion')) {
                $VariablesPersona->idOcupacion = $request->idOcupacion;
            }
            if ($request->filled('idEstadoCivil')) {
                $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
            }
            if ($request->filled('idEscolaridad')) {
                $VariablesPersona->idEscolaridad = $request->idEscolaridad;
            }
            if ($request->filled('idReligion')) {
                $VariablesPersona->idReligion = $request->idReligion;
            }
            $VariablesPersona->idDomicilio = $idD1;
            if ($request->filled('docIdentificacion')) {
                $VariablesPersona->docIdentificacion = $request->docIdentificacion;
            }
            if ($request->filled('numDocIdentificacion')) {
                $VariablesPersona->numDocIdentificacion = $request->numDocIdentificacion;
            }
            if ($request->filled('lugarTrabajo')) {
                $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
            }
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            if ($request->filled('telefonoTrabajo')) {
                $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;
            }
            $VariablesPersona->representanteLegal = "NO APLICA";
            $VariablesPersona->save();
            $idVariablesPersona = $VariablesPersona->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un variables de persona física de tipo denunciado.', 'idFilaAccion' => $idVariablesPersona]);

            $ExtraDenunciado                     = ExtraDenunciado::find($request->idExtraDenunciado);
            $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
            $ExtraDenunciado->idNotificacion     = $idNotificacion;
            if ($request->filled('idPuesto')) {
                $ExtraDenunciado->idPuesto = $request->idPuesto;
            }
            if ($request->filled('alias')) {
                $ExtraDenunciado->alias = $request->alias;
            }
            if ($request->filled('senasPartic')) {
                $ExtraDenunciado->senasPartic = $request->senasPartic;
            }
            if ($request->filled('ingreso')) {
                $ExtraDenunciado->ingreso = $request->ingreso;
            }
            if ($request->filled('periodoIngreso')) {
                $ExtraDenunciado->periodoIngreso = $request->periodoIngreso;
            }
            if ($request->filled('residenciaAnterior')) {
                $ExtraDenunciado->residenciaAnterior = $request->residenciaAnterior;
            }
            $ExtraDenunciado->idAbogado = null;
            if ($request->filled('personasBajoSuGuarda')) {
                $ExtraDenunciado->personasBajoSuGuarda = $request->personasBajoSuGuarda;
            }
            if ($request->esperseguidoPenalmente == 1) {
                $ExtraDenunciado->perseguidoPenalmente = 1;
            }
            if ($request->filled('vestimenta')) {
                $ExtraDenunciado->vestimenta = $request->vestimenta;
            }
            $ExtraDenunciado->save();
            $idExtraDenunciado = $ExtraDenunciado->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un extra denunciado de persona física de tipo denunciado.', 'idFilaAccion' => $idExtraDenunciado]);

        //Persona moral
        } elseif ($request->esEmpresa == 1) {
            $persona            = Persona::find($request->idPersona);
            $persona->nombres   = $request->nombres2;
            $persona->rfc       = $request->rfc2 . $request->homo2;
            $persona->esEmpresa = 1;
            $persona->save();
            $idPersona = $persona->id;
            if ($request->rfcAux != $request->rfc2 . $request->homo2) {
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'update', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona moral de tipo denunciado.', 'idFilaAccion' => $persona->id]);
            }
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'update', 'descripcion' => 'Se ha actualizado una persona moral de tipo denunciado.', 'idFilaAccion' => $idPersona]);

            $domicilio = Domicilio::find($request->idDireccion);
            if ($request->filled('idMunicipio')) {
                $domicilio->idMunicipio = $request->idMunicipio;
            }
            if ($request->filled('idLocalidad')) {
                $domicilio->idLocalidad = $request->idLocalidad;
            }
            if ($request->filled('idColonia')) {
                $domicilio->idColonia = $request->idColonia;
            }
            if ($request->filled('calle')) {
                $domicilio->calle = $request->calle;
            }
            if ($request->filled('numExterno')) {
                $domicilio->numExterno = $request->numExterno;
            }
            if ($request->filled('numInterno') {
                $domicilio->numInterno = $request->numInterno;
            }
            $domicilio->save();
            $idD1 = $domicilio->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un domicilio de persona física de tipo denunciado.', 'idFilaAccion' => $idD1]);

            $domicilio3 = Domicilio::find($request->idDireccionNotificacion);
            if ($request->filled('idMunicipio3')) {
                $domicilio3->idMunicipio = $request->idMunicipio3;
            }
            if ($request->filled('idLocalidad3')) {
                $domicilio3->idLocalidad = $request->idLocalidad3;
            }
            if ($request->filled('idColonia3')) {
                $domicilio3->idColonia = $request->idColonia3;
            }
            if ($request->filled('calle3')) {
                $domicilio3->calle = $request->calle3;
            }
            if ($request->filled('numExterno3')) {
                $domicilio3->numExterno = $request->numExterno3;
            }
            if ($request->filled('numInterno3')) {
                $domicilio3->numInterno = $request->numInterno3;
            }
            $domicilio3->save();
            $idD3 = $domicilio3->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un domicilio de persona moral de tipo denunciado.', 'idFilaAccion' => $idD3]);

            $notificacion              = Notificacion::find($request->idNotificacion);
            $notificacion->idDomicilio = $idD3;
            $notificacion->correo      = $request->correo;
            $notificacion->telefono    = $request->telefonoN;
            $notificacion->fax         = $request->fax;
            $notificacion->save();
            $idNotificacion = $notificacion->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'update', 'descripcion' => 'Se ha actualizado una notificación de persona moral de tipo denunciado.', 'idFilaAccion' => $idNotificacion]);

            $VariablesPersona                     = VariablesPersona::find($request->idVariablesPersona);
            $VariablesPersona->idCarpeta          = $request->idCarpeta;
            $VariablesPersona->idPersona          = $idPersona;
            $VariablesPersona->idDomicilio        = $idD1;
            $VariablesPersona->idDomicilioTrabajo = $idD1;
            $VariablesPersona->representanteLegal = $request->representanteLegal;
            $VariablesPersona->save();
            $idVariablesPersona = $VariablesPersona->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'update', 'descripcion' => 'Se han actualizado un variables de persona moral de tipo denunciado.', 'idFilaAccion' => $idVariablesPersona]);

            $ExtraDenunciado                     = ExtraDenunciado::find($request->idExtraDenunciado);
            $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
            $ExtraDenunciado->idNotificacion     = $idNotificacion;
            $ExtraDenunciado->senasPartic        = $request->senasPartic;
            $ExtraDenunciado->save();
            $idExtraDenunciado = $ExtraDenunciado->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un extra denunciado de persona moral de tipo denunciado.', 'idFilaAccion' => $idExtraDenunciado]);
        }
        Alert::success('Investigado o imputado actualizado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('carpeta', $request->idCarpeta);
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
