<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use Carbon\Carbon;
use App\Models\Citatorio;

class CitatorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
Citatorio     * @return \Illuminate\Http\Response
     */
    public function index($idCarpeta,$idCitado,$tipoInvolucrado)
    {
        $citatorios= Citatorio::where('idCarpeta',$idCarpeta)->where('idCitado',$idCitado)->where('tipo',$tipoInvolucrado)->get();
        return view('forms.citatorio')->with('idCarpeta',$idCarpeta)->with('idCitado',$idCitado)->with('tipoInvolucrado',$tipoInvolucrado)->with('citatorios', $citatorios);
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
        //dd($request->all());
        $fecha = Carbon::parse($request->fecha)->format("Y-d-m H:i:00");
        //if($request->tipoInvolucrado=="")
        //Generar documento
        $citatorio = new Citatorio($request->all());
        $citatorio->fecha = $fecha;
        $citatorio->intento = 1;
        $citatorio->documento = "xd.jpg";
        $citatorio->save();
        //Retornar documento
        Alert::success('Citatorio registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('citatorio', ['idCarpeta'=>$request->idCarpeta,'idCitado'=>$request->idCitado, 'tipoInvolucrado'=>$request->tipo]);
    
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
