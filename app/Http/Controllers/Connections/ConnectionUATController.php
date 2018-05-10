<?php

namespace App\Http\Controllers\Connections;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\uatuipj\Acusacion;
use App\Models\uatuipj\Carpeta;
use App\Models\uatuipj\ExtraAbogado;
use App\Models\uatuipj\ExtraAutoridad;
use App\Models\uatuipj\ExtraDenunciado;
use App\Models\uatuipj\ExtraDenunciante;
use App\Models\uatuipj\TipifDelito;
use App\Models\uatuipj\VariablesPersona;
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
