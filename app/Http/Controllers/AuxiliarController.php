<?php

namespace App\Http\Controllers;

class AuxiliarController extends Controller
{
    public function index($idCarpeta)
    {
        return view('forms.auxiliar')->with('idCarpeta', $idCarpeta);
    }
}
