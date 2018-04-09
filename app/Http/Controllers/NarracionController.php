<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Narracion;
use Alert;

class NarracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idCarpeta, $idInvolucrado)
    {
        $narraciones= Narracion::where('idInvolucrado',$idInvolucrado)->where('idCarpeta',$idCarpeta)->get();


        return view('narraciones.index')->with('narraciones',$narraciones)->with('idCarpeta',$idCarpeta)->with('idInvolucrado',$idInvolucrado);
      //  return view('narraciones.index');


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
     $narracion= new Narracion($request->all());

     $narracion->save();
     $idCarpeta=$request->idCarpeta;
     $idInvolucrado=$request->idInvolucrado;
     Alert::success('Narración registrada con éxito', 'Hecho')->persistent("Aceptar");

     return redirect()->route('narracion.index',['idCarpeta'=>$idCarpeta,'idInvolucrado'=>$idInvolucrado]);


 }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
