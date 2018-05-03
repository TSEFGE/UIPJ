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

class AbogadoController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if (count($carpetaNueva) > 0) {
            $numCarpeta    = $carpetaNueva[0]->numCarpeta;
            $abogados      = CarpetaController::getAbogados($idCarpeta);
            $estados       = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $municipiosVer = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil  = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            return view('forms.abogado')->with('idCarpeta', $idCarpeta)
                ->with('numCarpeta', $numCarpeta)
                ->with('abogados', $abogados)
                ->with('estados', $estados)
                ->with('municipiosVer', $municipiosVer)
                ->with('estadoscivil', $estadoscivil);
        } else {
            return redirect()->route('home');
        }
    }

    public function storeAbogado(StoreAbogado $request)
    {
        $persona = Persona::where('curp', $request->curp)->get();
        if ($persona->isNotEmpty()) {
            Alert::error('Ya existe una persona registrada con ese CURP.', 'Error')->persistent("Aceptar");
            return back()->withInput();
        } else {
            //dd($request->all());
            $persona                    = new Persona();
            $persona->nombres           = $request->nombres;
            $persona->primerAp          = $request->primerAp;
            $persona->segundoAp         = $request->segundoAp;
            $fechaAux                   = $request->fechaNacimiento;
            $fechaNacimiento            = date("Y-m-d", strtotime($fechaAux));
            $persona->fechaNacimiento   = $fechaNacimiento;
            $persona->rfc               = $request->rfc . $request->homo;
            $persona->sexo              = $request->sexo;
            $persona->idNacionalidad    = 1;
            $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
            $persona->curp              = $request->curp;
            $persona->save();

            if ($request->rfcAux != $request->rfc . $request->homo) {
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo Abogado.', 'idFilaAccion' => $persona->id]);
            }
            $idPersona = $persona->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona física de tipo abogado.', 'idFilaAccion' => $idPersona]);

            $domicilio2              = new Domicilio();
            $domicilio2->idMunicipio = $request->idMunicipio2;
            $domicilio2->idLocalidad = $request->idLocalidad2;
            $domicilio2->idColonia   = $request->idColonia2;
            $domicilio2->calle       = $request->calle2;
            $domicilio2->numExterno  = $request->numExterno2;
            $domicilio2->numInterno  = $request->numInterno2;
            $domicilio2->save();
            $idD2 = $domicilio2->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo domicilio de persona física de tipo abogado.', 'idFilaAccion' => $idD2]);

            $VariablesPersona                       = new VariablesPersona();
            $VariablesPersona->idCarpeta            = $request->idCarpeta;
            $VariablesPersona->idPersona            = $idPersona;
            $VariablesPersona->telefono             = $request->telefono;
            $VariablesPersona->idEstadoCivil        = $request->idEstadoCivil;
            $VariablesPersona->lugarTrabajo         = $request->lugarTrabajo;
            $VariablesPersona->idDomicilioTrabajo   = $idD2;
            $VariablesPersona->telefonoTrabajo      = $request->telefonoTrabajo;
            $fecha                                  = Carbon::parse($request->fechaNacimiento);
            $VariablesPersona->edad                 = Carbon::createFromDate($fecha->year, $fecha->month, $fecha->day)->age;
            $VariablesPersona->motivoEstancia       = "NO APLICA";
            $VariablesPersona->idOcupacion          = 2469;
            $VariablesPersona->idEscolaridad        = 8;
            $VariablesPersona->docIdentificacion    = "NO APLICA";
            $VariablesPersona->numDocIdentificacion = "NO APLICA";
            $VariablesPersona->representanteLegal   = "NO APLICA";
            $VariablesPersona->save();
            $idVariablesPersona = $VariablesPersona->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'insert', 'descripcion' => 'Se han registrado nuevas variables de persona física de tipo abogado.', 'idFilaAccion' => $idVariablesPersona]);

            $ExtraAbogado                     = new ExtraAbogado();
            $ExtraAbogado->idVariablesPersona = $idVariablesPersona;
            $ExtraAbogado->cedulaProf         = $request->cedulaProf;
            $ExtraAbogado->sector             = $request->sector;
            $ExtraAbogado->correo             = $request->correo;
            $ExtraAbogado->tipo               = $request->tipo;
            $ExtraAbogado->save();
            $idAbogado = $ExtraAbogado->id;

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_abogado', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un nuevo extra abogado de persona física de tipo abogado.', 'idFilaAccion' => $idVariablesPersona]);

            /*
            Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
            //Para mostrar modal
            //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
             */
            Alert::success('Abogado registrado con éxito', 'Hecho')->persistent("Aceptar");
            //return redirect()->route('carpeta', $request->idCarpeta);
            return redirect()->route('new.abogado', $request->idCarpeta);
        }
    }

    public function showForm2($idCarpeta)
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

    public function edit($idCarpeta, $id)
    {
        $personales = DB::table('extra_abogado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('domicilio', 'domicilio.idMunicipio', '=', 'persona.idMunicipioOrigen')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
            ->select('persona.id as idPersona', 'variables_persona.id as idVariablesPersona', 'extra_abogado.id as idExtraAbogado', 'domicilio.id as idDomicilio', 'persona.nombres as nombres', 'persona.primerAp as primerAp', 'persona.segundoAp as segundoAp', 'persona.fechaNacimiento as fechaNacimiento', 'persona.rfc as rfc', 'persona.sexo as sexo', 'persona.curp as curp', 'persona.idNacionalidad as idNacionalidad', 'persona.idMunicipioOrigen as idMunicipioOrigen', 'cat_estado.id as idEstado', 'variables_persona.idEstadoCivil as idEstadoCivil', 'variables_persona.telefono as telefono')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)->where('extra_abogado.id', '=', $id)
            ->orderBy('persona.nombres', 'ASC')
            ->get()->first();

        $direccionTrab = DB::table('extra_abogado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
            ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilioTrabajo')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
            ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
            ->select('variables_persona.idDomicilioTrabajo as idDomicilioTrabajo', 'variables_persona.lugarTrabajo', 'variables_persona.telefonoTrabajo', 'cat_estado.id', 'domicilio.idMunicipio', 'domicilio.idLocalidad', 'domicilio.idColonia', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)
            ->where('extra_abogado.id', '=', $id)
            ->get()->first();

        $info = DB::table('extra_abogado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_abogado.idVariablesPersona')
            ->select('variables_persona.id as idVariablesPersona', 'extra_abogado.id as idExtraAbogado', 'extra_abogado.cedulaProf', 'extra_abogado.sector', 'extra_abogado.correo', 'extra_abogado.tipo')
            ->where('variables_persona.idCarpeta', '=', $idCarpeta)->where('extra_abogado.id', '=', $id)
            ->get()->first();

        $estados       = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $municipiosVer = CatMunicipio::select('id', 'nombre')->where('idEstado', 30)->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
        $estadoscivil  = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');

        return view('edit-forms.abogado')
            ->with('idCarpeta', $idCarpeta)
            ->with('id', $id)
            ->with('estados', $estados)
            ->with('municipiosVer', $municipiosVer)
            ->with('estadoscivil', $estadoscivil)
            ->with('personales', $personales)
            ->with('info', $info)
            ->with('direccionTrab', $direccionTrab);
    }

    public function update(Request $request, $id)
    {
        $carpetaNueva = Carpeta::where('id', $request->idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        $var          = ExtraAbogado::where('id', $id)->get();
        if ($carpetaNueva->isEmpty() && $var->isEmpty()) {
            return redirect()->route('home');
        }

        $persona = Persona::where('curp', $request->curp)->get();
        if ($persona->isNotEmpty()) {
            Alert::error('Ya existe una persona registrada con ese CURP.', 'Error')->persistent("Aceptar");
            return back()->withInput();
        } else {
            //dd($request->all());
            $persona                  = Persona::find($request->idPersona);
            $persona->nombres         = $request->nombres;
            $persona->primerAp        = $request->primerAp;
            $persona->segundoAp       = $request->segundoAp;
            $fechaAux                 = $request->fechaNacimiento;
            $fechaNacimiento          = date("Y-m-d", strtotime($fechaAux));
            $persona->fechaNacimiento = $fechaNacimiento;
            $persona->rfc             = $request->rfc . $request->homo;
            if ($request->filled('sexo')) {
                $persona->sexo = $request->sexo;
            }
            if ($request->filled('idNacionalidad')) {
                $persona->idNacionalidad = $request->idNacionalidad;
            }
            if ($request->filled('idMunicipioOrigen')) {
                $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
            }
            $persona->curp = $request->curp;

            if ($request->rfcAux != $request->rfc . $request->homo) {
                Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado un RFC diferente al generado por el sistema para una persona física de tipo Abogado.', 'idFilaAccion' => $persona->id]);
            }
            $idPersona = $persona->id;
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'persona', 'accion' => 'insert', 'descripcion' => 'Se ha registrado una nueva persona física de tipo abogado.', 'idFilaAccion' => $idPersona]);
            $persona->save();

            $domicilio2 = Domicilio::find($request->idDomicilioTrabajo);
            if ($request->filled('idMunicipio2')) {
                $domicilio2->idMunicipio = $request->idMunicipio2;
            }
            if ($request->filled('idLocalidad2')) {
                $domicilio2->idLocalidad = $request->idLocalidad2;
            }
            if ($request->filled('idColonia2')) {
                $domicilio2->idColonia = $request->idColonia2;
            }
            if ($request->filled('calle2')) {
                $domicilio2->calle = $request->calle2;
            }
            if ($request->filled('numExterno2')) {
                $domicilio2->numExterno = $request->numExterno2;
            }
            if ($request->filled('numInterno2')) {
                $domicilio2->numInterno = $request->numInterno2;
            }
            $domicilio2->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'domicilio', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un domicilio de trabajo para persona física de tipo Abogado.', 'idFilaAccion' => $domicilio2->id]);
            $idD2 = $domicilio2->id;

            $VariablesPersona            = VariablesPersona::find($request->idVariablesPersona);
            $VariablesPersona->idCarpeta = $request->idCarpeta;
            $VariablesPersona->idPersona = $idPersona;
            if ($request->filled('telefono')) {
                $VariablesPersona->telefono = $request->telefono;
            }

            $VariablesPersona->motivoEstancia = "NO APLICA";

            if ($request->filled('idOcupacion')) {
                $VariablesPersona->idOcupacion = 2469;
            }
            if ($request->filled('idEstadoCivil')) {
                $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
            }
            if ($request->filled('idEscolaridad')) {
                $VariablesPersona->idEscolaridad = 8;
            }
            $VariablesPersona->docIdentificacion    = "NO APLICA";
            $VariablesPersona->numDocIdentificacion = "NO APLICA";
            if ($request->filled('lugarTrabajo')) {
                $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
            }
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            if ($request->filled('telefonoTrabajo')) {
                $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;
            }
            $VariablesPersona->representanteLegal = "NO APLICA";
            $VariablesPersona->save();
            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'variables_persona', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un variables persona de persona física de tipo Abogado.', 'idFilaAccion' => $VariablesPersona->id]);
            $idVariablesPersona = $VariablesPersona->id;

            $ExtraAbogado                     = ExtraAbogado::find($request->idExtraAbogado);
            $ExtraAbogado->idVariablesPersona = $idVariablesPersona;
            $ExtraAbogado->cedulaProf         = $request->cedulaProf;
            $ExtraAbogado->sector             = $request->sector;
            $ExtraAbogado->correo             = $request->correo;
            $ExtraAbogado->tipo               = $request->tipo;
            $ExtraAbogado->save();

            Bitacora::create(['idUsuario' => Auth::user()->id, 'tabla' => 'extra_abogado', 'accion' => 'update', 'descripcion' => 'Se ha actualizado un  extra abogado.', 'idFilaAccion' => $idVariablesPersona]);
        }
        Alert::success('Abogado actualizado con éxito', 'Hecho')->persistent("Aceptar");
        return redirect()->route('carpeta', $request->idCarpeta);

    }

}
