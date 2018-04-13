<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;

class ColaboracionController extends Controller
{
    public function showForm($idCarpeta)
    {
        Alert::info('Para generar el documento debes seleccionar los servicios solicitados seguido de la acusación. ', 'Importante')->persistent("Aceptar");

        $acusaciones = CarpetaController::getAcusaciones($idCarpeta);
        $servicios = DB::table('cat_pministerial')->select('id', 'nombre')->orderBy('nombre', 'ASC')->get();
        return view('forms.colaboracionpm')->with('idCarpeta', $idCarpeta)
            ->with('acusaciones', $acusaciones)
            ->with('servicios', $servicios);

    }

    public function showForm2($idCarpeta)
    { 
         Alert::info('Para generar el documento debes seleccionar una acusación y el término en horas, seguido de los diferentes servicios requeridos. ', 'Importante')->persistent("Aceptar");
        $acusaciones = CarpetaController::getAcusaciones($idCarpeta);
        $servicios = DB::table('cat_spericiales')->select('id', 'nombre')->orderBy('nombre', 'ASC')->get();
        return view('forms.colaboracionsp')->with('idCarpeta', $idCarpeta)
            ->with('acusaciones', $acusaciones)
            ->with('servicios', $servicios);
    }
}
