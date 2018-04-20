@extends('template.form')

@section('title', 'Agregar delito')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
{!! Form::open(['route' => 'store.delito', 'method' => 'POST'])  !!}
{{ csrf_field() }}
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

@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Delitos registrados')
		@include('tables.delitos')
	</div>
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
@endpush
