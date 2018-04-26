<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\StoreDelito;
use App\Models\Bitacora;
use App\Models\Carpeta;
use App\Models\CatDelito;
use App\Models\CatEstado;
use App\Models\CatLugar;
use App\Models\CatMarca;
use App\Models\CatModalidad;
use App\Models\CatMunicipio;
use App\Models\CatPosibleCausa;
use App\Models\CatTipoArma;
use App\Models\CatZona;
use App\Models\Domicilio;
use App\Models\TipifDelito;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DelitoController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $numCarpeta     = $carpetaNueva[0]->numCarpeta;
            $delitos        = CarpetaController::getDelitos($idCarpeta);
            $delits         = CatDelito::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $posiblescausas = CatPosibleCausa::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lugares        = CatLugar::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $marcas         = CatMarca::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $modalidades    = CatModalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $tiposarma      = CatTipoArma::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $zonas          = CatZona::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            return view('forms.delito')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('delitos', $delitos)
                ->with('delits', $delits)
                ->with('posiblescausas', $posiblescausas)
                ->with('estados', $estados)
                ->with('municipiosVer', $municipiosVer)
                ->with('lugares', $lugares)
                ->with('marcas', $marcas)
                ->with('modalidades', $modalidades)
                ->with('tiposarma', $tiposarma)
                ->with('zonas', $zonas);
        } else {
            return redirect()->route('home');
        }
    }

    public function storeDelito(StoreDelito $request)
    {
        //dd($request->all());
        $domicilio              = new Domicilio();
        $domicilio->idMunicipio = $request->idMunicipio;
        $domicilio->idLocalidad = $request->idLocalidad;
        $domicilio->idColonia   = $request->idColonia;
        $domicilio->calle       = $request->calle;
        $domicilio->numExterno  = $request->numExterno;
        $domicilio->numInterno  = $request->numInterno;
        $domicilio->save();

        $idD1 = $domicilio->id;

        $tipifDelito                = new TipifDelito();
        $tipifDelito->idCarpeta     = $request->idCarpeta;
        $tipifDelito->idDelito      = $request->idDelito;
        $tipifDelito->idAgrupacion1 = $request->idAgrupacion1;
        $tipifDelito->idAgrupacion2 = $request->idAgrupacion2;
        if ($request->conViolencia === "1") {
            $tipifDelito->conViolencia   = 1;
            $tipifDelito->idArma         = $request->idArma;
            $tipifDelito->idPosibleCausa = $request->idPosibleCausa;
        }
        $tipifDelito->idModalidad   = $request->idModalidad;
        $tipifDelito->formaComision = $request->formaComision;
        $tipifDelito->consumacion   = $request->consumacion;

        $fechaAux = $request->fecha;
        $fechaDel = date("Y-m-d", strtotime($fechaAux));

        $tipifDelito->fecha           = $fechaDel;
        $tipifDelito->hora            = $request->hora;
        $tipifDelito->idLugar         = $request->idLugar;
        $tipifDelito->idZona          = $request->idZona;
        $tipifDelito->idDomicilio     = $idD1;
        $tipifDelito->entreCalle      = $request->entreCalle;
        $tipifDelito->yCalle          = $request->yCalle;
        $tipifDelito->calleTrasera    = $request->calleTrasera;
        $tipifDelito->puntoReferencia = $request->puntoReferencia;
        $tipifDelito->save();
        //guarda en Bitacora
        if ($request->conViolencia === "1") {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'tipif_delito', 'accion' => 'insert', 'descripcion' => 'Se ha registrado Información de un Delito con Violencia', 'idFilaAccion' => $tipifDelito->id]);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado Información sobre el lugar de un Delito con Violencia', 'idFilaAccion' => $domicilio->id]);
        } else {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'tipif_delito', 'accion' => 'insert', 'descripcion' => 'Se ha registrado Información de un Delito sin Violencia', 'idFilaAccion' => $tipifDelito->id]);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado Información sobre el lugar de un Delito sin Violencia', 'idFilaAccion' => $domicilio->id]);
        }
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
         */
        Alert::success('Delito registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.delito', $request->idCarpeta);
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
