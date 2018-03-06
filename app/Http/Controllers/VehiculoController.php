<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use App\Http\Requests\StoreVehiculo;
use App\Models\CatAseguradora;
use App\Models\CatClaseVehiculo;
use App\Models\CatColor;
use App\Models\CatEstado;
use App\Models\CatMarca;
use App\Models\CatProcedencia;
use App\Models\CatTipoUso;
use App\Models\Carpeta;
use App\Models\Vehiculo;
use App\Models\TipifDelito;

class VehiculoController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if(count($carpetaNueva)>0){ 
            $vehiculos = CarpetaController::getVehiculos($idCarpeta);
            $tipifdelitos = DB::table('tipif_delito')
                ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
                ->select('tipif_delito.id', 'cat_delito.id as idDelito', 'cat_delito.nombre as delito')
                ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
                ->whereIn('idDelito', [130, 131, 132, 133, 134, 135, 242, 243, 244, 245, 227])
                ->get();
            $aseguradoras = CatAseguradora::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $clasesveh = CatClaseVehiculo::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $colores = CatColor::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $marcas = CatMarca::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $procedencias = CatProcedencia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $tiposuso = CatTipoUso::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            return view('forms.vehiculo')->with('idCarpeta', $idCarpeta)
                ->with('vehiculos', $vehiculos)
                ->with('tipifdelitos', $tipifdelitos)
                ->with('aseguradoras', $aseguradoras)
                ->with('clasesveh', $clasesveh)
                ->with('colores', $colores)
                ->with('estados', $estados)
                ->with('marcas', $marcas)
                ->with('procedencias', $procedencias)
                ->with('tiposuso', $tiposuso);
        }else{
            return redirect()->route('home');
        }
    }

    public function storeVehiculo(StoreVehiculo $request){
        //dd($request->all());
        $vehiculo = new Vehiculo();
        $vehiculo->idTipifDelito = $request->idTipifDelito;
        $vehiculo->status = $request->status;
        $vehiculo->placas = $request->placas;
        $vehiculo->idEstado = $request->idEstado;
        $vehiculo->idSubmarca = $request->idSubmarca;
        $vehiculo->modelo = $request->modelo;
        $vehiculo->nrpv = $request->nrpv;
        $vehiculo->idColor = $request->idColor;
        $vehiculo->permiso = $request->permiso;
        $vehiculo->numSerie = $request->numSerie;
        $vehiculo->numMotor = $request->numMotor;
        $vehiculo->idTipoVehiculo = $request->idTipoVehiculo;
        $vehiculo->idTipoUso = $request->idTipoUso;
        $vehiculo->senasPartic = $request->senasPartic;
        $vehiculo->idProcedencia = $request->idProcedencia;
        $vehiculo->idAseguradora = $request->idAseguradora;
        $vehiculo->save();
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        Alert::success('Vehículo registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.vehiculo', $request->idCarpeta);
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
