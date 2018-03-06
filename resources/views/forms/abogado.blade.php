@extends('template.form')

@section('title', 'Agregar Abogado')
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
    {!! Form::open(['route' => 'store.abogado', 'method' => 'POST'])  !!}
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
				@include('fields.personales-abo')
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
					Información sobre el abogado
				</a>
			</h5>
		</div>
		<div id="collapseAutoridad" class="collapse boxcollapse">
			<div class="boxtwo">
				@include('fields.extra-abo')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="boxtwo">
		@include('tables.abogados')
	</div>
@endsection