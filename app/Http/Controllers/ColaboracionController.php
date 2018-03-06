<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ColaboracionController extends Controller
{
    public function showForm($idCarpeta)
    {
        $acusaciones = CarpetaController::getAcusaciones($idCarpeta);
        $servicios = DB::table('cat_pministerial')->select('id', 'nombre')->orderBy('nombre', 'ASC')->get();
        return view('forms.colaboracionpm')->with('idCarpeta', $idCarpeta)
            ->with('acusaciones', $acusaciones)
            ->with('servicios', $servicios);
    }

    public function showForm2($idCarpeta)
    {
        $acusaciones = CarpetaController::getAcusaciones($idCarpeta);
        $servicios = DB::table('cat_spericiales')->select('id', 'nombre')->orderBy('nombre', 'ASC')->get();
        return view('forms.colaboracionsp')->with('idCarpeta', $idCarpeta)
            ->with('acusaciones', $acusaciones)
            ->with('servicios', $servicios);
    }
}
