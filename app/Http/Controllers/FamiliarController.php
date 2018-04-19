<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Alert;
use App\Http\Requests\StoreFamiliar;
use App\Models\Carpeta;
use App\Models\CatOcupacion;
use App\Models\Familiar;
use App\Models\Bitacora;



class FamiliarController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if(count($carpetaNueva)>0){
            $numCarpeta = $carpetaNueva[0]->numCarpeta;
            $familiares = CarpetaController::getFamiliares($idCarpeta);
            $ocupaciones = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $involucrados1 = DB::table('extra_denunciado')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->select('persona.id','persona.nombres', 'persona.primerAp', 'persona.segundoAp')
                ->where('variables_persona.idCarpeta', '=', $idCarpeta)
                ->where('persona.esEmpresa', '=', 0)
                ->orderBy('persona.nombres', 'ASC');
                 $involucrados = DB::table('extra_denunciante')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->select('persona.id','persona.nombres', 'persona.primerAp', 'persona.segundoAp')
                ->where('variables_persona.idCarpeta', '=', $idCarpeta)
                ->where('persona.esEmpresa', '=', 0)
                ->orderBy('persona.nombres', 'ASC')
                ->union($involucrados1)
                ->get();

           return view('forms.familiar')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('familiares', $familiares)
                ->with('involucrados', $involucrados)
                ->with('ocupaciones', $ocupaciones);
        }else{
            return redirect()->route('home');
        }
    } 

    public function storeFamiliar(StoreFamiliar $request){
        //dd($request->all());
        $familiar = new Familiar($request->all());
        $familiar->save();
        $idPersona= $familiar->idPersona;
        $varPersona = DB::table('variables_persona')->where('variables_persona.idPersona', '=', $idPersona)->get();
        $varPer=$varPersona[0]->id;
       
        $denunciado = DB::table('extra_denunciado')->where('extra_denunciado.idVariablesPersona', '=', $varPer)->get();

        if(!empty($denunciado)){
             Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'familiar', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo familiar de denunciado.', 'idFilaAccion' => $familiar->id]);
           }else{

             Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'familiar', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo familiar de denunciante.', 'idFilaAccion' => $familiar->id]);
           }
    
        
        Alert::success('Familiar registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.familiar', $request->idCarpeta);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function show(Familiar $familiar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function edit(Familiar $familiar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familiar $familiar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Familiar  $familiar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Familiar $familiar)
    {
        //
    }
}
