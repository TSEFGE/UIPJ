<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Alert;
use DiligenciaSP;

class ColaboracionController extends Controller
{
    public function showForm($idCarpeta)
    {
        //Alert::info('Para generar el documento debes seleccionar los servicios solicitados seguido de la acusación. ', 'Importante')->persistent("Aceptar");

        $acusaciones = CarpetaController::getAcusaciones($idCarpeta);
        $servicios = DB::table('cat_pministerial')->select('id', 'nombre')->orderBy('nombre', 'ASC')->get();

        $diligenciasPM = DB::table('diligencias_pm')
            ->join('acusacion', 'acusacion.id', '=', 'diligencias_pm.idAcusacion')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')

            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona as vadAdo', 'vadAdo.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona as per', 'per.id', '=', 'vadAdo.idPersona')

            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('per.nombres as nombresADO', 'persona.nombres as nombresTE', 'cat_delito.nombre as delito', 'diligencias_pm.dictamen', 'diligencias_pm.status', 'diligencias_pm.oficio', 'diligencias_pm.created_At as fecha')
            ->where('acusacion.idCarpeta', $idCarpeta)
            ->get();

        return view('forms.colaboracionpm')->with('idCarpeta', $idCarpeta)
            ->with('acusaciones', $acusaciones)
            ->with('servicios', $servicios)
            ->with('diligencasPM', $diligenciasPM);
    }

    public function showForm2($idCarpeta)
    {
        //Alert::info('Para generar el documento debes seleccionar una acusación y el término en horas, seguido de los diferentes servicios requeridos. ', 'Importante')->persistent("Aceptar");
        $acusaciones = CarpetaController::getAcusaciones($idCarpeta);
        $servicios = DB::table('cat_spericiales')->select('id', 'nombre')->orderBy('nombre', 'ASC')->get();

        $diligenciasSP = DB::table('diligencias_pm')
            ->join('acusacion', 'acusacion.id', '=', 'diligencias_pm.idAcusacion')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')

            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona as vadAdo', 'vadAdo.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona as per', 'per.id', '=', 'vadAdo.idPersona')

            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('per.nombres as nombresADO', 'persona.nombres as nombresTE', 'cat_delito.nombre as delito', 'diligencias_pm.dictamen', 'diligencias_pm.status', 'diligencias_pm.oficio', 'diligencias_pm.created_At as fecha')
            ->where('acusacion.idCarpeta', $idCarpeta)
            ->get();
        //dd($diligenciasSP);

        return view('forms.colaboracionsp')->with('idCarpeta', $idCarpeta)
            ->with('acusaciones', $acusaciones)
            ->with('servicios', $servicios)
            ->with('diligencasSP', $diligenciasSP);
    }
}
