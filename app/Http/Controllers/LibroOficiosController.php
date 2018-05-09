<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;
use Illuminate\Support\Facades\Auth;

class LibroOficiosController extends Controller
{
    public function index(){
    	return view('librooficios');
    }

    public function apiLibro(){
      	$oficiossp = DB::table('diligencias_sp')
      		->join('acusacion','acusacion.id','=','diligencias_sp.idAcusacion')
      		->join('carpeta','carpeta.id','=','acusacion.idCarpeta')
            ->join('users','users.id','=','carpeta.idFiscal')
            ->select('diligencias_sp.numOficio', 'carpeta.numCarpeta', 'diligencias_sp.created_at', 'diligencias_sp.status', 'diligencias_sp.oficio', DB::raw('CONCAT("PERICIALES") AS extra'))
            ->where('users.id','=', Auth::user()->id);

        $oficios = DB::table('diligencias_pm')
      		->join('acusacion','acusacion.id','=','diligencias_pm.idAcusacion')
      		->join('carpeta','carpeta.id','=','acusacion.idCarpeta')
            ->join('users','users.id','=','carpeta.idFiscal')
            ->select('diligencias_pm.numOficio', 'carpeta.numCarpeta', 'diligencias_pm.created_at', 'diligencias_pm.status', 'diligencias_pm.oficio', DB::raw('CONCAT("MINISTERIALES") AS extra'))
            ->where('users.id','=', Auth::user()->id)
            ->union($oficiossp);
      return Datatables::of($oficios)->make(true);
    }
}
