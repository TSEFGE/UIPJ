<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuxiliarController extends Controller
{
    public function showForm()
    {
        return view('forms.auxiliar');
    }

    public function storeAuxiliar(StoreAuxiliar $request)
    {

        $auxiliar               = new Auxiliar();
        $auxiliar->idFiscal     = Auth::user()->id;
        $auxiliar->nombres      = $request->nombres;
        $auxiliar->primerAp     = $request->primerAp;
        $auxiliar->segundoAp    = $request->segundoAp;
        $auxiliar->email        = $request->email;
        $auxiliar->telefono     = $request->telefono;
        $auxiliar->password     = $request->password;
        $auxiliar->tokenSession = null;
        $auxiliar->save();

        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'auxiliar', 'accion' => 'create', 'descripcion' => 'Se ha dado de alta el auxiliar' . $auxiliar->nombres . ' ' . $auxiliar->primerAp . ' ' . $auxiliar->segundoAp . '.', 'idFilaAccion' => $auxiliar->id]);
    }
}
