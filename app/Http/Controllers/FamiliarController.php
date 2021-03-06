<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\StoreFamiliar;
use App\Models\Bitacora;
use App\Models\Carpeta;
use App\Models\CatOcupacion;
use App\Models\Familiar;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FamiliarController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if ($carpetaNueva->isEmpty()) {
            return redirect()->route('home');
        }
        $numCarpeta    = $carpetaNueva[0]->numCarpeta;
        $familiares    = CarpetaController::getFamiliares($idCarpeta);
        $ocupaciones   = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $involucrados1 = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('persona.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->where('persona.esEmpresa', '=', 0)
            ->orderBy('persona.nombres', 'ASC');
        $involucrados = DB::table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('persona.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
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

    }

    public function storeFamiliar(StoreFamiliar $request)
    {
        //dd($request->all());
        $familiar = new Familiar($request->all());
        $familiar->save();

        $denunciado = DB::table('variables_persona')
            ->join('extra_denunciado', 'extra_denunciado.idVariablesPersona', '=', 'variables_persona.idPersona')
            ->where('variables_persona.idPersona', '=', $familiar->idPersona)
            ->get();

        if (!empty($denunciado)) {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'familiar', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo familiar de denunciado.', 'idFilaAccion' => $familiar->id]);
        } else {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'familiar', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo familiar de denunciante.', 'idFilaAccion' => $familiar->id]);
        }

        Alert::success('Familiar registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.familiar', $request->idCarpeta);
    }

    public function edit($idCarpeta, $id)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if ($carpetaNueva->isEmpty()) {
            return redirect()->route('home');
        }
        $numCarpeta    = $carpetaNueva[0]->numCarpeta;
        $ocupaciones   = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $involucrados1 = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('persona.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->where('persona.esEmpresa', '=', 0)
            ->orderBy('persona.nombres', 'ASC');
        $involucrados = DB::table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('persona.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->where('persona.esEmpresa', '=', 0)
            ->orderBy('persona.nombres', 'ASC')
            ->union($involucrados1)
            ->get();

        $familiar = DB::table('familiar')
            ->join('persona', 'persona.id', '=', 'familiar.idPersona')
            ->select('familiar.id', 'familiar.idPersona', 'familiar.parentesco', 'familiar.nombres', 'familiar.primerAp', 'familiar.segundoAp', 'familiar.idOcupacion')
            ->where('familiar.id', '=', $id)
            ->get()->first();

        return view('edit-forms.familiar')->with('idCarpeta', $idCarpeta)
            ->with('numCarpeta', $numCarpeta)
            ->with('familiar', $familiar)
            ->with('involucrados', $involucrados)
            ->with('ocupaciones', $ocupaciones);
    }

    public function update(Request $request, $id)
    {
        $carpetaNueva = Carpeta::where('id', $request->idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        $var          = Familiar::where('id', $id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()) {
            return redirect()->route('home');
        }

        //dd($request->all());
        $familiar = Familiar::find($id);
        $familiar->fill($request->all());
        $familiar->save();

        $denunciado = DB::table('variables_persona')
            ->join('extra_denunciado', 'extra_denunciado.idVariablesPersona', '=', 'variables_persona.idPersona')
            ->where('variables_persona.idPersona', '=', $familiar->idPersona)
            ->get();

        if (!empty($denunciado)) {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'familiar', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un nuevo familiar de denunciado.', 'idFilaAccion' => $familiar->id]);
        } else {
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'familiar', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un nuevo familiar de denunciante.', 'idFilaAccion' => $familiar->id]);
        }

        Alert::success('Familiar actualizado con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('carpeta', $request->idCarpeta);

    }

}
