<?php

namespace App\Http\Controllers;

use Alert;
use App\Http\Requests\StoreAbogado;
use App\Models\Bitacora;
use App\Models\Carpeta;
use App\Models\CatEstado;
use App\Models\CatEstadoCivil;
use App\Models\CatMunicipio;
use App\Models\Domicilio;
use App\Models\ExtraAbogado;
use App\Models\ExtraDenunciado;
use App\Models\Persona;
use App\Models\VariablesPersona;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DefensaController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $numCarpeta = $carpetaNueva[0]->numCarpeta;
            $defensas   = CarpetaController::getDefensas($idCarpeta);
            $abogados   = DB::table('extra_abogado')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->select('extra_abogado.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
                ->where('variables_persona.idCarpeta', '=', $idCarpeta)
                ->orderBy('persona.nombres', 'ASC')
                ->get();
            return view('forms.defensa')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('defensas', $defensas)
                ->with('abogados', $abogados);
        } else {
            return redirect()->route('home');
        }
    }

    public function storeDefensa(Request $request)
    {
        //dd($request->all());
        $idAbogado     = $request->idAbogado;
        $tipo          = $request->tipo;
        $idInvolucrado = $request->idInvolucrado;
        $xd            = DB::table('extra_denunciante')->select('id')->where('idVariablesPersona', $idInvolucrado)->get();
        if (count($xd) > 0) {
            DB::table('extra_denunciante')->where('idVariablesPersona', $idInvolucrado)->update(['idAbogado' => $idAbogado]);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciante', 'accion' => 'update', 'descripcion' => 'Se ha asignado un abogado a un denunciante.', 'idFilaAccion' => $xd[0]->id]);
        } else {
            DB::table('extra_denunciado')->where('idVariablesPersona', $idInvolucrado)->update(['idAbogado' => $idAbogado]);
            $idExtraDenunciado = ExtraDenunciado::where('idVariablesPersona', '=', $idInvolucrado)->first();
            //dd($idExtraDenunciado);
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_denunciado', 'accion' => 'update', 'descripcion' => 'Se ha asignado un abogado a un denunciado.', 'idFilaAccion' => $idExtraDenunciado->id]);

        }

        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
         */
        Alert::success('Defensa asignada con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.defensa', $request->idCarpeta);
    }
}
