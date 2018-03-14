<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use DB;
use Illuminate\Support\Facades\Auth;


class LibroGobiernoController extends Controller
{
    public function index(){
    	return view('librogobierno');
    }

    public function apiLibro(){
      $libro = DB::table('carpeta')
            ->join('users','users.id','=','carpeta.idFiscal')
            ->join('unidad','unidad.id','=','users.idUnidad')
            ->join('variables_persona','variables_persona.idCarpeta','=','carpeta.id')
            ->join('extra_denunciante','extra_denunciante.idVariablesPersona','=','variables_persona.id')
            ->join('persona','persona.id','=','variables_persona.idPersona')
            ->select('carpeta.fechaInicio as Fecha','carpeta.numCarpeta','unidad.nombre as Unidad',DB::raw('CONCAT(users.nombres, " ", users.primerAp," ", ifnull(users.segundoAp,"")) AS Fiscal'),DB::raw('group_concat(persona.nombres," ",ifnull(persona.primerAp,"")," ",ifnull(persona.segundoAp,"")) as Denunciante'),'carpeta.descripcionHechos as Nota')
            ->groupBy('carpeta.id')
            ->where('unidad.id','=', Auth::user()->idUnidad)
            ->get();
      return Datatables::of($libro)->make(true);
    }
}
