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
use DB;
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

    public function edit($idCarpeta, $id)
    {
        $delits         = CatDelito::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $posiblescausas = CatPosibleCausa::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $estados        = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $municipiosVer  = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $lugares        = CatLugar::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $marcas         = CatMarca::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $modalidades    = CatModalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $tiposarma      = CatTipoArma::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $zonas          = CatZona::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        $infoComision = DB::table('domicilio')
            ->join('tipif_delito', 'tipif_delito.idDomicilio', '=', 'domicilio.id')
            ->join('cat_arma', 'cat_arma.id', '=', 'tipif_delito.idArma')
        //->join('cat_arma', 'cat_arma.idTipoArma', '=', 'cat_tipo_arma.id')
            ->select('tipif_delito.id as idTipifDelito', 'tipif_delito.idDomicilio as idDomicilio', 'tipif_delito.idDelito as idDelito', 'tipif_delito.idAgrupacion1 as  idAgrupacion1', 'tipif_delito.idAgrupacion2 as idAgrupacion2', 'tipif_delito.hora as hora', 'tipif_delito.fecha as fecha', 'tipif_delito.conViolencia as conViolencia', 'tipif_delito.idModalidad as idModalidad', 'tipif_delito.formaComision as formaComision', 'tipif_delito.consumacion as consumacion', 'tipif_delito.idArma as idArma', 'tipif_delito.idPosibleCausa as idPosibleCausa', 'cat_arma.idTipoArma as idTipoArma')
            ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
            ->where('tipif_delito.id', '=', $id)
            ->get()->first();

        $infoLugarHechos = DB::table('domicilio')
            ->join('tipif_delito', 'tipif_delito.idDomicilio', '=', 'domicilio.id')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
            ->select('domicilio.id as id', 'tipif_delito.idLugar as idLugar', 'tipif_delito.idZona as idZona', 'tipif_delito.entreCalle as entreCalle', 'tipif_delito.yCalle as yCalle', 'tipif_delito.calleTrasera as calleTrasera ', 'tipif_delito.puntoReferencia as puntoReferencia', 'cat_estado.id as idEstado', 'domicilio.idMunicipio as idMunicipio', 'domicilio.idLocalidad as idLocalidad', 'domicilio.idColonia as idColonia', 'domicilio.calle as calle', 'domicilio.numExterno as numExterno', 'domicilio.numInterno as numInterno')
            ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
            ->where('tipif_delito.id', '=', $id)
            ->get()->first();

        dump($infoComision, $infoLugarHechos);

        return view('edit-forms.delito')
            ->with('idCarpeta', $idCarpeta)
            ->with('id', $id)
            ->with('delits', $delits)
            ->with('posiblescausas', $posiblescausas)
            ->with('estados', $estados)
            ->with('municipiosVer', $municipiosVer)
            ->with('lugares', $lugares)
            ->with('marcas', $marcas)
            ->with('modalidades', $modalidades)
            ->with('tiposarma', $tiposarma)
            ->with('zonas', $zonas)
            ->with('infoComision', $infoComision)
            ->with('infoLugarHechos', $infoLugarHechos);
    }
    public function update(Request $request, $id)
    {
        $carpetaNueva = Carpeta::where('id', $request->idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        $var          = TipifDelito::where('id', $id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()) {
            return redirect()->route('home');
        }

        $domicilio = Domicilio::find($request->idDomicilio);
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

        $tipifDelito                = TipifDelito::find($id);
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
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'tipif_delito', 'accion' => 'update', 'descripcion' => 'Se ha actualizado Información de un Delito con Violencia', 'idFilaAccion' => $tipifDelito->id]);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado Información sobre el lugar de un Delito con Violencia', 'idFilaAccion' => $domicilio->id]);
        } else {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'tipif_delito', 'accion' => 'update', 'descripcion' => 'Se ha actualizado Información de un Delito sin Violencia', 'idFilaAccion' => $tipifDelito->id]);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado Información sobre el lugar de un Delito sin Violencia', 'idFilaAccion' => $domicilio->id]);
        }
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
         */
        Alert::success('Delito actualizado con éxito', 'Hecho')->persistent("Aceptar");
    }
}
