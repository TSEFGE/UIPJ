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
    public function index($idCarpeta, $idInvolucrado,$tipoInvolucrado)
    {
        $narraciones= Narracion::where('idInvolucrado',$idInvolucrado)->where('idCarpeta',$idCarpeta)->orderby('created_at','DESC')->get();
      
        if($narraciones->isNotEmpty()){

            return view('narraciones.index')->with('narraciones',$narraciones)->with('idCarpeta',$idCarpeta)->with('idInvolucrado',$idInvolucrado)->with('tipoInvolucrado',$tipoInvolucrado);
           
        }else{
        Alert::error('No se puede agregar narración a una persona o carpeta que no existe.', 'Error')->persistent("Aceptar");
              return redirect()->route('carpeta', $idCarpeta);
        }

        
      //  return view('narraciones.index');


    }

    public function ver($id){
      $narracion= Narracion::Where('id',$id)->get()->first();
      //dd($narracion->archivo,$narracion);
      return ['narracion'=>$narracion->narracion,'archivo'=>$narracion->archivo];
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
     if($request->file('archivo')){
        $file = $request->file('archivo');
        $name = 'archivo_adjunto_'.time().'.'.$file->getClientOriginalExtension();
        $path = public_path().'\storage\adjuntoNarracion\\';
        $file->move($path, $name);
     }else{
        $name="";
     }

     $narracion= new Narracion($request->all());
     $narracion->archivo=$name;


     $narracion->save();
     $idCarpeta=$request->idCarpeta;
     $idInvolucrado=$request->idInvolucrado;
       $tipoInvolucrado=$request->tipoInvolucrado;
     Alert::success('Narración registrada con éxito', 'Hecho')->persistent("Aceptar");

     return redirect()->route('narracion.index',['idCarpeta'=>$idCarpeta,'idInvolucrado'=>$idInvolucrado,'tipoInvolucrado'=>$tipoInvolucrado]);


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
