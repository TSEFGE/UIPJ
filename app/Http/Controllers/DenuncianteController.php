<?php

namespace App\Http\Controllers;

use Alert;
use DB;
use App\Http\Requests\StoreDenunciante;
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
use App\Models\ExtraDenunciante;
use App\Models\Narracion;
use App\Models\Notificacion;
use App\Models\Persona;
use App\Models\VariablesPersona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use uipj\rfc\src\RfcBuilder;

class DenuncianteController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $numCarpeta     = $carpetaNueva[0]->numCarpeta;
            $denunciantes   = CarpetaController::getDenunciantes($idCarpeta);
            $escolaridades  = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil   = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $etnias         = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lenguas        = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $ocupaciones    = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $religiones     = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            return view('forms.denunciante')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('denunciantes', $denunciantes)
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

    public function storeDenunciante(StoreDenunciante $request)
    {
        //dd($request->all());
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
                $persona->rfc             = $request->rfc . $request->homo;
                $persona->curp            = $request->curp;
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
                $persona->save();
                if ($request->rfcAux != $request->rfc . $request->homo) {
                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo victima u ofendido.', 'idFilaAccion' => $persona->id]);
                }
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona física de tipo victima u ofendido.', 'idFilaAccion' => $persona->id]);
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
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio para persona física de tipo victima u ofendido.', 'idFilaAccion' => $domicilio->id]);
                $idD1 = $domicilio->id;

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
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de trabajo para persona física de tipo victima u ofendido.', 'idFilaAccion' => $domicilio2->id]);
                $idD2 = $domicilio2->id;

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
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva notificación para persona física de tipo victima u ofendido.', 'idFilaAccion' => $notificacion->id]);
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
                    if ($request->docIdentificacion == 'OTRO') {
                        $VariablesPersona->docIdentificacion = $request->otroDocumento;
                    } else {
                        $VariablesPersona->docIdentificacion = $request->docIdentificacion;
                    }
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
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo variables persona de persona física de tipo victima u ofendido.', 'idFilaAccion' => $VariablesPersona->id]);
                $idVariablesPersona = $VariablesPersona->id;

                $ExtraDenunciante                     = new ExtraDenunciante();
                $ExtraDenunciante->idVariablesPersona = $idVariablesPersona;
                $ExtraDenunciante->idNotificacion     = $idNotificacion;
                $ExtraDenunciante->idAbogado          = null;
                if ($request->conoceAlDenunciado === 1) {
                    $ExtraDenunciante->conoceAlDenunciado = 1;
                }

                if ($request->esVictima != null) {
                    $ExtraDenunciante->esVictima = 1;
                }

                $ExtraDenunciante->save();

                $narracion                = new Narracion();
                $narracion->idInvolucrado = $ExtraDenunciante->id;
                $narracion->idCarpeta     = $request->idCarpeta;
                //dd($request);
                $narracion->narracion       = $request->narracionUno;
                $narracion->tipoInvolucrado = 1;
                $narracion->archivo         = null;
                $narracion->save();

                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'narracion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva narracion de persona física de tipo victima u ofendido.', 'idFilaAccion' => $narracion->id]);

                if ($ExtraDenunciante->esVictima == 1) {
                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un ofendido de tipo Victima.', 'idFilaAccion' => $ExtraDenunciante->id]);
                } else {
                    Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un ofendido de tipo No Victima.', 'idFilaAccion' => $ExtraDenunciante->id]);
                }

                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciante', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo extra ofendido de persona física.', 'idFilaAccion' => $ExtraDenunciante->id]);

            }
        } elseif ($request->esEmpresa == 1) {
            $persona            = new Persona();
            $persona->nombres   = $request->nombres2;
            $persona->rfc       = $request->rfc2 . $request->homo2;
            $persona->esEmpresa = 1;
            $persona->save();
            $idPersona = $persona->id;
            if ($request->rfcAux != $request->rfc2 . $request->homo2) {
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona moral de tipo victima u ofendido.', 'idFilaAccion' => $persona->id]);
            }
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona moral de tipo victima u ofendido.', 'idFilaAccion' => $persona->id]);

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
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona moral de tipo victima u ofendido.', 'idFilaAccion' => $domicilio->id]);
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
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de trabajo para persona moral de tipo victima u ofendido.', 'idFilaAccion' => $domicilio3->id]);
            $idD3 = $domicilio3->id;

            $notificacion              = new Notificacion();
            $notificacion->idDomicilio = $idD3;
            $notificacion->correo      = $request->correo;
            $notificacion->telefono    = $request->telefonoN;
            $notificacion->fax         = $request->fax;
            $notificacion->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'notificacion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva notificación para persona moral de tipo victima u ofendido.', 'idFilaAccion' => $notificacion->id]);
            $idNotificacion = $notificacion->id;

            $VariablesPersona                     = new VariablesPersona();
            $VariablesPersona->idCarpeta          = $request->idCarpeta;
            $VariablesPersona->idPersona          = $idPersona;
            $VariablesPersona->idDomicilio        = $idD1;
            $VariablesPersona->idDomicilioTrabajo = $idD1;
            $VariablesPersona->representanteLegal = $request->representanteLegal;
            $VariablesPersona->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo variables persona de persona moral de tipo victima u ofendido.', 'idFilaAccion' => $VariablesPersona->id]);
            $idVariablesPersona = $VariablesPersona->id;

            $ExtraDenunciante                     = new ExtraDenunciante();
            $ExtraDenunciante->idVariablesPersona = $idVariablesPersona;
            $ExtraDenunciante->idNotificacion     = $idNotificacion;
            $ExtraDenunciante->idAbogado          = null;
            if ($request->conoceAlDenunciado == 1) {
                $ExtraDenunciante->conoceAlDenunciado = 1;
            }
            $ExtraDenunciante->esVictima = $request->esVictima;

            $ExtraDenunciante->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciante', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo extra victima u ofendido de persona moral.', 'idFilaAccion' => $ExtraDenunciante->id]);

            $narracion                = new Narracion();
            $narracion->idInvolucrado = $ExtraDenunciante->id;
            $narracion->idCarpeta     = $request->idCarpeta;
            //dd($request);
            $narracion->narracion       = $request->narracionUnoM;
            $narracion->tipoInvolucrado = 1;
            $narracion->archivo         = null;
            $narracion->save();

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'narracion', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva narracion de persona Moral de tipo victima u ofendido.', 'idFilaAccion' => $narracion->id]);
        }
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
         */
        Alert::success('Víctima u ofendido registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.denunciante', $request->idCarpeta);
    }

    public function showComplement($idDenunciante, $idCarpeta)
    {
        $denunciante = ExtraDenunciante::find($idDenunciante);
        //dd($denunciante);
        return view('forms.complement1')->with('extra', $denunciante)->with('idCarpeta', $idCarpeta);
    }

    public function storeComplement(Request $request)
    {
        //dd($request->all());
        $denunciante = ExtraDenunciante::find($request->idExtra);
        //$denunciante->fill($request->all());
        $denunciante->save();
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciante', 'accion' => 'update', 'descripcion' => 'Se ha modificado el campo complemento de la narración en extra victima u ofendido.', 'idFilaAccion' => $denunciante->id]);
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
        if (count($carpetaNueva) > 0) {
            $esMoral = DB::table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('persona.esEmpresa')
            ->where('extra_denunciante.id', '=', $id)
            ->get()->first();

            //dd($esMoral->esEmpresa);
            if($esMoral->esEmpresa == 1){
                //consultas para empresa
                $numCarpeta     = $carpetaNueva[0]->numCarpeta;

                $personales = DB::table('extra_denunciante')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->select('extra_denunciante.id', 'extra_denunciante.idNotificacion', 'extra_denunciante.esVictima', 'variables_persona.id', 'variables_persona.idDomicilio', 'persona.nombres', 'persona.fechaNacimiento', 'persona.rfc', 'persona.esEmpresa')
                ->where('extra_denunciante.id', '=', $id)
                ->get();

                $direccion = DB::table('domicilio')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
                ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
                ->select('domicilio.id', 'cat_municipio.nombre as municipio', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno')
                ->where('domicilio.id', '=', $personales[0]->idDomicilio)
                ->get();

                $direccionNotif = DB::table('notificacion')
                ->join('domicilio', 'domicilio.id', '=', 'notificacion.idDomicilio')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
                ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
                ->select('notificacion.correo', 'notificacion.telefono', 'notificacion.fax', 'domicilio.id', 'cat_municipio.nombre as municipio', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno')
                ->where('notificacion.id', '=', $personales[0]->idNotificacion)
                ->get();

                return view('edit-forms.denunciante')->with('idCarpeta', $idCarpeta)
                    ->with('personales', $personales)
                    ->with('direccion', $direccion)
                    ->with('direccionNotif', $direccionNotif);

            }else{
                $numCarpeta     = $carpetaNueva[0]->numCarpeta;
                $escolaridades  = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
                $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
                $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
                $estadoscivil   = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
                $etnias         = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
                $lenguas        = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
                $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
                $ocupaciones    = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
                $religiones     = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

                $personales = DB::table('extra_denunciante')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
                ->join('cat_ocupacion', 'cat_ocupacion.id', '=', 'variables_persona.idOcupacion')
                ->join('cat_estado_civil', 'cat_estado_civil.id', '=', 'variables_persona.idEstadoCivil')
                ->join('cat_escolaridad', 'cat_escolaridad.id', '=', 'variables_persona.idEscolaridad')
                ->join('cat_religion', 'cat_religion.id', '=', 'variables_persona.idReligion')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->join('cat_nacionalidad', 'cat_nacionalidad.id', '=', 'persona.idNacionalidad')
                ->join('cat_etnia', 'cat_etnia.id', '=', 'persona.idEtnia')
                ->join('cat_lengua', 'cat_lengua.id', '=', 'persona.idLengua')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'persona.idMunicipioOrigen')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->select('extra_denunciante.id', 'extra_denunciante.conoceAlDenunciado', 'extra_denunciante.idNotificacion', 'extra_denunciante.esVictima', 'variables_persona.id', 'variables_persona.edad', 'variables_persona.telefono', 'variables_persona.motivoEstancia', 'variables_persona.docIdentificacion', 'variables_persona.numDocIdentificacion', 'variables_persona.lugarTrabajo', 'variables_persona.telefonoTrabajo', 'variables_persona.idDomicilio', 'variables_persona.idDomicilioTrabajo', 'cat_ocupacion.nombre as ocupacion', 'cat_estado_civil.nombre as estadoCivil', 'cat_escolaridad.nombre as escolaridad', 'cat_religion.nombre as religion', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.fechaNacimiento', 'persona.rfc', 'persona.curp', 'persona.sexo', 'cat_municipio.nombre as municipioOrigen', 'cat_estado.nombre as estadoOrigen', 'persona.esEmpresa', 'cat_nacionalidad.nombre as nacionalidad', 'cat_etnia.nombre as etnia', 'cat_lengua.nombre as lengua')
                ->where('extra_denunciante.id', '=', $id)
                ->get();

                $direccion = DB::table('domicilio')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
                ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
                ->select('domicilio.id', 'cat_municipio.nombre as municipio', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno')
                ->where('domicilio.id', '=', $personales[0]->idDomicilio)
                ->get();

                $direccionTrab = DB::table('domicilio')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
                ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
                ->select('domicilio.id', 'cat_municipio.nombre as municipio', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno')
                ->where('domicilio.id', '=', $personales[0]->idDomicilioTrabajo)
                ->get();

                $direccionNotif = DB::table('notificacion')
                ->join('domicilio', 'domicilio.id', '=', 'notificacion.idDomicilio')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
                ->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
                ->select('notificacion.correo', 'notificacion.telefono', 'notificacion.fax', 'domicilio.id', 'cat_municipio.nombre as municipio', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno')
                ->where('notificacion.id', '=', $personales[0]->idNotificacion)
                ->get();

                /*$denunciante = DB::table('extra_denunciante')
                ->join('notificacion', 'notificacion.id', '=', 'extra_denunciante.idNotificacion')
                ->join('domicilio as dirN', 'dirN.id', '=', 'notificacion.idDomicilio')
                ->join('cat_municipio as munN', 'munN.id', '=', 'dirN.idMunicipio')
                ->join('cat_estado as estN', 'estN.id', '=', 'munN.idEstado')
                ->join('cat_localidad as locN', 'locN.id', '=', 'dirN.idLocalidad')
                ->join('cat_colonia as colN', 'colN.id', '=', 'dirN.idColonia')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
                ->join('cat_ocupacion', 'cat_ocupacion.id', '=', 'variables_persona.idOcupacion')
                ->join('cat_estado_civil', 'cat_estado_civil.id', '=', 'variables_persona.idEstadoCivil')
                ->join('cat_escolaridad', 'cat_escolaridad.id', '=', 'variables_persona.idEscolaridad')
                ->join('cat_religion', 'cat_religion.id', '=', 'variables_persona.idReligion')
                ->join('domicilio as dirD', 'dirD.id', '=', 'variables_persona.idDomicilio')
                ->join('cat_municipio as munD', 'munD.id', '=', 'dirD.idMunicipio')
                ->join('cat_estado as estD', 'estD.id', '=', 'munD.idEstado')
                ->join('cat_localidad as locD', 'locD.id', '=', 'dirD.idLocalidad')
                ->join('cat_colonia as colD', 'colD.id', '=', 'dirD.idColonia')
                ->join('domicilio as dirT', 'dirT.id', '=', 'variables_persona.idDomicilioTrabajo')
                ->join('cat_municipio as munT', 'munT.id', '=', 'dirT.idMunicipio')
                ->join('cat_estado as estT', 'estT.id', '=', 'munT.idEstado')
                ->join('cat_localidad as locT', 'locT.id', '=', 'dirT.idLocalidad')
                ->join('cat_colonia as colT', 'colT.id', '=', 'dirT.idColonia')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->join('cat_nacionalidad', 'cat_nacionalidad.id', '=', 'persona.idNacionalidad')
                ->join('cat_etnia', 'cat_etnia.id', '=', 'persona.idEtnia')
                ->join('cat_lengua', 'cat_lengua.id', '=', 'persona.idLengua')
                ->join('cat_municipio', 'cat_municipio.id', '=', 'persona.idMunicipioOrigen')
                ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
                ->select('extra_denunciante.id', 'extra_denunciante.conoceAlDenunciado', 'notificacion.correo', 'notificacion.telefono as telefonoN', 'notificacion.fax', 'munN.nombre as municipioN', 'estN.nombre as estadoN', 'locN.nombre as localidadN', 'colN.nombre as coloniaN', 'colN.codigoPostal as cpN', 'dirN.calle as calleN', 'dirN.numExterno as numExternoN', 'dirN.numInterno as numInternoN', 'variables_persona.edad', 'variables_persona.telefono', 'variables_persona.motivoEstancia', 'variables_persona.docIdentificacion', 'variables_persona.numDocIdentificacion', 'variables_persona.lugarTrabajo', 'variables_persona.telefonoTrabajo', 'cat_ocupacion.nombre as ocupacion', 'cat_estado_civil.nombre as estadoCivil', 'cat_escolaridad.nombre as escolaridad', 'cat_religion.nombre as religion', 'munD.nombre as municipioD', 'estD.nombre as estadoD', 'locD.nombre as localidadD', 'colD.nombre as coloniaD', 'colD.codigoPostal as cpD', 'dirD.calle as calleD', 'dirD.numExterno as numExternoD', 'dirD.numInterno as numInternoD', 'munT.nombre as municipioT', 'estT.nombre as estadoT', 'locT.nombre as localidadT', 'colT.nombre as coloniaT', 'colT.codigoPostal as cpT', 'dirT.calle as calleT', 'dirT.numExterno as numExternoT', 'dirT.numInterno as numInternoT', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.fechaNacimiento', 'persona.rfc', 'persona.curp', 'persona.sexo', 'cat_municipio.nombre as municipioOrigen', 'cat_estado.nombre as estadoOrigen', 'persona.esEmpresa')
                ->where('extra_denunciante.id', '=', $id)
                ->get();*/

                return view('edit-forms.denunciante')->with('idCarpeta', $idCarpeta)
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
                    ->with('personales', $personales)
                    ->with('direccion', $direccion)
                    ->with('direccionTrab', $direccionTrab)
                    ->with('direccionNotif', $direccionNotif);
            }
        } else {
            return redirect()->route('home');
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

    public function rfcMoral(Request $request)
    {
        $nombre = $request->nombre;
        $dia    = $request->dia;
        $mes    = $request->mes;
        $ano    = $request->ano;

        $builder = new RfcBuilder();

        $rfc = $builder->legalName($nombre)
            ->creationDate($dia, $mes, $ano)
            ->build()
            ->toString();
        return ['res' => $rfc];
    }

    public function rfcFisico(Request $request)
    {
        $builder = new RfcBuilder();
        $rfc     = $builder->name($request->nombre)
            ->firstLastName($request->apPaterno)
            ->secondLastName($request->apMaterno)
            ->birthday($request->dia, $request->mes, $request->año)
            ->build()
            ->toString();

        return ['res' => $rfc];
    }
}
