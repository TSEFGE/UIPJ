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
use App\Models\TipifDelito;
use App\Models\VariablesPersona;
use App\Models\uatuipj\Acusacion2;
use App\Models\uatuipj\Carpeta2;
use App\Models\uatuipj\ExtraAbogado2;
use App\Models\uatuipj\ExtraAutoridad2;
use App\Models\uatuipj\ExtraDenunciado2;
use App\Models\uatuipj\ExtraDenunciante2;
use App\Models\uatuipj\TipifDelito2;
use App\Models\uatuipj\VariablesPersona2;
use DB;
use Alert;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ConnectionUATController extends Controller
{
    public function index()
    {
        return view('carpetas-uat');
    }

    public function carpetasUatDataTable()
    {
    }
    public function asignarCarpeta($idCarpeta, $idFiscal)
    {
    	//Carpeta
    	$carpeta = Carpeta2::where('id', '=', $idCarpeta)->first();
    	//$carpeta = DB::connection('uatuipj')->table('carpeta')->where('id', $idCarpeta)->get();
    	//tipif_delito
    	$delitos = DB::connection('uatuipj')->table('tipif_delito')
    		->where('idCarpeta', $idCarpeta)->get();
    	//Acusacion
    	$acusaciones = DB::connection('uatuipj')->table('acusacion')
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
    	//dump($carpeta, $delitos, $acusaciones, $variablesPersona, $notificaciones, $abogados, $autoridades, $denunciantes, $denunciados);

    	$carpetaNew = New Carpeta();
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

        //$carpeta->save();

    	dump($carpetaNew);
    }
}
