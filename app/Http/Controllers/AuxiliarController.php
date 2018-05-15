<?php

namespace App\Http\Controllers;

class AuxiliarController extends Controller
{
    public function showForm()
    {
        return view('forms.auxiliar');
    }

    public function storeAuxiliar(StoreAuxiliar $request)
    {

    }
}
