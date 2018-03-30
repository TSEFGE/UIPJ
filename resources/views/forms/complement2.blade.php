@extends('template.form')

@section('title', 'Modificar complemento')
@section('contenido')
    {!! Form::open(['route' => 'store.complement2', 'method' => 'POST'])  !!}
    {{ csrf_field() }}
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				@include('fields.complement')
			</div>
		</div>
	</div>
	@include('forms.buttons')
	{!! Form::close() !!}
@endsection
