@extends('template.form-edit')

@section('title', 'Editar delito')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => ['update.delito', $idCarpeta, $id], 'method' => 'PUT'])  !!}
<input type="hidden" name="idCarpeta" value="{{$idCarpeta}}">
<input type="hidden" name="idTipifDelito" value="{{$infoComision->idTipifDelito}}">
<input type="hidden" name="idDomicilio" value="{{$infoComision->idDomicilio}}">
<input type="hidden" name="horaE" value="{{$infoComision->hora}}">
<div class="card-header">
<div class="row">
		<div class="col">
			<div class="text-left">
				{{--Aqui van radios, etc --}}
			</div>
		</div>
		<div class="col">
			<div class="text-right">
				@include('forms.buttons')
			</div>
		</div>
	</div>
</div>

@include('forms.errores')
<div class=" card-body boxone">
	<div class="row no-gutters">
		<div class="col-12">
			<div class="row">
				@if(!empty($idCarpeta))
				{!! Form::hidden('idCarpeta', $idCarpeta) !!}
				{!! Form::hidden('idTipifDelito', ($infoComision->idTipifDelito)) !!}
				{!! Form::hidden('idDomicilio', ($infoComision->idDomicilio)) !!}s
				@endif
			</div>

			<div id="delitotabs">
				<ul id="tabsdelito" class="nav nav-tabs">
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#infodelito">Información sobre la comisión del delito</a>
						<span id="vacioad" class="xvacio"></span>
						<span id="errorad" class="xerror"></span>
						<span id="bienad" class="bien"></span>

					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#lugardelito">Información sobre el lugar de los hechos</a>
						<span id="vacioad2" class="xvacio"></span>
						<span id="errorad2" class="xerror"></span>
						<span id="bienad2" class="bien"></span>
					</li>
				</ul>
			</div>

			<div id="cajados" class="boxtwo">
				<div class="tab-content" id="ctdelito">
					<div class="tab-pane active container" id="infodelito">
						@include('fields.delito')
					</div>
				    <div class="tab-pane container" id="lugardelito">
							@include('fields.direcciones')
							@include('fields.lugar-hechos')
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
	{!! Form::close() !!}
@endsection

@push('scripts')
	<script src="{{ asset('plugins/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/locales/es.js') }}"></script>
    <script src="{{ asset('plugins/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
	<script src="{{ asset('js/selects/async.js') }}"></script>
    <script src="{{ asset('js/selects/delito.js') }}"></script>
    <script src="{{ asset('js/selects/domicilio.js') }}"></script>
	<script src="{{ asset('js/selects/sisy.js') }}"></script>
	<script src="{{ asset('js/validations/tab-delito.js') }}"></script>
	<script src="{{ asset('js/delito.js') }}"></script>
@endpush

@push('docready-js')
	$("#fecha").addClass("vacio");
	$("#hora").addClass("vacio");

	$("#calle").addClass("vacio");
	$("#numExterno").addClass("vacio");
	$("#numInterno").addClass("vacio");
	$("#entreCalle").addClass("vacio");
	$("#yCalle").addClass("vacio");
	$("#calleTrasera").addClass("vacio");
	$("#puntoReferencia").addClass("vacio");


	@isset($infoComision)
		var hora= $("input[name='horaE']").val();
		var horaE= hora.substr(0,5);
		$('#idDelito').val("{{$infoComision->idDelito}}").trigger('change');
		$('#idAgrupacion1').val("{{$infoComision->idAgrupacion1}}").trigger('change');
		$('#idAgrupacion2').val("{{$infoComision->idAgrupacion2}}").trigger('change');
		$('#fecha').datetimepicker('format', "DD-MM-YYYY");
		$('#fecha').datetimepicker('date', moment("{{ $infoComision->fecha}}").format("DD-MM-YYYY"));
		//$('#fecha').val("{{$infoComision->fecha}}");		    
		$('#hora').val(horaE);
		$('#idTipoArma').val("{{$infoComision->idTipoArma}}").trigger('change');
		$('#idArma').val("{{$infoComision->idArma}}").trigger('change');
		$('#idPosibleCausa').val("{{$infoComision->idPosibleCausa}}").trigger('change');
		@if ($infoComision->conViolencia==1)
			$('#conViolencia2').attr('checked',true).trigger('change');
			$('#conViolencia1').attr('checked',false);
		@else
			$('#conViolencia1').attr('checked',true).trigger('change');
			$('#conViolencia2').attr('checked',false);
		@endif

		$('#idModalidad').val("{{$infoComision->idModalidad}}");
		$('#formaComision').val("{{$infoComision->formaComision}}");
		$('#consumacion').val("{{$infoComision->consumacion}}");
	@endisset
	@isset($infoLugarHechos)
		$('#entreCalle').val("{{$infoLugarHechos->entreCalle}}");
		$('#yCalle').val("{{$infoLugarHechos->yCalle}}");
		$('#idLugar').val("{{$infoLugarHechos->idLugar}}").trigger('change');
		$('#calleTrasera').val("{{$infoLugarHechos->calleTrasera }}");
		$('#idZona').val("{{$infoLugarHechos->idZona}}").trigger('change');
		$('#puntoReferencia').val("{{$infoLugarHechos->puntoReferencia}}");
		$('#idEstado').val("{{$infoLugarHechos->idEstado}}").trigger('change');
		$('#idMunicipio').val("{{$infoLugarHechos->idMunicipio}}").trigger('change');
		$('#idLocalidad').val("{{$infoLugarHechos->idLocalidad}}").trigger('change');
		$('#idColonia').val("{{$infoLugarHechos->idColonia}}").trigger('change');
		$('#calle').val("{{$infoLugarHechos->idColonia}}");
		$('#numExterno').val("{{$infoLugarHechos->idColonia}}");
		$('#numInterno').val("{{$infoLugarHechos->idColonia}}");
	@endisset



{{--
idTipoArma
idArma
idPosibleCausa
 --}}


@endpush
