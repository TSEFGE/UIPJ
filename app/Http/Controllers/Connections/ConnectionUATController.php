<?php

namespace App\Http\Controllers\Connections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Acusacion;
use App\Models\Carpeta;
use App\Models\ExtraAbogado;
use App\Models\ExtraAutoridad;
use App\Models\ExtraDenunciado;
use App\Models\ExtraDenunciante;
use App\Models\Narracion;
use App\Models\Notificacion;
use App\Models\TipifDelito;
use App\Models\VariablesPersona;
use App\Models\uatuipj\Acusacion2;
use App\Models\uatuipj\Carpeta2;
use App\Models\uatuipj\ExtraAbogado2;
use App\Models\uatuipj\ExtraAutoridad2;
use App\Models\uatuipj\ExtraDenunciado2;
use App\Models\uatuipj\ExtraDenunciante2;
use App\Models\Narracion2;
use App\Models\Notificacion2;
use App\Models\uatuipj\TipifDelito2;
use App\Models\uatuipj\VariablesPersona2;
use DB;
use Alert;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;

class ConnectionUATController extends Controller
{
    public function index()
    {

        //dump($denunciantes, $denunciados, $delito);
        //--------------
        $users=User::all()->pluck('nombres', 'id');
        return view('carpetas-uat')->with('users', $users);
    }

    public function carpetasUatDataTable()
    {
        $data=Carpeta2::join('cat_estado_carpeta', 'cat_estado_carpeta.id', '=', 'carpeta.idEstadoCarpeta')
                        ->join('uipj.unidad', 'uipj.unidad.id', '=', 'carpeta.idUnidad')
                        ->where('carpeta.asignada', '=', 0)
                        ->select('carpeta.id', 'carpeta.numCarpetaUat', 'uipj.unidad.nombre as unidad', 'carpeta.nombreFiscalUat', 'carpeta.fechaInicio', 'cat_estado_carpeta.nombre')
                        ->get();

        return Datatables::of($data)->make(true);
    }
    public function carpetauat($id)
    {
        $denunciantes=ExtraDenunciante2::join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
                        ->join('componentes.personas', 'componentes.personas.id', '=', 'variables_persona.idPersona')
                        ->select(DB::raw('CONCAT(componentes.personas.nombres, " ", componentes.personas.primerAp," ",componentes.personas.segundoAp) AS nombre'))
                        ->where('variables_persona.idCarpeta', '=', $id)->get();

        $denunciados=ExtraDenunciado2::join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
                        ->join('componentes.personas', 'componentes.personas.id', '=', 'variables_persona.idPersona')
                        ->select(DB::raw('CONCAT(componentes.personas.nombres, " ", componentes.personas.primerAp," ",componentes.personas.segundoAp) AS nombre'))
                        ->where('variables_persona.idCarpeta', '=', $id)->get();

        $acusaciones = Acusacion2::join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
                        ->join('uipj.cat_delito', 'uipj.cat_delito.id', '=', 'tipif_delito.idDelito')
                        ->select('tipif_delito.conViolencia', 'tipif_delito.consumacion', 'tipif_delito.fecha', 'tipif_delito.hora', 'tipif_delito.entreCalle', 'tipif_delito.yCalle', 'tipif_delito.puntoReferencia', 'uipj.cat_delito.nombre as delito')
                        ->whereIN('acusacion.id', Acusacion2::where('idCarpeta', $id)->select('id')->get())
                        ->get();
        return ['respone'=>true,'idCarpeta'=>$id,'denunciantes'=>$denunciantes,'denunciados'=>$denunciados,'acusaciones'=>$acusaciones];
    }
    public function asignarCarpeta(Request $request)
    {
    	$idCarpeta = $request->idCarpeta;
    	$idFiscal = $request->idFiscal;
        //Carpeta
        $carpeta = Carpeta2::where('id', '=', $idCarpeta)->first();
        //$carpeta = DB::connection('uatuipj')->table('carpeta')->where('id', $idCarpeta)->get();
        //tipif_delito
        $delitos = DB::connection('uatuipj')->table('tipif_delito')
            ->where('idCarpeta', $idCarpeta)->get();
        //Variables_persona
        $variablesPersona = DB::connection('uatuipj')->table('variables_persona')
            ->where('idCarpeta', $idCarpeta)->get();
        //Notificacion
        $notificaciones1 = DB::connection('uatuipj')->table('notificacion')
            ->join('extra_denunciante', 'extra_denunciante.idNotificacion', '=', 'notificacion.id')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->select('notificacion.id', 'notificacion.idDomicilio', 'notificacion.correo', 'notificacion.telefono', 'notificacion.fax')
            ->where('variables_persona.idCarpeta', $idCarpeta);
        $notificaciones = DB::connection('uatuipj')->table('notificacion')
            ->join('extra_denunciado', 'extra_denunciado.idNotificacion', '=', 'notificacion.id')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->select('notificacion.id', 'notificacion.idDomicilio', 'notificacion.correo', 'notificacion.telefono', 'notificacion.fax')
            ->where('variables_persona.idCarpeta', $idCarpeta)
            ->union($notificaciones1)
            ->get();
        //extra_abogado
        $abogados = DB::connection('uatuipj')->table('extra_abogado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
            ->select('extra_abogado.id', 'extra_abogado.idVariablesPersona', 'extra_abogado.cedulaProf', 'extra_abogado.sector', 'extra_abogado.correo', 'extra_abogado.tipo')
            ->where('variables_persona.idCarpeta', $idCarpeta)->get();
        //extra_autoridad
        $autoridades = DB::connection('uatuipj')->table('extra_autoridad')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_autoridad.idVariablesPersona')
            ->select('extra_autoridad.id', 'extra_autoridad.idVariablesPersona', 'extra_autoridad.antiguedad', 'extra_autoridad.rango', 'extra_autoridad.horarioLaboral')
            ->where('variables_persona.idCarpeta', $idCarpeta)->get();
        //extra_denunciante
        $denunciantes = DB::connection('uatuipj')->table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->select('extra_denunciante.id', 'extra_denunciante.idVariablesPersona', 'extra_denunciante.idNotificacion', 'extra_denunciante.idAbogado', 'extra_denunciante.conoceAlDenunciado', 'extra_denunciante.esVictima')
            ->where('variables_persona.idCarpeta', $idCarpeta)->get();
        //extra_denunciado
        $denunciados = DB::connection('uatuipj')->table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->select('extra_denunciado.id', 'extra_denunciado.idVariablesPersona', 'extra_denunciado.idNotificacion', 'extra_denunciado.idPuesto', 'extra_denunciado.alias', 'extra_denunciado.senasPartic', 'extra_denunciado.ingreso', 'extra_denunciado.periodoIngreso', 'extra_denunciado.residenciaAnterior', 'extra_denunciado.idAbogado', 'extra_denunciado.personasBajoSuGuarda', 'extra_denunciado.perseguidoPenalmente', 'extra_denunciado.vestimenta')
            ->where('variables_persona.idCarpeta', $idCarpeta)->get();
        //Acusacion
        $acusaciones = DB::connection('uatuipj')->table('acusacion')
            ->where('idCarpeta', $idCarpeta)->get();
        //Narraciones
        $narraciones = DB::connection('uatuipj')->table('narracion')
            ->where('idCarpeta', $idCarpeta)->get();
        //dump($carpeta, $delitos, $variablesPersona, $notificaciones, $abogados, $autoridades, $denunciantes, $denunciados, $acusaciones, $narraciones);

        $carpetaNew = new Carpeta();
        $datos = DB::table('users')
            ->join('unidad', 'unidad.id', '=', 'users.idUnidad')
            ->select('unidad.idDistrito', 'users.numFiscal', 'unidad.consecutivo', 'unidad.abrevMun')
            ->where('users.id', '=', Auth::user()->id)
            ->get();
        $num                 = $datos[0]->consecutivo + 1;
        $carpetaNew->idUnidad   = Auth::user()->idUnidad;
        $carpetaNew->idFiscal   = $idFiscal;
        $carpetaNew->numCarpeta = "UIPJ/D" . $datos[0]->idDistrito . "/" . $datos[0]->abrevMun . "/" . $datos[0]->numFiscal . "/" . $num . "/" . Carbon::now()->year;
        $fechaInicioAux = $carpeta->fechaInicio;
        $fechaInicio    = date("Y-m-d", strtotime($fechaInicioAux));
        $carpetaNew->fechaInicio = $fechaInicio;
        $carpetaNew->conDetenido = $carpeta->conDetenido;
        $carpetaNew->esRelevante = $carpeta->esRelevante;
        $carpetaNew->estadoCarpeta     = "ASIGNADA";
        $carpetaNew->horaIntervencion  = $carpeta->horaIntervencion;
        $carpetaNew->descripcionHechos = $carpeta->descripcionHechos;
        $carpetaNew->npd = $carpeta->npd;
        $carpetaNew->numIph = $carpeta->numIph;
        $fechaIphAux       = $carpeta->fechaIph;
        $fechaIph          = date("Y-m-d", strtotime($fechaIphAux));
        $carpetaNew->fechaIph = $fechaIph;
        $carpetaNew->narracionIph = $carpeta->narracionIph;
        $fechaDeterminacionAux       = $carpeta->fechaDeterminacion;
        $fechaDeterminacion          = date("Y-m-d", strtotime($fechaDeterminacionAux));
        $carpetaNew->fechaDeterminacion = $fechaDeterminacion;
        $carpetaNew->idTipoDeterminacion = $carpeta->idTipoDeterminacion;
        $carpetaNew->asignadaUat = 1;
        //dump($carpetaNew);
        $carpetaNew->save();
        DB::table('unidad')->where('id', $idFiscal)->update(['consecutivo' => $num]);

        //Para guardar
        /*$del = array();
        for($cont=1; $cont<=10; $cont++){
        	array_push($del, array('idViejo'=>$cont,'idNuevo'=>$cont));
        }
        //Para consultar
        for($cont=0; $cont<count($del); $cont++){
        	if($del[$cont]['idViejo'] == 5){
        		dump("hola".$cont);
        	}
        }
        dump($del);*/

        $arrayDelitos = array();
        foreach ($delitos as $delito) {
            $tipifDelito                = new TipifDelito();
            $tipifDelito->idCarpeta     = $carpetaNew->id;
            $tipifDelito->idDelito      = $delito->idDelito;
            $tipifDelito->idAgrupacion1 = $delito->idAgrupacion1;
            $tipifDelito->idAgrupacion2 = $delito->idAgrupacion2;
            if ($delito->conViolencia === "1") {
                $tipifDelito->conViolencia   = 1;
                $tipifDelito->idArma         = $delito->idArma;
                $tipifDelito->idPosibleCausa = $delito->idPosibleCausa;
            }
            $tipifDelito->idModalidad   = $delito->idModalidad;
            $tipifDelito->formaComision = $delito->formaComision;
            $tipifDelito->consumacion   = $delito->consumacion;
            $tipifDelito->fecha           = $delito->fecha;
            $tipifDelito->hora            = $delito->hora;
            $tipifDelito->idLugar         = $delito->idLugar;
            $tipifDelito->idZona          = $delito->idZona;
            $tipifDelito->idDomicilio     = $delito->idDomicilio;
            $tipifDelito->entreCalle      = $delito->entreCalle;
            $tipifDelito->yCalle          = $delito->yCalle;
            $tipifDelito->calleTrasera    = $delito->calleTrasera;
            $tipifDelito->puntoReferencia = $delito->puntoReferencia;
            $tipifDelito->save();
            array_push($arrayDelitos, array('idViejo'=>$delito->id,'idNuevo'=>$tipifDelito->id));
        }

        $arrayVariables = array();
        foreach ($variablesPersona as $varPersona) {
            $VariablesPersonaNew            = new VariablesPersona();
            $VariablesPersonaNew->idCarpeta = $carpetaNew->id;
            $VariablesPersonaNew->idPersona = $varPersona->idPersona;
            $VariablesPersonaNew->edad      = $varPersona->edad;
            $VariablesPersonaNew->telefono = $varPersona->telefono;
            $VariablesPersonaNew->motivoEstancia = $varPersona->motivoEstancia;
            $VariablesPersonaNew->idOcupacion = $varPersona->idOcupacion;
            $VariablesPersonaNew->lugarTrabajo = $varPersona->lugarTrabajo;
            $VariablesPersonaNew->telefonoTrabajo = $varPersona->telefonoTrabajo;
            $VariablesPersonaNew->idDomicilioTrabajo = $varPersona->idDomicilioTrabajo;
            $VariablesPersonaNew->lugarTrabajo = $varPersona->lugarTrabajo;
            $VariablesPersonaNew->telefonoTrabajo = $varPersona->telefonoTrabajo;
            $VariablesPersonaNew->idEstadoCivil = $varPersona->idEstadoCivil;
            $VariablesPersonaNew->idEscolaridad = $varPersona->idEscolaridad;
            $VariablesPersonaNew->idReligion = $varPersona->idReligion;
            $VariablesPersonaNew->idDomicilio  = $varPersona->idDomicilio;
            $VariablesPersonaNew->idInterprete = null;
            $VariablesPersonaNew->docIdentificacion = $varPersona->docIdentificacion;
            $VariablesPersonaNew->numDocIdentificacion = $varPersona->numDocIdentificacion;
            $VariablesPersonaNew->representanteLegal = $varPersona->representanteLegal;
            $VariablesPersonaNew->save();
            array_push($arrayVariables, array('idViejo'=>$varPersona->id,'idNuevo'=>$VariablesPersonaNew->id));
        }

        $arrayNotifs = array();
        foreach ($notificaciones as $notificacion) {
            $notificacionNew              = new Notificacion();
            $notificacionNew->idDomicilio = $notificacion->idDomicilio;
            $notificacionNew->correo      = $notificacion->correo;
            $notificacionNew->telefono    = $notificacion->telefono;
            $notificacionNew->fax         = $notificacion->fax;
            $notificacionNew->save();
            array_push($arrayNotifs, array('idViejo'=>$notificacion->id,'idNuevo'=>$notificacionNew->id));
        }

        $arrayAbogados = array();
        foreach ($abogados as $abogado) {
            $ExtraAbogadoNew                     = new ExtraAbogado();
            //$ExtraAbogadoNew->idVariablesPersona = $idVariablesPersona;//FOR
            for ($cont=0; $cont<count($arrayVariables); $cont++) {
                if ($arrayVariables[$cont]['idViejo'] == $abogado->idVariablesPersona) {
                    $ExtraAbogadoNew->idVariablesPersona = $arrayVariables[$cont]['idNuevo'];
                    break;
                }
            }
            $ExtraAbogadoNew->cedulaProf         = $abogado->cedulaProf;
            $ExtraAbogadoNew->sector             = $abogado->sector;
            $ExtraAbogadoNew->correo             = $abogado->correo;
            $ExtraAbogadoNew->tipo               = $abogado->tipo;
            $ExtraAbogadoNew->save();
            array_push($arrayAbogados, array('idViejo'=>$abogado->id,'idNuevo'=>$abogadoNew->id));
        }

        $arrayAutoridades = array();
        foreach ($autoridades as $autoridad) {
            $ExtraAutoridadNew                     = new ExtraAutoridad();
            //$ExtraAutoridadNew->idVariablesPersona = $idVariablesPersona;//FOR
            for ($cont=0; $cont<count($arrayVariables); $cont++) {
                if ($arrayVariables[$cont]['idViejo'] == $autoridad->idVariablesPersona) {
                    $ExtraAutoridadNew->idVariablesPersona = $arrayVariables[$cont]['idNuevo'];
                    break;
                }
            }
            $ExtraAutoridadNew->antiguedad         = $autoridad->antiguedad;
            $ExtraAutoridadNew->rango              = $autoridad->rango;
            $ExtraAutoridadNew->horarioLaboral     = $autoridad->horarioLaboral;
            $ExtraAutoridadNew->save();
            array_push($arrayAutoridades, array('idViejo'=>$autoridad->id,'idNuevo'=>$ExtraAutoridadNew->id));
        }

        $arrayDenunciantes = array();
        foreach ($denunciantes as $denunciante) {
            $ExtraDenuncianteNew                     = new ExtraDenunciante();
            //$ExtraDenuncianteNew->idVariablesPersona = $idVariablesPersona;//FOR
            for ($cont=0; $cont<count($arrayVariables); $cont++) {
                if ($arrayVariables[$cont]['idViejo'] == $denunciante->idVariablesPersona) {
                    $ExtraDenuncianteNew->idVariablesPersona = $arrayVariables[$cont]['idNuevo'];
                    break;
                }
            }
            //$ExtraDenuncianteNew->idNotificacion     = $idNotificacion;//FOR
            for ($cont=0; $cont<count($arrayNotifs); $cont++) {
                if ($arrayNotifs[$cont]['idViejo'] == $denunciante->idNotificacion) {
                    $ExtraDenuncianteNew->idNotificacion = $arrayNotifs[$cont]['idNuevo'];
                    break;
                }
            }
            //$ExtraDenuncianteNew->idAbogado          = null;//
            for ($cont=0; $cont<count($arrayAbogados); $cont++) {
                if ($arrayAbogados[$cont]['idViejo'] == $denunciante->idAbogado) {
                    $ExtraDenuncianteNew->idAbogado = $arrayAbogados[$cont]['idNuevo'];
                    break;
                }
            }
            $ExtraDenuncianteNew->conoceAlDenunciado = $denunciante->conoceAlDenunciado;
            $ExtraDenuncianteNew->esVictima = $denunciante->esVictima;
            $ExtraDenuncianteNew->save();
            array_push($arrayDenunciantes, array('idViejo'=>$denunciante->id,'idNuevo'=>$ExtraDenuncianteNew->id));
        }

        $arrayDenunciados = array();
        foreach ($denunciados as $denunciado) {
            $ExtraDenunciadoNew                     = new ExtraDenunciado();
            //$ExtraDenunciadoNew->idVariablesPersona = $idVariablesPersona;
            for ($cont=0; $cont<count($arrayVariables); $cont++) {
                if ($arrayVariables[$cont]['idViejo'] == $denunciado->idVariablesPersona) {
                    $ExtraDenunciadoNew->idVariablesPersona = $arrayVariables[$cont]['idNuevo'];
                    break;
                }
            }
            //$ExtraDenunciadoNew->idNotificacion     = $idNotificacion;
            for ($cont=0; $cont<count($arrayNotifs); $cont++) {
                if ($arrayNotifs[$cont]['idViejo'] == $denunciado->idNotificacion) {
                    $ExtraDenunciadoNew->idNotificacion = $arrayNotifs[$cont]['idNuevo'];
                    break;
                }
            }
            //$ExtraDenunciadoNew->idAbogado = $denunciado->idAbogado;//FOR
            for ($cont=0; $cont<count($arrayAbogados); $cont++) {
                if ($arrayAbogados[$cont]['idViejo'] == $denunciado->idAbogado) {
                    $ExtraDenunciadoNew->idAbogado = $arrayAbogados[$cont]['idNuevo'];
                    break;
                }
            }
            $ExtraDenunciadoNew->idPuesto = $denunciado->idPuesto;
            $ExtraDenunciadoNew->alias = $denunciado->alias;
            $ExtraDenunciadoNew->senasPartic = $denunciado->senasPartic;
            $ExtraDenunciadoNew->ingreso = $denunciado->ingreso;
            $ExtraDenunciadoNew->periodoIngreso = $denunciado->periodoIngreso;
            $ExtraDenunciadoNew->residenciaAnterior = $denunciado->residenciaAnterior;
            $ExtraDenunciadoNew->personasBajoSuGuarda = $denunciado->personasBajoSuGuarda;
            $ExtraDenunciadoNew->perseguidoPenalmente = $denunciado->perseguidoPenalmente;
            $ExtraDenunciadoNew->vestimenta = $denunciado->vestimenta;
            $ExtraDenunciadoNew->save();
            array_push($arrayDenunciados, array('idViejo'=>$denunciado->id,'idNuevo'=>$ExtraDenunciadoNew->id));
        }

        foreach ($acusaciones as $acusacion) {
            $acusacionNew                = new Acusacion();
            $acusacionNew->idCarpeta     = $carpetaNew->id;
            //$acusacionNew->idDenunciante = $acusacion->idDenunciante;//FOR
            for ($cont=0; $cont<count($arrayDenunciantes); $cont++) {
                if ($arrayDenunciantes[$cont]['idViejo'] == $acusacion->idDenunciante) {
                    $acusacionNew->idDenunciante = $arrayDenunciantes[$cont]['idNuevo'];
                    break;
                }
            }
            //$acusacionNew->idTipifDelito = $acusacion->idTipifDelito;//FOR
            for ($cont=0; $cont<count($arrayDelitos); $cont++) {
                if ($arrayDelitos[$cont]['idViejo'] == $acusacion->idTipifDelito) {
                    $acusacionNew->idTipifDelito = $arrayDelitos[$cont]['idNuevo'];
                    break;
                }
            }
            //$acusacionNew->idDenunciado  = $acusacion->idDenunciado;//FOR
            for ($cont=0; $cont<count($arrayDenunciados); $cont++) {
                if ($arrayDenunciados[$cont]['idViejo'] == $acusacion->idDenunciado) {
                    $acusacionNew->idDenunciado = $arrayDenunciados[$cont]['idNuevo'];
                    break;
                }
            }
            $acusacionNew->save();
        }

        foreach ($narraciones as $narracion) {
            $narracionNew                = new Narracion();
            //$narracionNew->idInvolucrado = $ExtraDenunciante->id;//FOR
            if ($narracion->tipoInvolucrado == 1) {
                for ($cont=0; $cont<count($arrayDenunciantes); $cont++) {
                    if ($arrayDenunnciantes[$cont]['idViejo'] == $narracion->idInvolucrado) {
                        $narracionNew->idInvolucrado = $arrayDenunciantes[$cont]['idNuevo'];
                        break;
                    }
                }
            } elseif ($narracion->tipoInvolucrado == 2) {
                for ($cont=0; $cont<count($arrayDenunciados); $cont++) {
                    if ($arrayDenunciados[$cont]['idViejo'] == $narracion->idInvolucrado) {
                        $narracionNew->idInvolucrado = $arrayDenunciados[$cont]['idNuevo'];
                        break;
                    }
                }
            } elseif ($narracion->tipoInvolucrado == 3) {
                for ($cont=0; $cont<count($arrayAutoridades); $cont++) {
                    if ($arrayAutoridades[$cont]['idViejo'] == $narracion->idInvolucrado) {
                        $narracionNew->idInvolucrado = $arrayAutoridades[$cont]['idNuevo'];
                        break;
                    }
                }
            }
            $narracionNew->idCarpeta       = $carpetaNew->id;
            $narracionNew->narracion       = $narracion->narracion;
            $narracionNew->tipoInvolucrado = $narracion->tipoInvolucrado;
            $narracionNew->archivo         = $narracion->archivo;
            $narracionNew->save();
        }
        //dump($carpeta, $delitos, $variablesPersona, $notificaciones, $abogados, $autoridades, $denunciantes, $denunciados, $acusaciones, $narraciones);

        /*
        Si todo sale bien
        */
        DB::connection('uatuipj')->table('carpeta')->where('id', $carpeta->id)->update(['asignada' => 1]);
        Alert::success('Carpeta asignada con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('carpetas.uat');
    }
}
