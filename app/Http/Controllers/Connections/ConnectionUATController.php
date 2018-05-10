<?php

namespace App\Http\Controllers\Connections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Acusacion;
use App\Models\Carpeta;
use App\Models\ExtraAbogado;
use App\Models\ExtraAutoridad;
use App\Models\ExtraDenunciado;
use App\Models\ExtraDenunciante;
use App\Models\TipifDelito;
use App\Models\VariablesPersona;
use App\Models\uatuipj\Acusacion2;
use App\Models\uatuipj\Carpeta2;
use App\Models\uatuipj\ExtraAbogado2;
use App\Models\uatuipj\ExtraAutoridad2;
use App\Models\uatuipj\ExtraDenunciado2;
use App\Models\uatuipj\ExtraDenunciante2;
use App\Models\uatuipj\TipifDelito2;
use App\Models\uatuipj\VariablesPersona2;
use DB;
use Alert;
use Yajra\DataTables\DataTables;
use App\Models\Unidad;
use App\User;

class ConnectionUATController extends Controller
{
    public function index()
    {
        $denunciantes=ExtraDenunciante2::join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
                        ->join('componentes.personas', 'componentes.personas.id', '=', 'variables_persona.idPersona')
                        ->select(DB::raw('CONCAT(componentes.personas.nombres, " ", componentes.personas.primerAp," ",componentes.personas.segundoAp) AS nombre'));

        dump($denunciantes->get());
        //--------------
        $users=User::all()->pluck('nombres', 'id');
        return view('carpetas-uat')->with('users', $users);
    }

    public function carpetasUatDataTable()
    {
        $data=Carpeta2::join('cat_estado_carpeta', 'cat_estado_carpeta.id', '=', 'carpeta.idEstadoCarpeta')
                        ->where('carpeta.asignada', '=', 0)
                        ->get();

        return Datatables::of($data)->make(true);
    }
    public function carpetauat($id)
    {
        $denunciantes=ExtraDenunciante2::join('variables_persona', 'variables_persona.id', '=', 'ExtraDenunciante2.idVariablesPersona')
                        ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
                        ->select(DB::raw('CONCAT(persona.nombres, " ", persona.primerAp," ",persona.segundoAp) AS nombre'));
        dump($denunciantes);
        return ['respone'=>true,$denunciantes,$denunciandos,$delitos];
    }
    public function asiignarCarpeta($idCarpeta, $idFiscal)
    {
        //$carpeta = DB::table
    }
}
