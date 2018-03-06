<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class DocxMakerController extends Controller
{
	public function __construct(){
        Carbon::setLocale('es');
    }

    public function getConstanciaHechos($idDenunciante)
	{
		$info = DB::table('extra_denunciante')
			->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
			->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
			->join('carpeta', 'carpeta.id', '=', 'variables_persona.idCarpeta' )
            ->join('unidad', 'unidad.id', '=', 'carpeta.idUnidad')
            ->join('users', 'users.id', '=', 'carpeta.idFiscal')
            ->select('extra_denunciante.narracion', 'persona.nombres as nombresD', 'persona.primerAp as primerApD', 'persona.segundoAp as segundoApD', 'carpeta.id', 'carpeta.numCarpeta', 'carpeta.fechaInicio', 'unidad.direccion', 'unidad.telefono', 'unidad.distrito', 'unidad.municipio', 'users.nombres', 'users.primerAp', 'users.segundoAp', 'users.numFiscal')
            ->where('extra_denunciante.id', '=', $idDenunciante)
            ->get();
        //dd($info);
        $info=$info[0];

		$fechaInicio = new Carbon($info->fechaInicio);
        $distritoLetra = DocxMakerController::getDistritoLetra($info->distrito);
		$fechaHoy = new Carbon();
		$mesLetra = DocxMakerController::getMesLetra($fechaHoy->month);
		$fechaCompleta = mb_strtoupper($fechaHoy->day." DE ".$mesLetra." DE ".$fechaHoy->year);
		$nombreFiscal = mb_strtoupper($info->nombres." ".$info->primerAp." ".$info->segundoAp);
		$diaLetra = mb_strtolower(DocxMakerController::getDiaLetra($fechaHoy->day));
		$mesLetra = mb_strtolower($mesLetra);

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templates/ConstanciaDeHechos.docx');
		$templateProcessor->setValue('distrito', $info->distrito);
		$templateProcessor->setValue('distritoLetra', $distritoLetra);
		$templateProcessor->setValue('numFiscal', $info->numFiscal);
		$templateProcessor->setValue('numOficio', 0);
		$templateProcessor->setValue('anio', $fechaHoy->year);
		$templateProcessor->setValue('numCarpeta', $info->numCarpeta);
		$templateProcessor->setValue('anioCarpeta', $fechaInicio->year);
		$templateProcessor->setValue('municipioUnidad', $info->municipio);
		$templateProcessor->setValue('municipioUnidadM', mb_strtoupper($info->municipio));
		$templateProcessor->setValue('fechaCompleta', $fechaCompleta);
		$templateProcessor->setValue('nombreFiscal', $nombreFiscal);
		$templateProcessor->setValue('diaInicio', $fechaInicio->day);
		$templateProcessor->setValue('mesInicio', $mesLetra);
		$templateProcessor->setValue('anioInicio', $fechaInicio->year);
		$templateProcessor->setValue('nombreDenunciante', $info->nombresD." ".$info->primerApD." ".$info->segundoApD);
		$templateProcessor->setValue('narracion', $info->narracion);
		$templateProcessor->setValue('diaLetra', $diaLetra);
		$templateProcessor->setValue('mesLetra', $mesLetra);
		$templateProcessor->setValue('direccion', $info->direccion);
		$templateProcessor->setValue('telefono', $info->telefono);

		$templateProcessor->saveAs('../storage/oficios/ConstanciaDeHechos'.$info->id.'.docx');
		return response()->download('../storage/oficios/ConstanciaDeHechos'.$info->id.'.docx');
	}

	public static function getFormatoDenuncia($idAcusacion){
		$carpeta = DB::table('acusacion')
			->join('carpeta', 'carpeta.id', '=', 'acusacion.idCarpeta')
			->join('users', 'users.id', '=', 'carpeta.idFiscal')
			->join('unidad', 'unidad.id', '=', 'users.idUnidad')
			->select('carpeta.numCarpeta', 'carpeta.fechaInicio', 'carpeta.conDetenido', 'users.nombres', 'users.primerAp', 'users.segundoAp', 'users.numFiscal', 'unidad.direccion', 'unidad.telefono', 'unidad.distrito', 'unidad.municipio')
			->where('acusacion.id', '=', $idAcusacion)
			->get();

		$delito = DB::table('acusacion')
			->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
			->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
			->join('cat_modalidad', 'cat_modalidad.id', '=', 'tipif_delito.idModalidad')
			->join('domicilio', 'domicilio.id', '=', 'tipif_delito.idDomicilio')
			->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
			->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
			->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
			->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
			->select('tipif_delito.conViolencia', 'tipif_delito.formaComision', 'tipif_delito.consumacion', 'tipif_delito.fecha', 'tipif_delito.hora', 'tipif_delito.entreCalle', 'tipif_delito.yCalle', 'tipif_delito.puntoReferencia', 'cat_delito.nombre as delito', 'cat_modalidad.nombre as modalidad', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno', 'cat_municipio.nombre as municipio', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal as cp')
			->where('acusacion.id', '=', $idAcusacion)
			->get();

		$denunciante = DB::table('acusacion')
            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('notificacion', 'notificacion.id', '=', 'extra_denunciante.idNotificacion')
            ->join('domicilio as dirN', 'dirN.id', '=', 'notificacion.idDomicilio')
			->join('cat_municipio as munN', 'munN.id', '=', 'dirN.idMunicipio')
			->join('cat_estado as estN', 'estN.id', '=', 'munN.idEstado')
			->join('cat_localidad as locN', 'locN.id', '=', 'dirN.idLocalidad')
			->join('cat_colonia as colN', 'colN.id', '=', 'dirN.idColonia')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('cat_ocupacion', 'cat_ocupacion.id', '=', 'variables_persona.idOcupacion')
            ->join('cat_estado_civil', 'cat_estado_civil.id', '=', 'variables_persona.idEstadoCivil')
            ->join('cat_escolaridad', 'cat_escolaridad.id', '=', 'variables_persona.idEscolaridad')
            ->join('cat_religion', 'cat_religion.id', '=', 'variables_persona.idReligion')
            ->join('domicilio as dirD', 'dirD.id', '=', 'variables_persona.idDomicilio')
			->join('cat_municipio as munD', 'munD.id', '=', 'dirD.idMunicipio')
			->join('cat_estado as estD', 'estD.id', '=', 'munD.idEstado')
			->join('cat_localidad as locD', 'locD.id', '=', 'dirD.idLocalidad')
			->join('cat_colonia as colD', 'colD.id', '=', 'dirD.idColonia')
			->join('domicilio as dirT', 'dirT.id', '=', 'variables_persona.idDomicilioTrabajo')
			->join('cat_municipio as munT', 'munT.id', '=', 'dirT.idMunicipio')
			->join('cat_estado as estT', 'estT.id', '=', 'munT.idEstado')
			->join('cat_localidad as locT', 'locT.id', '=', 'dirT.idLocalidad')
			->join('cat_colonia as colT', 'colT.id', '=', 'dirT.idColonia')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('cat_municipio', 'cat_municipio.id', '=', 'persona.idMunicipioOrigen')
            ->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
            ->select('extra_denunciante.conoceAlDenunciado', 'extra_denunciante.narracion', 'notificacion.correo', 'notificacion.telefono as telefonoN', 'notificacion.fax', 'munN.nombre as municipioN', 'estN.nombre as estadoN', 'locN.nombre as localidadN', 'colN.nombre as coloniaN', 'colN.codigoPostal as cpN', 'dirN.calle as calleN', 'dirN.numExterno as numExternoN', 'dirN.numInterno as numInternoN', 'variables_persona.edad', 'variables_persona.telefono', 'variables_persona.motivoEstancia', 'variables_persona.docIdentificacion', 'variables_persona.numDocIdentificacion', 'variables_persona.lugarTrabajo', 'variables_persona.telefonoTrabajo', 'cat_ocupacion.nombre as ocupacion', 'cat_estado_civil.nombre as estadoCivil', 'cat_escolaridad.nombre as escolaridad', 'cat_religion.nombre as religion', 'munD.nombre as municipioD', 'estD.nombre as estadoD', 'locD.nombre as localidadD', 'colD.nombre as coloniaD', 'colD.codigoPostal as cpD', 'dirD.calle as calleD', 'dirD.numExterno as numExternoD', 'dirD.numInterno as numInternoD', 'munT.nombre as municipioT', 'estT.nombre as estadoT', 'locT.nombre as localidadT', 'colT.nombre as coloniaT', 'colT.codigoPostal as cpT', 'dirT.calle as calleT', 'dirT.numExterno as numExternoT', 'dirT.numInterno as numInternoT', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'persona.fechaNacimiento', 'persona.rfc', 'persona.curp', 'persona.sexo', 'cat_municipio.nombre as municipioOrigen', 'cat_estado.nombre as estadoOrigen', 'persona.esEmpresa')
            ->where('acusacion.id', '=', $idAcusacion)
            ->get();

            $denunciado = DB::table('acusacion')
            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilio')
			->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
			->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
			->join('cat_localidad', 'cat_localidad.id', '=', 'domicilio.idLocalidad')
			->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->select('extra_denunciado.senasPartic', 'extra_denunciado.vestimenta', 'variables_persona.edad', 'domicilio.calle', 'domicilio.numExterno', 'domicilio.numInterno',  'cat_municipio.nombre as municipio', 'cat_estado.nombre as estado', 'cat_localidad.nombre as localidad', 'cat_colonia.nombre as colonia', 'cat_colonia.codigoPostal as cp', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp')
            ->where('acusacion.id', '=', $idAcusacion)
            ->get();

		$carpeta = $carpeta[0];
		$delito = $delito[0];
		$denunciante = $denunciante[0];
		$denunciado = $denunciado[0];
        
        $distritoLetra = DocxMakerController::getDistritoLetra($carpeta->distrito);
		$fechaInicio = new Carbon($carpeta->fechaInicio);
		$fechaNacimiento = new Carbon($denunciante->fechaNacimiento);
		$fechaDelito = new Carbon($delito->fecha);
		$dirDenunciante = $denunciante->calleD." #".$denunciante->numExternoD.", COLONIA ".$denunciante->coloniaD.", ".$denunciante->municipioD.", ".$denunciante->estadoD;
		$dirTrabajo = $denunciante->calleT." #".$denunciante->numExternoT.", COLONIA ".$denunciante->coloniaT.", ".$denunciante->municipioT.", ".$denunciante->estadoT;
		$dirNotif = $denunciante->calleN." #".$denunciante->numExternoN.", COLONIA ".$denunciante->coloniaN.", ".$denunciante->municipioN.", ".$denunciante->estadoN;
		$dirDelito = $delito->calle." #".$delito->numExterno.", COLONIA ".$delito->colonia.", ".$delito->municipio.", ".$delito->estado;
		$dirDenunciado = $denunciado->calle." #".$denunciado->numExterno.", COLONIA ".$denunciado->colonia.", ".$denunciado->municipio.", ".$denunciado->estado;
		if($denunciante->esEmpresa==0){
			$esEmpresa = "NO";
		}else{
			$esEmpresa = "SI";
		}
		if($denunciante->conoceAlDenunciado==0){
			$conoceAlDen = "NO";
		}else{
			$conoceAlDen = "SI";
		}
		if($delito->conViolencia==0){
			$conViolencia = "NO";
		}else{
			$conViolencia = "SI";
		}
		if($carpeta->conDetenido==0){
			$conDetenido = "NO";
		}else{
			$conDetenido = "SI";
		}

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templates/FormatoDenuncia.docx');
		
		$templateProcessor->setValue('nombreFiscal', mb_strtoupper($carpeta->nombres." ".$carpeta->primerAp." ".$carpeta->segundoAp));
		$templateProcessor->setValue('distrito', $carpeta->distrito);
		$templateProcessor->setValue('distritoLetra', $distritoLetra);
		$templateProcessor->setValue('municipioUnidadM', mb_strtoupper($carpeta->municipio));
		$templateProcessor->setValue('dirUnidad', $carpeta->direccion);
		$templateProcessor->setValue('telUnidad', $carpeta->telefono);
		$templateProcessor->setValue('numCarpeta', $carpeta->numCarpeta);
		$templateProcessor->setValue('numFiscal', $carpeta->numFiscal);
		$templateProcessor->setValue('fechaInicio', $fechaInicio->format('d/m/Y'));
		$templateProcessor->setValue('nombreDenunciante', $denunciante->nombres." ".$denunciante->primerAp." ".$denunciante->segundoAp);
		$templateProcessor->setValue('calidadJuridica', "DENUNCIANTE");
		$templateProcessor->setValue('escolaridad', $denunciante->escolaridad);
		$templateProcessor->setValue('ocupacion', $denunciante->ocupacion);
		$templateProcessor->setValue('telefono', $denunciante->telefono);
		$templateProcessor->setValue('domicilio', $dirDenunciante);
		$templateProcessor->setValue('esEmpresa', $esEmpresa);
		$templateProcessor->setValue('religion', $denunciante->religion);
		$templateProcessor->setValue('rfc', $denunciante->rfc);
		$templateProcessor->setValue('curp', $denunciante->curp);
		$templateProcessor->setValue('municipioOrigen', $denunciante->municipioOrigen);
		$templateProcessor->setValue('estadoOrigen', $denunciante->estadoOrigen);
		$templateProcessor->setValue('fechaNacimiento',  $fechaNacimiento->format('d/m/Y'));
		$templateProcessor->setValue('edad', $denunciante->edad);
		$templateProcessor->setValue('sexo', $denunciante->sexo);
		$templateProcessor->setValue('docIdentificacion', $denunciante->docIdentificacion);
		$templateProcessor->setValue('numDocIdentificacion', $denunciante->numDocIdentificacion);
		$templateProcessor->setValue('estadoCivil', $denunciante->estadoCivil);
		$templateProcessor->setValue('motivoEstancia', $denunciante->motivoEstancia);
		$templateProcessor->setValue('lugarTrabajo', $denunciante->lugarTrabajo);
		$templateProcessor->setValue('telefonoTrabajo', $denunciante->telefonoTrabajo);
		$templateProcessor->setValue('dirTrabajo', $dirTrabajo);
		$templateProcessor->setValue('dirNotif', $dirNotif);
		$templateProcessor->setValue('correo', $denunciante->correo);
		$templateProcessor->setValue('telefonoN', $denunciante->telefonoN);
		$templateProcessor->setValue('fax', $denunciante->fax);
		$templateProcessor->setValue('dirDelito', $dirDelito);
		$templateProcessor->setValue('puntoReferencia', $delito->puntoReferencia);
		$templateProcessor->setValue('coloniaDelito', $delito->colonia);
		$templateProcessor->setValue('fecha', $fechaDelito->format('d/m/Y'));
		$templateProcessor->setValue('hora', $delito->hora);
		$templateProcessor->setValue('entreCalle', $delito->entreCalle);
		$templateProcessor->setValue('yCalle', $delito->yCalle);
		$templateProcessor->setValue('delito', $delito->delito);
		$templateProcessor->setValue('conViolencia', $conViolencia);
		$templateProcessor->setValue('conDetenido', $conDetenido);
		$templateProcessor->setValue('modalidad', $delito->modalidad);
		$templateProcessor->setValue('formaComision', $delito->formaComision);
		$templateProcessor->setValue('consumacion', $delito->consumacion);
		$templateProcessor->setValue('nombreDen', $denunciado->nombres." ".$denunciado->primerAp." ".$denunciado->segundoAp);
		$templateProcessor->setValue('edadDen', $denunciado->edad);
		$templateProcessor->setValue('dirDen', $dirDenunciado);
		$templateProcessor->setValue('vestimenta', $denunciado->vestimenta);
		$templateProcessor->setValue('conoceAlDen', $conoceAlDen);
		$templateProcessor->setValue('senasPartic', $denunciado->senasPartic);
		$templateProcessor->setValue('narracion', $denunciante->narracion);

		$templateProcessor->saveAs('../storage/oficios/FormatoDenuncia'.$idAcusacion.'.docx');
		return response()->download('../storage/oficios/FormatoDenuncia'.$idAcusacion.'.docx');

	}

	public static function getFormatoColaboracionPm(Request $request){
		$carpeta = DB::table('acusacion')
			->join('carpeta', 'carpeta.id', '=', 'acusacion.idCarpeta')
			->join('users', 'users.id', '=', 'carpeta.idFiscal')
			->join('unidad', 'unidad.id', '=', 'users.idUnidad')
			->select('carpeta.numCarpeta', 'carpeta.fechaInicio', 'carpeta.conDetenido', 'users.nombres', 'users.primerAp', 'users.segundoAp', 'users.numFiscal', 'unidad.direccion', 'unidad.telefono', 'unidad.distrito', 'unidad.municipio')
			->where('acusacion.id', '=', $request->radioAcusacion)
			->get();
		$acusacion = DB::table('acusacion')
            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilio')
			->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
			->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
			->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona as var', 'var.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona as per', 'per.id', '=', 'var.idPersona')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->select('acusacion.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'variables_persona.telefono', 'domicilio.calle', 'domicilio.numExterno', 'cat_estado.nombre as estado', 'cat_municipio.nombre as municipio', 'cat_colonia.nombre as colonia', 'cat_delito.nombre as delito', 'per.nombres as nombres2', 'per.primerAp as primerAp2', 'per.segundoAp as segundoAp2')
            ->where('acusacion.id', '=', $request->radioAcusacion)
            ->get();
		$servicios = DB::table('cat_pministerial')
			->whereIn('id', $request->servicios)
			->select('id', 'nombre')
			->orderBy('nombre', 'ASC')
			->get();
		$carpeta = $carpeta[0];
		$acusacion = $acusacion[0];

		$distritoLetra = DocxMakerController::getDistritoLetra($carpeta->distrito);
		$dirDenunciante = $acusacion->calle." #".$acusacion->numExterno.", COLONIA ".$acusacion->colonia.", EN ".$acusacion->municipio.", ".$acusacion->estado;
		$fechaHoy = new Carbon();
		$mesLetra = DocxMakerController::getMesLetra($fechaHoy->month);
		$fechaCompleta = $fechaHoy->day." de ".$mesLetra." de ".$fechaHoy->year;

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templates/InvestigaciónPolicíaMinisterial.docx');
		
		$templateProcessor->setValue('nombreFiscal', strtoupper($carpeta->nombres." ".$carpeta->primerAp." ".$carpeta->segundoAp));
		$templateProcessor->setValue('distrito', $carpeta->distrito);
		$templateProcessor->setValue('distritoLetra', $distritoLetra);
		$templateProcessor->setValue('municipioUnidadM', mb_strtoupper($carpeta->municipio));
		$templateProcessor->setValue('dirUnidad', $carpeta->direccion);
		$templateProcessor->setValue('telUnidad', $carpeta->telefono);
		$templateProcessor->setValue('numOficio', 0);
		$templateProcessor->setValue('anio', $fechaHoy->year);
		$templateProcessor->setValue('numCarpeta', $carpeta->numCarpeta);
		$templateProcessor->setValue('numFiscal', $carpeta->numFiscal);
		$templateProcessor->setValue('municipioUnidad', $carpeta->municipio);
		$templateProcessor->setValue('fechaCompleta', $fechaCompleta);
		$templateProcessor->setValue('nombreDenunciante', $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp);
		$templateProcessor->setValue('nombreDenunciado', $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2);
		$templateProcessor->setValue('delito', $acusacion->delito);
		$templateProcessor->setValue('dirDenunciante', $dirDenunciante);
		$templateProcessor->setValue('telefono', $acusacion->telefono);
		//Servicios
		$templateProcessor->cloneRow('rowService', count($servicios));
		$cont = 1;
		foreach ($servicios as $servicio){
			$templateProcessor->setValue('rowNum#'.$cont, $cont.").-");
			$templateProcessor->setValue('rowService#'.$cont, $servicio->nombre);
			$cont ++;
		}

		$templateProcessor->saveAs('../storage/oficios/InvestigaciónPolicíaMinisterial'.$request->radioAcusacion.'.docx');
		return response()->download('../storage/oficios/InvestigaciónPolicíaMinisterial'.$request->radioAcusacion.'.docx');
	}

	public static function getFormatoColaboracionSp(Request $request){
		$carpeta = DB::table('acusacion')
			->join('carpeta', 'carpeta.id', '=', 'acusacion.idCarpeta')
			->join('users', 'users.id', '=', 'carpeta.idFiscal')
			->join('unidad', 'unidad.id', '=', 'users.idUnidad')
			->select('carpeta.numCarpeta', 'carpeta.fechaInicio', 'carpeta.conDetenido', 'users.nombres', 'users.primerAp', 'users.segundoAp', 'users.numFiscal', 'unidad.direccion', 'unidad.telefono', 'unidad.distrito', 'unidad.municipio')
			->where('acusacion.id', '=', $request->radioAcusacion)
			->get();
		$acusacion = DB::table('acusacion')
            ->join('extra_denunciante', 'extra_denunciante.id', '=', 'acusacion.idDenunciante')
            ->join('variables_persona', 'variables_persona.id', '=', 'extra_denunciante.idVariablesPersona')
            ->join('persona', 'persona.id', '=', 'variables_persona.idPersona')
            ->join('domicilio', 'domicilio.id', '=', 'variables_persona.idDomicilio')
			->join('cat_municipio', 'cat_municipio.id', '=', 'domicilio.idMunicipio')
			->join('cat_estado', 'cat_estado.id', '=', 'cat_municipio.idEstado')
			->join('cat_colonia', 'cat_colonia.id', '=', 'domicilio.idColonia')
            ->join('extra_denunciado', 'extra_denunciado.id', '=', 'acusacion.idDenunciado')
            ->join('variables_persona as var', 'var.id', '=', 'extra_denunciado.idVariablesPersona')
            ->join('persona as per', 'per.id', '=', 'var.idPersona')
            ->join('tipif_delito', 'tipif_delito.id', '=', 'acusacion.idTipifDelito')
            ->join('cat_delito', 'cat_delito.id', '=', 'tipif_delito.idDelito')
            ->select('acusacion.id', 'persona.nombres', 'persona.primerAp', 'persona.segundoAp', 'variables_persona.telefono', 'domicilio.calle', 'domicilio.numExterno', 'cat_estado.nombre as estado', 'cat_municipio.nombre as municipio', 'cat_colonia.nombre as colonia', 'cat_delito.nombre as delito', 'per.nombres as nombres2', 'per.primerAp as primerAp2', 'per.segundoAp as segundoAp2')
            ->where('acusacion.id', '=', $request->radioAcusacion)
            ->get();
		$servicios = DB::table('cat_spericiales')
			->whereIn('id', $request->servicios)
			->select('id', 'nombre')
			->orderBy('nombre', 'ASC')
			->get();
		$carpeta = $carpeta[0];
		$acusacion = $acusacion[0];

		$distritoLetra = DocxMakerController::getDistritoLetra($carpeta->distrito);
		//$dirDenunciante = $acusacion->calle." #".$acusacion->numExterno.", COLONIA ".$acusacion->colonia.", EN ".$acusacion->municipio.", ".$acusacion->estado;
		$fechaHoy = new Carbon();
		$mesLetra = DocxMakerController::getMesLetra($fechaHoy->month);
		$fechaCompleta = $fechaHoy->day." de ".$mesLetra." de ".$fechaHoy->year;

		$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('templates/InvestigaciónServiciosPericiales.docx');
		
		$templateProcessor->setValue('nombreFiscal', mb_strtoupper($carpeta->nombres." ".$carpeta->primerAp." ".$carpeta->segundoAp));
		$templateProcessor->setValue('distrito', $carpeta->distrito);
		$templateProcessor->setValue('distritoLetra', $distritoLetra);
		$templateProcessor->setValue('municipioUnidadM', mb_strtoupper($carpeta->municipio));
		$templateProcessor->setValue('dirUnidad', $carpeta->direccion);
		$templateProcessor->setValue('telUnidad', $carpeta->telefono);
		$templateProcessor->setValue('numOficio', 0);
		$templateProcessor->setValue('anio', $fechaHoy->year);
		$templateProcessor->setValue('numCarpeta', $carpeta->numCarpeta);
		$templateProcessor->setValue('numFiscal', $carpeta->numFiscal);
		$templateProcessor->setValue('municipioUnidad', $carpeta->municipio);
		$templateProcessor->setValue('fechaCompleta', $fechaCompleta);
		$templateProcessor->setValue('nombreDenunciante', $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp);
		$templateProcessor->setValue('nombreDenunciado', $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2);
		$templateProcessor->setValue('delito', $acusacion->delito);
		//$templateProcessor->setValue('dirDenunciante', $dirDenunciante);
		$templateProcessor->setValue('telefono', $acusacion->telefono);
		//Servicios
		$templateProcessor->cloneRow('rowService', count($servicios));
		$cont = 1;
		foreach ($servicios as $servicio){
			$templateProcessor->setValue('rowNum#'.$cont, $cont.").-");
			$templateProcessor->setValue('rowService#'.$cont, $servicio->nombre);
			$cont ++;
		}
		$templateProcessor->setValue('termino', $request->termino);

		$templateProcessor->saveAs('../storage/oficios/InvestigaciónServiciosPericiales'.$request->radioAcusacion.'.docx');
		return response()->download('../storage/oficios/InvestigaciónServiciosPericiales'.$request->radioAcusacion.'.docx');
	}

	public static function getDistritoLetra($numDistrito){
		switch ($numDistrito) {
        	case 'I':
        		$distritoLetra = "PRIMER";
        		break;
        	case 'II':
        		$distritoLetra = "SEGUNDO";
        		break;
        	case 'III':
        		$distritoLetra = "TERCER";
        		break;
        	case 'IV':
        		$distritoLetra = "CUARTO";
        		break;
        	case 'V':
        		$distritoLetra = "QUINTO";
        		break;
        	case 'VI':
        		$distritoLetra = "SEXTO";
        		break;
        	case 'VII':
        		$distritoLetra = "SEPTIMO";
        		break;
        	case 'VIII':
        		$distritoLetra = "OCTAVO";
        		break;
        	case 'IX':
        		$distritoLetra = "NOVENO";
        		break;
        	case 'X':
        		$distritoLetra = "DECIMO";
        		break;
        	case 'XI':
        		$distritoLetra = "DECIMOPRIMER";
        		break;
        	case 'XII':
        		$distritoLetra = "DECIMOSEGUNDO";
        		break;
        	default:
        		$distritoLetra = "PRIMER";
        		break;
        }
        return $distritoLetra;
	}

	public static function getMesLetra($numMes){
		switch ($numMes) {
        	case '1':
        		$mesLetra = "Enero";
        		break;
        	case '2':
        		$mesLetra = "Febrero";
        		break;
        	case '3':
        		$mesLetra = "Marzo";
        		break;
        	case '4':
        		$mesLetra = "Abril";
        		break;
        	case '5':
        		$mesLetra = "Mayo";
        		break;
        	case '6':
        		$mesLetra = "Junio";
        		break;
        	case '7':
        		$mesLetra = "Julio";
        		break;
        	case '8':
        		$mesLetra = "Agosto";
        		break;
        	case '9':
        		$mesLetra = "Septiembre";
        		break;
        	case '10':
        		$mesLetra = "Octubre";
        		break;
        	case '11':
        		$mesLetra = "Noviembre";
        		break;
        	case '12':
        		$mesLetra = "Diciembre";
        		break;
        	default:
        		$mesLetra = "ENERO";
        		break;
        }
        return $mesLetra;
	}

	public static function getDiaLetra($numDia){
		switch ($numDia) {
        	case '1':
        		$diaLetra = "Primero";
        		break;
        	case '1':
        		$diaLetra = "Dos";
        		break;
        	case '3':
        		$diaLetra = "Tres";
        		break;
        	case '4':
        		$diaLetra = "Cuatro";
        		break;
        	case '5':
        		$diaLetra = "Cinco";
        		break;
        	case '6':
        		$diaLetra = "Seis";
        		break;
        	case '7':
        		$diaLetra = "Siete";
        		break;
        	case '8':
        		$diaLetra = "Ocho";
        		break;
        	case '9':
        		$diaLetra = "Nueve";
        		break;
        	case '10':
        		$diaLetra = "Diez";
        		break;
        	case '11':
        		$diaLetra = "Once";
        		break;
        	case '12':
        		$diaLetra = "Doce";
        		break;
        	case '13':
        		$diaLetra = "Trece";
        		break;
        	case '14':
        		$diaLetra = "Catorce";
        		break;
        	case '15':
        		$diaLetra = "Quince";
        		break;
        	case '16':
        		$diaLetra = "Dieciseis";
        		break;
        	case '17':
        		$diaLetra = "Diecisiete";
        		break;
        	case '18':
        		$diaLetra = "Dieciocho";
        		break;
        	case '19':
        		$diaLetra = "Diecinueve";
        		break;
        	case '20':
        		$diaLetra = "Veinte";
        		break;
        	case '21':
        		$diaLetra = "Veintiuno";
        		break;
        	case '22':
        		$diaLetra = "Veintidos";
        		break;
        	case '23':
        		$diaLetra = "Veintitres";
        		break;
        	case '24':
        		$diaLetra = "Veinticuatro";
        		break;
        	case '25':
        		$diaLetra = "Veinticinco";
        		break;
        	case '26':
        		$diaLetra = "Veintiseis";
        		break;
        	case '27':
        		$diaLetra = "Veintisiete";
        		break;
        	case '28':
        		$diaLetra = "Veintiocho";
        		break;
        	case '29':
        		$diaLetra = "Veintinueve";
        		break;
        	case '30':
        		$diaLetra = "Treinta";
        		break;
        	case '31':
        		$diaLetra = "Treinta y un";
        		break;
        	
        	default:
        		$diaLetra = "Primero";
        		break;
        }
        return $diaLetra;
	}

	
}
