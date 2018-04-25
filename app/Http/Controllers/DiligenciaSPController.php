<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DiligenciaSP;
use App\Http\Controllers\DocxMakerController;
use Illuminate\Support\Facades\Auth;
use DB;
use Carbon\Carbon;

class DiligenciaSPController extends Controller
{
	public static function enviarSolicitud(Request $request){
		$carpeta = DB::table('acusacion')
			->join('carpeta', 'carpeta.id', '=', 'acusacion.idCarpeta')
			->join('users', 'users.id', '=', 'carpeta.idFiscal')
			->join('unidad', 'unidad.id', '=', 'users.idUnidad')
			->select('carpeta.numCarpeta', 'carpeta.fechaInicio', 'carpeta.conDetenido', 'users.nombres', 'users.apellidos', 'users.numFiscal', 'unidad.direccion', 'unidad.telefono', 'unidad.distrito', 'unidad.municipio')
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

		$templateProcessor->setValue('nombreFiscal', mb_strtoupper($carpeta->nombres." ".$carpeta->apellidos));
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
    
}
