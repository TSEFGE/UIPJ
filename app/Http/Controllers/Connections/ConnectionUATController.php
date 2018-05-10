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

class ConnectionUATController extends Controller
{
    public function index()
    {
        return view('carpetas-uat');
    }

    public function carpetasUatDataTable()
    {
    }
    public function asiignarCarpeta($idCarpeta, $idFiscal)
    {
    }
}
