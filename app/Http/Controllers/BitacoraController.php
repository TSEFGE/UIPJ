<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;
use Illuminate\Support\Facades\Auth;

class BitacoraController extends Controller
{
    public function index(){
    	return view('bitacora');
    }

    public function apiBitacora(){
      $bitacora = DB::table('bitacora')
            ->join('users','users.id','=','bitacora.idUsuario')
            ->select('bitacora.id', DB::raw('CONCAT(users.nombres, " ", users.primerAp," ", ifnull(users.segundoAp,"")) AS usuario'), 'bitacora.tabla', 'bitacora.accion', 'bitacora.descripcion', 'bitacora.idFilaAccion', 'bitacora.created_at');
      return Datatables::of($bitacora)->make(true);
    }
}
