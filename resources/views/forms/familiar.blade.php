@extends('template.form')

@section('title', 'Agregar Familiar')

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
    {!! Form::open(['route' => 'store.familiar', 'method' => 'POST'])  !!}
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				<h6>Datos del familiar (Denunciante/Denunciado)</h6>
				@include('fields.familiar')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
	<div class="boxtwo">
		@include('tables.familiares')
	</div>
@endsection