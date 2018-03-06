<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Alert;
use App\Http\Requests\StoreDenunciado;
use App\Models\Carpeta;
use App\Models\CatEscolaridad;
use App\Models\CatEstado;
use App\Models\CatEstadoCivil;
use App\Models\CatEtnia;
use App\Models\CatLengua;
use App\Models\CatNacionalidad;
use App\Models\CatOcupacion;
use App\Models\CatPuesto;
use App\Models\CatReligion;
use App\Models\Persona;
use App\Models\VariablesPersona;
use App\Models\ExtraDenunciado;
use App\Models\Notificacion;
use App\Models\Domicilio;

class DenunciadoController extends Controller
{
    public function showForm($idCarpeta)
    {
        $carpetaNueva = Carpeta::where('id', $idCarpeta)->where('idFiscal', Auth::user()->id)->get();
        if(count($carpetaNueva)>0){ 
            $denunciados = CarpetaController::getDenunciados($idCarpeta);
            $escolaridades = CatEscolaridad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estados = CatEstado::select('id', 'nombre')->orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $estadoscivil = CatEstadoCivil::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $etnias = CatEtnia::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $lenguas = CatLengua::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $nacionalidades = CatNacionalidad::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $ocupaciones = CatOcupacion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $puestos = CatPuesto::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            $religiones = CatReligion::orderBy('nombre', 'ASC')->pluck('nombre', 'id');
            return view('forms.denunciado')->with('idCarpeta', $idCarpeta)
                ->with('denunciados', $denunciados)
                ->with('escolaridades', $escolaridades)
                ->with('estados', $estados)
                ->with('estadoscivil', $estadoscivil)
                ->with('etnias', $etnias)
                ->with('lenguas', $lenguas)
                ->with('nacionalidades', $nacionalidades)
                ->with('ocupaciones', $ocupaciones)
                ->with('puestos', $puestos)
                ->with('religiones', $religiones);
        }else{
            return redirect()->route('home');
        }
    }

    public function storeDenunciado(StoreDenunciado $request){
        //dd($request->all());
        if ($request->tipoDenunciado==1){
            $persona = new Persona();
            $persona->nombres = $request->nombresQ;
            $persona->save();
            $idPersona = $persona->id;

            $domicilio = new Domicilio();
            $domicilio->save();
            $idD1 = $domicilio->id;

            $domicilio2 = new Domicilio();
            $domicilio2->save();
            $idD2 = $domicilio2->id;

            $domicilio3 = new Domicilio();
            $domicilio3->save();
            $idD3 = $domicilio3->id;

            $VariablesPersona = new VariablesPersona();
            $VariablesPersona->idCarpeta = $request->idCarpeta;
            $VariablesPersona->idPersona = $idPersona;
            $VariablesPersona->idDomicilio = $idD1;
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            $VariablesPersona->save();
            $idVariablesPersona = $VariablesPersona->id;

            $notificacion = new Notificacion();
            $notificacion->idDomicilio = $idD3;
            $notificacion->save();
            $idNotificacion = $notificacion->id;

            $ExtraDenunciado = new ExtraDenunciado();
            $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
            $ExtraDenunciado->idNotificacion = $idNotificacion;
            $ExtraDenunciado->save();
        }
        elseif ($request->tipoDenunciado==2){
            $persona = new Persona();
            $persona->nombres = $request->nombresC;
            $persona->primerAp = $request->primerApC;
            $persona->rfc = "SIN INFORMACION";
            $persona->save();
            $idPersona = $persona->id;

            $domicilio = new Domicilio();
            $domicilio->idMunicipio = $request->idMunicipioC;
            $domicilio->idLocalidad = $request->idLocalidadC;
            $domicilio->idColonia = $request->idColoniaC;
            $domicilio->calle = $request->calleC;
            $domicilio->numExterno = $request->numExternoC;
            $domicilio->numInterno = $request->numInternoC;
            $domicilio->save();
            $idD1 = $domicilio->id;

            $domicilio2 = new Domicilio();
            $domicilio2->save();
            $idD2 = $domicilio2->id;

            $domicilio3 = new Domicilio();
            $domicilio3->save();
            $idD3 = $domicilio3->id;

            $VariablesPersona = new VariablesPersona();
            $VariablesPersona->idCarpeta = $request->idCarpeta;
            $VariablesPersona->idPersona = $idPersona;
            $VariablesPersona->idDomicilio = $idD1;
            $VariablesPersona->idDomicilioTrabajo = $idD2;
            $VariablesPersona->save();
            $idVariablesPersona = $VariablesPersona->id;

            $notificacion = new Notificacion();
            $notificacion->idDomicilio = $idD3;
            $notificacion->save();
            $idNotificacion = $notificacion->id;

            $ExtraDenunciado = new ExtraDenunciado();
            $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
            $ExtraDenunciado->idNotificacion = $idNotificacion;
            $ExtraDenunciado->alias = $request->aliasC;
            $ExtraDenunciado->senasPartic = $request->senasParticC;
            $ExtraDenunciado->save();
        }
        elseif ($request->tipoDenunciado==3){
            if ($request->esEmpresa==0){
                $persona = new Persona();
                $persona->nombres = $request->nombres;
                $persona->primerAp = $request->primerAp;
                $persona->segundoAp = $request->segundoAp;
                $persona->fechaNacimiento = $request->fechaNacimiento;
                $persona->rfc = $request->rfc;
                $persona->curp = $request->curp;
                if (!is_null($request->sexo)){
                    $persona->sexo = $request->sexo;
                }
                if (!is_null($request->idNacionalidad)){
                    $persona->idNacionalidad = $request->idNacionalidad;
                }
                if (!is_null($request->idEtnia)){
                    $persona->idEtnia = $request->idEtnia;
                }
                if (!is_null($request->idLengua)){
                    $persona->idLengua = $request->idLengua;
                }
                if (!is_null($request->idMunicipioOrigen)){
                    $persona->idMunicipioOrigen = $request->idMunicipioOrigen;
                }
                $persona->esEmpresa = 0;
                $persona->save();
                $idPersona = $persona->id;

                $domicilio = new Domicilio();
                if (!is_null($request->idMunicipio)){
                    $domicilio->idMunicipio = $request->idMunicipio;
                }
                if (!is_null($request->idLocalidad)){
                    $domicilio->idLocalidad = $request->idLocalidad;
                }
                if (!is_null($request->idColonia)){
                    $domicilio->idColonia = $request->idColonia;
                }
                if (!is_null($request->calle)){
                    $domicilio->calle = $request->calle;
                }
                if (!is_null($request->numExterno)){
                    $domicilio->numExterno = $request->numExterno;
                }
                if (!is_null($request->numInterno)){
                    $domicilio->numInterno = $request->numInterno;
                }
                $domicilio->save();
                $idD1 = $domicilio->id;

                $domicilio2 = new Domicilio();
                if (!is_null($request->idMunicipio2)){
                    $domicilio2->idMunicipio = $request->idMunicipio2;
                }
                if (!is_null($request->idLocalidad2)){
                    $domicilio2->idLocalidad = $request->idLocalidad2;
                }
                if (!is_null($request->idColonia2)){
                    $domicilio2->idColonia = $request->idColonia2;
                }
                if (!is_null($request->calle2)){
                    $domicilio2->calle = $request->calle2;
                }
                if (!is_null($request->numExterno2)){
                    $domicilio2->numExterno = $request->numExterno2;
                }
                if (!is_null($request->numInterno2)){
                    $domicilio2->numInterno = $request->numInterno2;
                }
                $domicilio2->save();
                $idD2 = $domicilio2->id;

                $domicilio3 = new Domicilio();
                if (!is_null($request->idMunicipio3)){
                    $domicilio3->idMunicipio = $request->idMunicipio3;
                }
                if (!is_null($request->idLocalidad3)){
                    $domicilio3->idLocalidad = $request->idLocalidad3;
                }
                if (!is_null($request->idColonia3)){
                    $domicilio3->idColonia = $request->idColonia3;
                }
                if (!is_null($request->calle3)){
                    $domicilio3->calle = $request->calle3;
                }
                if (!is_null($request->numExterno3)){
                    $domicilio3->numExterno = $request->numExterno3;
                }
                if (!is_null($request->numInterno3)){
                    $domicilio3->numInterno = $request->numInterno3;
                }
                $domicilio3->save();
                $idD3 = $domicilio3->id;

                $notificacion = new Notificacion();
                $notificacion->idDomicilio = $idD3;
                $notificacion->correo = $request->correo;
                $notificacion->telefono = $request->telefono;
                $notificacion->fax = $request->fax;
                $notificacion->save();
                $idNotificacion = $notificacion->id;

                $VariablesPersona = new VariablesPersona();
                $VariablesPersona->idCarpeta = $request->idCarpeta;
                $VariablesPersona->idPersona = $idPersona;
                $VariablesPersona->edad = $request->edad;
                if (!is_null($request->telefono)){
                    $VariablesPersona->telefono = $request->telefono;
                }
                if (!is_null($request->motivoEstancia)){
                    $VariablesPersona->motivoEstancia = $request->motivoEstancia;
                }
                if (!is_null($request->idOcupacion)){
                    $VariablesPersona->idOcupacion = $request->idOcupacion;
                }
                if (!is_null($request->idEstadoCivil)){
                    $VariablesPersona->idEstadoCivil = $request->idEstadoCivil;
                }
                if (!is_null($request->idEscolaridad)){
                    $VariablesPersona->idEscolaridad = $request->idEscolaridad;
                }
                if (!is_null($request->idReligion)){
                    $VariablesPersona->idReligion = $request->idReligion;
                }
                $VariablesPersona->idDomicilio = $idD1;
                if (!is_null($request->docIdentificacion)){
                    $VariablesPersona->docIdentificacion = $request->docIdentificacion;
                }
                if (!is_null($request->numDocIdentificacion)){
                    $VariablesPersona->numDocIdentificacion = $request->numDocIdentificacion;
                }
                if (!is_null($request->lugarTrabajo)){
                    $VariablesPersona->lugarTrabajo = $request->lugarTrabajo;
                }
                $VariablesPersona->idDomicilioTrabajo = $idD2;
                if (!is_null($request->telefonoTrabajo)){
                    $VariablesPersona->telefonoTrabajo = $request->telefonoTrabajo;
                }
                $VariablesPersona->representanteLegal = "NO APLICA";
                $VariablesPersona->save();
                $idVariablesPersona = $VariablesPersona->id;

                $ExtraDenunciado = new ExtraDenunciado();
                $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
                $ExtraDenunciado->idNotificacion = $idNotificacion;
                if (!is_null($request->idPuesto)){
                    $ExtraDenunciado->idPuesto = $request->idPuesto;
                }
                if (!is_null($request->alias)){
                    $ExtraDenunciado->alias = $request->alias;
                }
                if (!is_null($request->senasPartic)){
                    $ExtraDenunciado->senasPartic = $request->senasPartic;
                }
                if (!is_null($request->ingreso)){
                    $ExtraDenunciado->ingreso = $request->ingreso;
                }
                if (!is_null($request->periodoIngreso)){
                    $ExtraDenunciado->periodoIngreso = $request->periodoIngreso;
                }
                if (!is_null($request->residenciaAnterior)){
                    $ExtraDenunciado->residenciaAnterior = $request->residenciaAnterior;
                }
                $ExtraDenunciado->idAbogado = null;
                if (!is_null($request->personasBajoSuGuarda)){
                    $ExtraDenunciado->personasBajoSuGuarda = $request->personasBajoSuGuarda;
                }
                if ($request->esperseguidoPenalmente==1){
                    $ExtraDenunciado->perseguidoPenalmente = 1;
                }
                if (!is_null($request->vestimenta)){
                    $ExtraDenunciado->vestimenta = $request->vestimenta;
                }
                if (!is_null($request->narracion)){
                    $ExtraDenunciado->narracion = $request->narracion;
                }
                $ExtraDenunciado->save();
            }elseif($request->esEmpresa==1){
                $persona = new Persona();
                $persona->nombres = $request->nombres2;
                $persona->rfc = $request->rfc2;
                $persona->esEmpresa = 1;
                $persona->save();
                $idPersona = $persona->id;

                $domicilio = new Domicilio();
                if (!is_null($request->idMunicipio)){
                    $domicilio->idMunicipio = $request->idMunicipio;
                }
                if (!is_null($request->idLocalidad)){
                    $domicilio->idLocalidad = $request->idLocalidad;
                }
                if (!is_null($request->idColonia)){
                    $domicilio->idColonia = $request->idColonia;
                }
                if (!is_null($request->calle)){
                    $domicilio->calle = $request->calle;
                }
                if (!is_null($request->numExterno)){
                    $domicilio->numExterno = $request->numExterno;
                }
                if (!is_null($request->numInterno)){
                    $domicilio->numInterno = $request->numInterno;
                }
                $domicilio->save();
                $idD1 = $domicilio->id;

                $domicilio3 = new Domicilio();
                if (!is_null($request->idMunicipio3)){
                    $domicilio3->idMunicipio = $request->idMunicipio3;
                }
                if (!is_null($request->idLocalidad3)){
                    $domicilio3->idLocalidad = $request->idLocalidad3;
                }
                if (!is_null($request->idColonia3)){
                    $domicilio3->idColonia = $request->idColonia3;
                }
                if (!is_null($request->calle3)){
                    $domicilio3->calle = $request->calle3;
                }
                if (!is_null($request->numExterno3)){
                    $domicilio3->numExterno = $request->numExterno3;
                }
                if (!is_null($request->numInterno3)){
                    $domicilio3->numInterno = $request->numInterno3;
                }
                $domicilio3->save();
                $idD3 = $domicilio3->id;

                $notificacion = new Notificacion();
                $notificacion->idDomicilio = $idD3;
                $notificacion->correo = $request->correo;
                $notificacion->telefono = $request->telefonoN;
                $notificacion->fax = $request->fax;
                $notificacion->save();
                $idNotificacion = $notificacion->id;

                $VariablesPersona = new VariablesPersona();
                $VariablesPersona->idCarpeta = $request->idCarpeta;
                $VariablesPersona->idPersona = $idPersona;
                $VariablesPersona->idDomicilio = $idD1;
                $VariablesPersona->idDomicilioTrabajo = $idD1;
                $VariablesPersona->representanteLegal = $request->representanteLegal;
                $VariablesPersona->save();
                $idVariablesPersona = $VariablesPersona->id;

                $ExtraDenunciado = new ExtraDenunciado();
                $ExtraDenunciado->idVariablesPersona = $idVariablesPersona;
                $ExtraDenunciado->idNotificacion = $idNotificacion;
                $ExtraDenunciado->senasPartic = $request->senasPartic;
                $ExtraDenunciado->narracion = $request->narracion;
                $ExtraDenunciado->save();
            }      
        }
        /*
        Flash::success("Se ha registrado ".$user->name." de forma satisfactoria")->important();
        //Para mostrar modal
        //flash()->overlay('Se ha registrado '.$user->name.' de forma satisfactoria!', 'Hecho');
        */
        Alert::success('Denunciado registrado con éxito', 'Hecho')->persistent("Aceptar");
        //return redirect()->route('carpeta', $request->idCarpeta);
        return redirect()->route('new.denunciado', $request->idCarpeta);
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
