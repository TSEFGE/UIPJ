<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\StoreVehiculo;
use App\Models\Bitacora;
use App\Models\Carpeta;
use App\Models\CatAseguradora;
use App\Models\CatClaseVehiculo;
use App\Models\CatColor;
use App\Models\CatEstado;
use App\Models\CatMarca;
use App\Models\CatProcedencia;
use App\Models\CatTipoUso;
use App\Models\Vehiculo;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehiculoController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $numCarpeta   = $carpetaNueva[0]->numCarpeta;
            $vehiculos    = CarpetaController::getVehiculos($idCarpeta);
            $aseguradoras = CatAseguradora::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $clasesveh    = CatClaseVehiculo::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $colores      = CatColor::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados      = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $marcas       = CatMarca::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $procedencias = CatProcedencia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $tiposuso     = CatTipoUso::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $tipifdelitos = DB::table('tipif_delito')
                ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
                ->join('cat_agrupacion1', 'cat_agrupacion1.id', '=', 'tipif_delito.idAgrupacion1')
                ->join('cat_agrupacion2', 'cat_agrupacion2.id', '=', 'tipif_delito.idAgrupacion2')
                ->select('tipif_delito.id', 'cat_delito.nombre as delito', 'cat_agrupacion1.nombre as desagregacion1', 'cat_agrupacion2.nombre as desagregacion2')
                ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
                ->orderBy('cat_delito.nombre', 'ASC')
                ->get();
            $cont = 0;
            foreach ($tipifdelitos as $delito => $nombre) {
                if ($tipifdelitos[$cont]->desagregacion1 == 'SIN AGRUPACION') {
                    $tipifdelitos[$cont]->desagregacion1 = " ";
                }
                if ($tipifdelitos[$cont]->desagregacion2 == 'SIN AGRUPACION') {
                    $tipifdelitos[$cont]->desagregacion2 = " ";
                }
                $cont = $cont + 1;
            }
            return view('forms.vehiculo')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('vehiculos', $vehiculos)
                ->with('tipifdelitos', $tipifdelitos)
                ->with('aseguradoras', $aseguradoras)
                ->with('clasesveh', $clasesveh)
                ->with('colores', $colores)
                ->with('estados', $estados)
                ->with('marcas', $marcas)
                ->with('procedencias', $procedencias)
                ->with('tiposuso', $tiposuso);
        } else {
            return redirect()->route('home');
        }
    }

    public function storeVehiculo(StoreVehiculo $request)
    {
        //dd($request->all());
        $vehiculo                = new Vehiculo();
        $vehiculo->idTipifDelito = $request->idTipifDelito;

        $vehiculo->placas         = $request->placas;
        $vehiculo->idEstado       = $request->idEstado;
        $vehiculo->idSubmarca     = $request->idSubmarca;
        $vehiculo->modelo         = $request->modelo;
        $vehiculo->nrpv           = $request->nrpv;
        $vehiculo->idColor        = $request->idColor;
        $vehiculo->permiso        = $request->permiso;
        $vehiculo->numSerie       = $request->numSerie;
        $vehiculo->numMotor       = $request->numMotor;
        $vehiculo->idTipoVehiculo = $request->idTipoVehiculo;
        $vehiculo->idTipoUso      = $request->idTipoUso;
        $vehiculo->senasPartic    = $request->senasPartic;
        $vehiculo->idProcedencia  = $request->idProcedencia;
        $vehiculo->idAseguradora  = $request->idAseguradora;
        $vehiculo->save();

        //Agregar a Bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'vehiculo', 'accion' => 'insert', 'descripcion' => 'Se han registrado datos generales de un Vehículo del delito: ' . $request->idTipifDelito . ' con Placas: ' . $request->placas . ' Del estado: ' . $request->idEstado, 'idFilaAccion' => $vehiculo->id]);
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
    public function edit($idCarpeta, $id)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        $var          = Vehiculo::where('id', $id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()) {
            return redirect()->route('home');
        }

        $numCarpeta = $carpetaNueva[0]->numCarpeta;
        // $tipifdelitos = DB::table('tipif_delito')
        //     ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
        //     ->select('tipif_delito.id', 'cat_delito.id as idDelito', 'cat_delito.nombre as delito')
        //     ->where('tipif_delito.idCarpeta', '=', $idCarpeta)->get();
        //->whereIn('idDelito', [130, 131, 132, 133, 134, 135, 242, 243, 244, 245, 227])
        $aseguradoras = CatAseguradora::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $clasesveh    = CatClaseVehiculo::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $colores      = CatColor::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $estados      = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $marcas       = CatMarca::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $procedencias = CatProcedencia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $tiposuso     = CatTipoUso::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        $tipifdelitos = DB::table('tipif_delito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->join('cat_agrupacion1', 'cat_agrupacion1.id', '=', 'tipif_delito.idAgrupacion1')
            ->join('cat_agrupacion2', 'cat_agrupacion2.id', '=', 'tipif_delito.idAgrupacion2')
            ->select('tipif_delito.id', 'cat_delito.nombre as delito', 'cat_agrupacion1.nombre as desagregacion1', 'cat_agrupacion2.nombre as desagregacion2')
            ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
            ->orderBy('cat_delito.nombre', 'ASC')
            ->get();
        $cont = 0;
        foreach ($tipifdelitos as $delito => $nombre) {
            if ($tipifdelitos[$cont]->desagregacion1 == 'SIN AGRUPACION') {
                $tipifdelitos[$cont]->desagregacion1 = " ";
            }
            if ($tipifdelitos[$cont]->desagregacion2 == 'SIN AGRUPACION') {
                $tipifdelitos[$cont]->desagregacion2 = " ";
            }
            $cont = $cont + 1;
        }

        $vehiculo = DB::table('vehiculo')
            ->join('cat_submarca', 'cat_submarca.id', '=', 'vehiculo.idSubmarca')
            ->join('cat_tipo_vehiculo', 'cat_tipo_vehiculo.id', '=', 'vehiculo.idTipoVehiculo')
            ->select('vehiculo.id as idVehiculo', 'vehiculo.idTipifDelito', 'vehiculo.placas', 'vehiculo.idEstado', 'vehiculo.idSubmarca', 'vehiculo.modelo', 'vehiculo.nrpv', 'vehiculo.idColor', 'vehiculo.permiso', 'vehiculo.numSerie', 'vehiculo.numMotor', 'vehiculo.idTipoVehiculo', 'vehiculo.idTipoUso', 'vehiculo.senasPartic', 'vehiculo.idProcedencia', 'vehiculo.idAseguradora', 'cat_submarca.idMarca', 'cat_tipo_vehiculo.idClaseVehiculo')
            ->where('vehiculo.id', '=', $id)
            ->get()->first();

        //dump($vehiculo);
        return view('edit-forms.vehiculo')->with('idCarpeta', $idCarpeta)
            ->with('numCarpeta', $numCarpeta)
            ->with('vehiculo', $vehiculo)
            ->with('tipifdelitos', $tipifdelitos)
            ->with('aseguradoras', $aseguradoras)
            ->with('tipifdelitos', $tipifdelitos)

            ->with('clasesveh', $clasesveh)
            ->with('colores', $colores)
            ->with('estados', $estados)
            ->with('marcas', $marcas)
            ->with('procedencias', $procedencias)
            ->with('tiposuso', $tiposuso);
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
        $var          = Vehiculo::where('id', $id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()) {
            return redirect()->route('home');
        }

        $vehiculo                 = Vehiculo::find($id);
        $vehiculo->idTipifDelito  = $request->idTipifDelito;
        $vehiculo->placas         = $request->placas;
        $vehiculo->idEstado       = $request->idEstado;
        $vehiculo->idSubmarca     = $request->idSubmarca;
        $vehiculo->modelo         = $request->modelo;
        $vehiculo->nrpv           = $request->nrpv;
        $vehiculo->idColor        = $request->idColor;
        $vehiculo->permiso        = $request->permiso;
        $vehiculo->numSerie       = $request->numSerie;
        $vehiculo->numMotor       = $request->numMotor;
        $vehiculo->idTipoVehiculo = $request->idTipoVehiculo;
        $vehiculo->idTipoUso      = $request->idTipoUso;
        $vehiculo->senasPartic    = $request->senasPartic;
        $vehiculo->idProcedencia  = $request->idProcedencia;
        $vehiculo->idAseguradora  = $request->idAseguradora;
        $vehiculo->save();
        //Agregar a Bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'vehiculo', 'accion' => 'update', 'descripcion' => 'Se han actualizado datos generales de un Vehículo del delito: ' . $request->idTipifDelito . ' con Placas: ' . $request->placas . ' Del estado: ' . $request->idEstado, 'idFilaAccion' => $vehiculo->id]);

        Alert::success('Vehículo registrado con éxito', 'Hecho')->persistent("Aceptar");
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
