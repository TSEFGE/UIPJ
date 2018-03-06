<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carpetas = DB::table('carpeta')
            ->join('users', 'users.id', '=', 'carpeta.idFiscal')
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->select('carpeta.id','unidad.nombre', 'users.nombres', 'users.primerAp', 'users.segundoAp', 'carpeta.numCarpeta', 'carpeta.fechaInicio', 'carpeta.estadoCarpeta')
            ->where('carpeta.idFiscal', '=', Auth::user()->id)
            ->orderBy('id','DESC')
            ->paginate(10);
        //dd($carpetas);
        return view('home')->with('carpetas', $carpetas);
    }
}
