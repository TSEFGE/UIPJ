@extends('template.form')

@section('title', 'Iniciar nueva carpeta de investigación')


@section('contenido')
	{!! Form::open(['route' => 'store.carpeta', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">
	<div class="row">
			<div class="col">
				<div class="text-right">
					{!! Form::submit('Iniciar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
					<a href="{{ route('home') }}" class="btn btn-dark text-center"><i class="fa fa-folder-open"></i></a>

				</div>
			</div>
		</div>
	</div>
	@include('forms.errores')
	<div class="boxtwo">
		<h6>Datos generales de la carpeta de investigación</h6>
		@include('fields.carpeta')
	</div>
	{!! Form::close() !!}
@endsection
 