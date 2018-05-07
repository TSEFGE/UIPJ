<?php

namespace App\Http\Controllers;

use Alert;
use App\Models\Acusacion;
use App\Models\Bitacora;
use App\Models\Carpeta;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AcusacionController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $numCarpeta   = $carpetaNueva[0]->numCarpeta;
            $acusaciones  = CarpetaController::getAcusaciones($idCarpeta);
            $denunciantes = DB::table('extra_denunciante')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->select('extra_denunciante.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
                ->where('variables_persona.idCarpeta', '=', $idCarpeta)
                ->orderBy('persona.nombres', 'ASC')
                ->get();
            $denunciados = DB::table('extra_denunciado')
                ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
                ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                ->select('extra_denunciado.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
                ->where('variables_persona.idCarpeta', '=', $idCarpeta)
                ->orderBy('persona.nombres', 'ASC')
                ->get();

            $tipifdelitos = DB::table('tipif_delito')
                ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
                ->join('cat_agrupacion1', 'cat_agrupacion1.id', '=', 'tipif_delito.idAgrupacion1')
                ->join('cat_agrupacion2', 'cat_agrupacion2.id', '=', 'tipif_delito.idAgrupacion2')
                ->select('tipif_delito.id', 'cat_delito.nombre as delito', 'cat_agrupacion1.nombre as desagregacion1', 'cat_agrupacion2.nombre as desagregacion2')
                ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
                ->orderBy('cat_delito.nombre', 'ASC')
                ->get();
            $cont = 0;
            foreach ($tipifdelitos as $delito => $nombre) {

                if ($tipifdelitos[$cont]->desagregacion1 == 'SIN AGRUPACION') {
                    $tipifdelitos[$cont]->desagregacion1 = " ";
                }if ($tipifdelitos[$cont]->desagregacion2 == 'SIN AGRUPACION') {
                    $tipifdelitos[$cont]->desagregacion2 = " ";
                }
                $cont = $cont + 1;
            }

            return view('forms.acusacion')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('acusaciones', $acusaciones)
                ->with('denunciantes', $denunciantes)
                ->with('denunciados', $denunciados)
                ->with('tipifdelitos', $tipifdelitos);

        } else {
            return redirect()->route('home');
        }
    }

    public function storeAcusacion(Request $request)
    {
//        dd($request->all());
        $acusacion                = new Acusacion();
        $acusacion->idCarpeta     = $request->idCarpeta;
        $acusacion->idDenunciante = $request->idDenunciante;
        $acusacion->idTipifDelito = $request->idTipifDelito;
        $acusacion->idDenunciado  = $request->idDenunciado;
        $acusacion->save();

        //Agregar a Bitacora
        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'acusacion', 'accion' => 'insert', 'descripcion' => 'Se han registrado nueva denuncia de la victima ' . $request->idDenunciante . ' por el Delito de ' . $request->idTipifDelito . ' al investigado: ' . $request->idDenunciado, 'idFilaAccion' => $acusacion->id]);
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
         */
        Alert::success('Denuncia registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.acusacion', $request->idCarpeta);
    }

    public function edit($idCarpeta, $id)
    {
        $denunciantes = DB::table('extra_denunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciante.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->orderBy('persona.nombres', 'ASC')
            ->get();
        $denunciados = DB::table('extra_denunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciado.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->orderBy('persona.nombres', 'ASC')
            ->get();
        $tipifdelitos = DB::table('tipif_delito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->join('cat_agrupacion1', 'cat_agrupacion1.id', '=', 'tipif_delito.idAgrupacion1')
            ->join('cat_agrupacion2', 'cat_agrupacion2.id', '=', 'tipif_delito.idAgrupacion2')
            ->select('tipif_delito.id', 'cat_delito.nombre as delito', 'cat_agrupacion1.nombre as desagregacion1', 'cat_agrupacion2.nombre as desagregacion2')
            ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
            ->orderBy('cat_delito.nombre', 'ASC')
            ->get();

        $cont = 0;
        foreach ($tipifdelitos as $delito => $nombre) {
            if ($tipifdelitos[$cont]->desagregacion1 == 'SIN AGRUPACION') {
                $tipifdelitos[$cont]->desagregacion1 = " ";
            }if ($tipifdelitos[$cont]->desagregacion2 == 'SIN AGRUPACION') {
                $tipifdelitos[$cont]->desagregacion2 = " ";
            }
            $cont = $cont + 1;
        }
        //  dump($cont);

        $denunciante = DB::table('extra_denunciante')
            ->join('acusacion', 'acusacion.idDenunciante', '=', 'extra_denunciante.id')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciante.id as idExtraDenunciante', 'persona.nombres as nombres', 'persona.primerAp as primerAp', 'persona.segundoAp as segundoAp', 'variables_persona.id as idVariablesPersona')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->orderBy('persona.nombres', 'ASC')
            ->get()->first();

        $denunciado = DB::table('extra_denunciado')
            ->join('acusacion', 'acusacion.idDenunciado', '=', 'extra_denunciado.id')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciado.id as idExtraDenunciado', 'persona.nombres as nombres', 'persona.primerAp as primerAp', 'persona.segundoAp as segundoAp', 'variables_persona.id as idVariablesPersona')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->orderBy('persona.nombres', 'ASC')
            ->get()->first();

        $delito = DB::table('tipif_delito')
            ->join('acusacion', 'acusacion.idTipifDelito', '=', 'tipif_delito.id')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->select('tipif_delito.id as idTipifDelito', 'cat_delito.nombre as nombre')
            ->where('tipif_delito.idCarpeta', '=', $idCarpeta)
            ->orderBy('cat_delito.nombre', 'ASC')
            ->get()->first();

        return view('edit-forms.acusacion')
            ->with('idCarpeta', $idCarpeta)
            ->with('id', $id)
            ->with('denunciantes', $denunciantes)
            ->with('denunciados', $denunciados)
            ->with('denunciante', $denunciante)
            ->with('denunciado', $denunciado)
            ->with('delito', $delito)
            ->with('tipifdelitos', $tipifdelitos);
    }

    public function update(Request $request, $id)
    {
        $carpetaNueva = Carpeta::where('id', $request->idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        $var          = Acusacion::where('id', $id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()) {
            return redirect()->route('home');
        }

        $acusacion                = Acusacion::find($id);
        $acusacion->idCarpeta     = $request->idCarpeta;
        $acusacion->idDenunciante = $request->idDenunciante;
        $acusacion->idTipifDelito = $request->idTipifDelito;
        $acusacion->idDenunciado  = $request->idDenunciado;

        Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'acusacion', 'accion' => 'update', 'descripcion' => 'Se han actualizado  denuncia de la victima ' . $request->idDenunciante . ' por el Delito de ' . $request->idTipifDelito . ' al investigado: ' . $request->idDenunciado, 'idFilaAccion' => $acusacion->id]);
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
         */
        Alert::success('Denuncia actualizada con éxito', 'Hecho')->persistent("Aceptar");

        return redirect()->route('carpeta', $request->idCarpeta);

    }

}
