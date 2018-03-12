@extends('template.form')

@section('title', 'Agregar Autoridad')
@section('contenido')
	@if ($errors->any())
		<div class="alert alert-danger">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <li>{{ $error }}</li>
	            @endforeach
	        </ul>
	    </div>
	@endif
    {!! Form::open(['route' => 'store.autoridad', 'method' => 'POST'])  !!}
	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapsePersonales3" aria-expanded="false" aria-controls="collapsePersonales3">
					Datos personales
				</a>
			</h5>
		</div>
		<div id="collapsePersonales3" class="collapse show boxcollapse">
			<div class="boxtwo">
				@include('fields.personales-aut')
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseDir3" aria-expanded="false" aria-controls="collapseDir3">
					Dirección
				</a>
			</h5>
		</div>
		<div id="collapseDir3" class="collapse boxcollapse">
			<div class="boxtwo">
				@include('fields.direcciones')
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseTrab3" aria-expanded="false" aria-controls="collapseTrab3">
					Datos del trabajo
				</a>
			</h5>
		</div>
		<div id="collapseTrab3" class="collapse boxcollapse">
			<div class="boxtwo">
				@include('fields.lugartrabajo')
			</div>
		</div>
	</div>

	<div class="card">
		<div class="card-header">
			<h5 class="mb-0 text-center">
				<a data-toggle="collapse" href="#collapseAutoridad" aria-expanded="false" aria-controls="collapseAutoridad">
					Información sobre la autoridad
				</a>
			</h5>
		</div>
		<div id="collapseAutoridad" class="collapse boxcollapse">
			<div class="boxtwo">
				@include('fields.extra-aut')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="boxtwo">
		@include('tables.autoridades')
	</div>
@endsection
@push('PilaScripts')
	<script src="{{ asset('js/rfcFisico.js') }}"></script>
	<script type="text/javascript">
		
		$(function() {
			 required = true;
			 $('#docIdentificacion').focusout(function(){
					var docVal = $(this).val();
					if (docVal.length == 0){
							$(this).css({"border-color":"red"});
								$("#documento").show();
					}else{
							$(this).css({"border-color":"green"});
							$("#documento").hide();
					}
			 })
		});



		$(function() {
			 required = true;
			 $('#numDocIdentificacion').focusout(function(){
					var numVal = $(this).val();
					if (numVal.length == 0){
							$(this).css({"border-color":"red"});
								$("#numDocumento").show();
					}else{
							$(this).css({"border-color":"green"});
							$("#numDocumento").hide();
					}
			 })
		});
	</script>

@endpush
