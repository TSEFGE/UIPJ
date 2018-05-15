<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Auxiliar;
use App\Models\Bitacora;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuxiliarController extends Controller
{
    public function showForm()
    {
        $auxiliares = DB::table('auxiliares')
            ->join('permisos_auxiliares', 'permisos_auxiliares.idAuxiliar', '=', 'auxiliares.id')
            ->select('auxiliares.id', 'auxiliares.email', 'auxiliares.telefono', DB::raw('CONCAT(auxiliares.nombres, " ", ifnull(auxiliares.primerAp,"")," ", ifnull(auxiliares.segundoAp,"")) AS nombre'), DB::raw('CONCAT("AUXILIAR") AS tipo'))
            ->where('auxiliares.idFiscal', Auth::user()->id)
            ->get();
        return view('forms.auxiliar')->with('auxiliares', $auxiliares);
    }

    public function storeAuxiliar(Request $request)
    {

        //dd($request);

        $auxiliar               = new Auxiliar();
        $auxiliar->idFiscal     = Auth::user()->id;
        $auxiliar->nombres      = $request->nombreAux;
        $auxiliar->primerAp     = $request->primerApAux;
        $auxiliar->segundoAp    = $request->segundoApAux;
        $auxiliar->email        = $request->email;
        $auxiliar->telefono     = $request->telefonoAux;
        $auxiliar->password     = $request->contraseña;
        $auxiliar->tokenSession = null;
        $auxiliar->save();
        //  dd($auxiliar);
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'auxiliar', 'accion' => 'create', 'descripcion' => 'Se ha dado de alta el auxiliar' . $auxiliar->nombres . ' ' . $auxiliar->primerAp . ' ' . $auxiliar->segundoAp . '.', 'idFilaAccion' => $auxiliar->id]);

        Alert::success('Auxiliar registrado con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('show.auxiliar', $request->idCarpeta);

    }
}
