<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\StoreCarpeta;
use App\Models\Bitacora;
use App\Models\Carpeta;
use App\Models\CatTipoDeterminacion;
use App\Models\Unidad;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarpetaController extends Controller
{
    public function __construct()
    {
        Carbon::setLocale('es');
    }

    public function showForm()
    {
        $tiposdet     = CatTipoDeterminacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $nombreUnidad = Unidad::select('nombre')->where('id', Auth::user()->idUnidad)->pluck('nombre');
        $nombreUnidad = $nombreUnidad[0];
        return view('forms.inicio')->with('nombreUnidad', $nombreUnidad)->with('tiposdet', $tiposdet);
    }

    public function storeCarpeta(StoreCarpeta $request)
    {
        //dd($request->all());
        $datos = DB::table('users')
            ->join('unidad', 'unidad.id', '=', 'users.idUnidad')
            ->select('unidad.idDistrito', 'users.numFiscal', 'unidad.consecutivo', 'unidad.abrevMun')
            ->where('users.id', '=', Auth::user()->id)
            ->get();
        $num                 = $datos[0]->consecutivo + 1;
        $carpeta             = new Carpeta();
        $carpeta->idUnidad   = Auth::user()->idUnidad;
        $carpeta->idFiscal   = Auth::user()->id;
        $carpeta->numCarpeta = "UIPJ/D" . $datos[0]->idDistrito . "/" . $datos[0]->abrevMun . "/" . $datos[0]->numFiscal . "/" . $num . "/" . Carbon::now()->year;

        $fechaInicioAux = $request->fechaInicio;
        $fechaInicio    = date("Y-m-d", strtotime($fechaInicioAux));
        //dd($fechaInicio);
        $carpeta->fechaInicio = $fechaInicio;
        if (isset($request->conDetenido)) {
            $carpeta->conDetenido = $request->conDetenido;
        }
        if (isset($request->esRelevante)) {
            $carpeta->esRelevante = $request->esRelevante;
        }
        $carpeta->estadoCarpeta     = "INICIO";
        $carpeta->horaIntervencion  = $request->horaIntervencion;
        $carpeta->descripcionHechos = $request->descripcionHechos;
        if (!is_null($request->npd)) {
            $carpeta->npd = $request->npd;
        }
        if (!is_null($request->numIph)) {
            $carpeta->numIph = $request->numIph;
        }
        $fechaIphAux       = $request->fechaIph;
        $fechaIph          = date("Y-m-d", strtotime($fechaIphAux));
        $carpeta->fechaIph = $fechaIph;
        if (!is_null($request->narracionIph)) {
            $carpeta->narracionIph = $request->narracionIph;
        }

        $fechaDeterminacionAux       = $request->fechaDeterminacion;
        $fechaDeterminacion          = date("Y-m-d", strtotime($fechaDeterminacionAux));
        $carpeta->fechaDeterminacion = $fechaDeterminacion;
        $carpeta->save();
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'carpeta', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva carpeta.', 'idFilaAccion' => $carpeta->id]);
        $idCarpeta = $carpeta->id;
        //dd($idCarpeta);
        DB::table('unidad')->where('id', Auth::user()->idUnidad)->update(['consecutivo' => $num]);
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'unidad', 'accion' => 'update', 'descripcion' => 'Se ha actualizado el campo consecutivo al haber registrado una nueva carpeta.', 'idFilaAccion' => Auth::user()->idUnidad]);
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
         */
        Alert::success('Carpeta iniciada con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('carpeta', $idCarpeta);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $carpetaNueva = Carpeta::where('id', $id)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $denunciantes = CarpetaController::getDenunciantes($id);
            $denunciados  = CarpetaController::getDenunciados($id);
            $testigos     = CarpetaController::getTestigos($id);
            $autoridades  = CarpetaController::getAutoridades($id);
            $abogados     = CarpetaController::getAbogados($id);
            $defensas     = CarpetaController::getDefensas($id);
            $familiares   = CarpetaController::getFamiliares($id);
            $delitos      = CarpetaController::getDelitos($id);
            $acusaciones  = CarpetaController::getAcusaciones($id);
            $vehiculos    = CarpetaController::getVehiculos($id);
            //$delits = CarpetaController::hayDelitosVeh($id);
            //dd($vehiculos);
            return view('carpeta')->with('carpetaNueva', $carpetaNueva)
                ->with('denunciantes', $denunciantes)
                ->with('denunciados', $denunciados)
                ->with('testigos', $testigos)
                ->with('autoridades', $autoridades)
                ->with('abogados', $abogados)
                ->with('defensas', $defensas)
                ->with('familiares', $familiares)
                ->with('delitos', $delitos)
                ->with('acusaciones', $acusaciones)
                ->with('vehiculos', $vehiculos);
        } else {
            return redirect()->route('home');
        }
    }

    public function verDetalle($id)
    {
        $carpetaNueva = Carpeta::where('id', $id)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $denunciantes = CarpetaController::getDenunciantes($id);
            $denunciados  = CarpetaController::getDenunciados($id);
            $testigos     = CarpetaController::getTestigos($id);
            $autoridades  = CarpetaController::getAutoridades($id);
            $abogados     = CarpetaController::getAbogados($id);
            $defensas     = CarpetaController::getDefensas($id);
            $familiares   = CarpetaController::getFamiliares($id);
            $delitos      = CarpetaController::getDelitos($id);
            $acusaciones  = CarpetaController::getAcusaciones($id);
            $vehiculos    = CarpetaController::getVehiculos($id);
            //$delits = CarpetaController::hayDelitosVeh($id);
            //dd($vehiculos);
            return view('detalle')->with('carpetaNueva', $carpetaNueva)
                ->with('denunciantes', $denunciantes)
                ->with('denunciados', $denunciados)
                ->with('testigos', $testigos)
                ->with('autoridades', $autoridades)
                ->with('abogados', $abogados)
                ->with('defensas', $defensas)
                ->with('familiares', $familiares)
                ->with('delitos', $delitos)
                ->with('acusaciones', $acusaciones)
                ->with('vehiculos', $vehiculos);
        } else {
            return redirect()->route('home');
        }
    }

    public static function getDenunciantes($id)
    {
        $denunciantes = DB::table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciante.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.rfc', 'persona.esEmpresa', 'variables_persona.edad', 'persona.sexo', 'variables_persona.telefono')
            ->where('variables_persona.idCarpeta', '=', $id)
            ->get();
        return $denunciantes;
    }

    public static function getTestigos($id)
    {
        $testigos = DB::table('extra_testigo')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_testigo.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_testigo.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.rfc', 'persona.esEmpresa', 'variables_persona.edad', 'persona.sexo', 'variables_persona.telefono')
            ->where('variables_persona.idCarpeta', '=', $id)
            ->get();
        return $testigos;
    }

    public static function getDenunciados($id)
    {
        $denunciados = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciado.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.rfc', 'persona.esEmpresa', 'variables_persona.edad', 'persona.sexo', 'variables_persona.telefono')
            ->where('variables_persona.idCarpeta', '=', $id)
            ->get();
        return $denunciados;
    }

    public static function getAbogados($id)
    {
        $abogados = DB::table('extra_abogado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_abogado.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'extra_abogado.cedulaProf', 'extra_abogado.sector', 'extra_abogado.tipo')
            ->where('variables_persona.idCarpeta', '=', $id)
            ->get();
        return $abogados;
    }

    public static function getDefensas($id)
    {
        $defensas1 = DB::table('extra_abogado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('extra_denunciante', 'extra_denunciante.idAbogado', '=', 'extra_abogado.id')
            ->join('variables_persona as var', 'var.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona as per', 'per.id', '=', 'var.idPersona')
            ->select('extra_abogado.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'per.nombres as nombres2', 'per.primerAp as primerAp2', 'per.segundoAp as segundoAp2')
            ->where('variables_persona.idCarpeta', '=', $id);
        $defensas = DB::table('extra_abogado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('extra_denunciado', 'extra_denunciado.idAbogado', '=', 'extra_abogado.id')
            ->join('variables_persona as var', 'var.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona as per', 'per.id', '=', 'var.idPersona')
            ->select('extra_abogado.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'per.nombres as nombres2', 'per.primerAp as primerAp2', 'per.segundoAp as segundoAp2')
            ->where('variables_persona.idCarpeta', '=', $id)
            ->union($defensas1)
            ->get();
        return $defensas;
    }

    public static function getAutoridades($id)
    {
        $autoridades = DB::table('extra_autoridad')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_autoridad.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_autoridad.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'extra_autoridad.antiguedad', 'extra_autoridad.rango', 'extra_autoridad.horarioLaboral', 'variables_persona.docIdentificacion', 'variables_persona.numDocIdentificacion')
            ->where('variables_persona.idCarpeta', '=', $id)
            ->get();
        return $autoridades;
    }

    public static function getFamiliares($id)
    {
        $familiaresDenunciado = DB::table('familiar')
            ->join('cat_ocupacion', 'cat_ocupacion.id', '=', 'familiar.idOcupacion')
            ->join('persona', 'persona.id', '=', 'familiar.idPersona')
            ->join('variables_persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('extra_denunciado', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->select('familiar.id', 'familiar.nombres as familiarNombre', 'familiar.primerAp as familiarPrimerAp', 'familiar.segundoAp as familiarSegundoAp', 'familiar.parentesco', 'cat_ocupacion.nombre as ocupacion', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $id);
        $familiares = DB::table('familiar')
            ->join('cat_ocupacion', 'cat_ocupacion.id', '=', 'familiar.idOcupacion')
            ->join('persona', 'persona.id', '=', 'familiar.idPersona')
            ->join('variables_persona', 'variables_persona.idPersona', '=', 'persona.id')
            ->join('extra_denunciante', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->select('familiar.id', 'familiar.nombres as familiarNombre', 'familiar.primerAp as familiarPrimerAp', 'familiar.segundoAp as familiarSegundoAp', 'familiar.parentesco', 'cat_ocupacion.nombre as ocupacion', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $id)
            ->union($familiaresDenunciado)
            ->get();
        //dd($familiares);
        return $familiares;
    }

    public static function getDelitos($id)
    {
        $delitos = DB::table('tipif_delito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->join('cat_modalidad', 'cat_modalidad.id', '=', 'tipif_delito.idModalidad')
            ->select('tipif_delito.id', 'cat_delito.id as idDelito', 'cat_delito.nombre as delito', 'cat_modalidad.nombre as modalidad', 'tipif_delito.fecha', 'tipif_delito.hora')
            ->where('tipif_delito.idCarpeta', '=', $id)
            ->get();
        return $delitos;
    }

    public static function hayDelitosVeh($id)
    {
        $delveh = DB::table('tipif_delito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->select('tipif_delito.id', 'cat_delito.id as idDelito', 'cat_delito.nombre as delito')
            ->where('tipif_delito.idCarpeta', '=', $id)
            ->whereIn('idDelito', [130, 131, 132, 133, 134, 135, 242, 243, 244, 245, 227])
            ->get();
        if (count($delveh) > 0) {
            return true;
        } else {
            return false;
        }
    }

    public static function getAcusaciones($id)
    {
        $acusaciones = DB::table('acusacion')
            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona as var', 'var.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona as per', 'per.id', '=', 'var.idPersona')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->select('acusacion.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'cat_delito.nombre as delito', 'per.nombres as nombres2', 'per.primerAp as primerAp2', 'per.segundoAp as segundoAp2')
            ->where('acusacion.idCarpeta', '=', $id)
            ->get();
        return $acusaciones;
    }

    public static function getVehiculos($id)
    {
        $vehiculos = DB::table('vehiculo')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'vehiculo.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->join('cat_submarca', 'cat_submarca.id', '=', 'vehiculo.idSubmarca')
            ->join('cat_marca', 'cat_marca.id', '=', 'cat_submarca.idMarca')
            ->join('cat_tipo_vehiculo', 'cat_tipo_vehiculo.id', '=', 'vehiculo.idTipoVehiculo')
            ->join('cat_color', 'cat_color.id', '=', 'vehiculo.idColor')
            ->select('vehiculo.id', 'cat_delito.nombre as delito', 'cat_marca.nombre as marca', 'vehiculo.modelo', 'vehiculo.placas', 'cat_tipo_vehiculo.nombre as tipovehiculo', 'cat_color.nombre as color')
            ->where('tipif_delito.idCarpeta', '=', $id)
            ->get();
        return $vehiculos;
    }

    public static function getAuxiliares($id)
    {

    }

    public static function getFiscales($id)
    {

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

    public function asignacionCarpeta(Request $request)
    {
        if ($request->tipo == 1) {
            DB::table('permisos_fiscales')->insert(['idFiscal' => $request->idUsuario, 'idCarpeta' => $request->idCarpeta]);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'permisos_fiscales', 'accion' => 'create', 'descripcion' => 'Se ha asigando la carpeta con id: ' . $request->idCarpeta . ' al fiscal ' . $request->idUsuario . '.', 'idFilaAccion' => $auxiliar->id]);

        } else if ($request->tipo == 0) {
            DB::table('permisos_auxiliares')->insert(['idAuxiliar' => $request->idUsuario, 'idCarpeta' => $request->idCarpeta]);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'permisos_auxiliares', 'accion' => 'create', 'descripcion' => 'Se ha asigando la carpeta con id: ' . $request->idCarpeta . ' al auxiliar ' . $request->idUsuario . '.', 'idFilaAccion' => $auxiliar->id]);
        }

        Alert::success('Se ha asignado la carpeta con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('home');
    }

}
