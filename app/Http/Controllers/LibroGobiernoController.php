<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use App\Models\Unidad;


class LibroGobiernoController extends Controller
{
    public function index(){
    	return view('librogobierno');
    }

    public function apiLibro(){
    	$unidad = Unidad::select('id', 'nombre');

        return Datatables::of($unidad)->make(true);
    }
}
