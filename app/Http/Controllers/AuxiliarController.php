<?php

namespace App\Http\Controllers;

class AuxiliarController extends Controller
{
    public function admin()
    {
        return view('forms.auxiliar');
    }
    
    public function index($idCarpeta)
    {
        return view('forms.auxiliar')->with('idCarpeta', $idCarpeta);
    }
}
