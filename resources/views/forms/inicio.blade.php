@extends('template.form')

@section('title', 'Iniciar nueva carpeta de investigación')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
	{!! Form::open(['route' => 'store.carpeta', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">
	<div class="row">
			<div class="col">
				<div class="text-right">
					{!! Form::submit('Iniciar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
					<a href="{{ route('home') }}" class="btn btn-primary text-center"><i class="fa fa-folder-open"></i></a>

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

@push('scripts')
	<script src="{{ asset('plugins/moment/js/moment.min.js') }}"></script>
    <script src="{{ asset('plugins/moment/locales/es.js') }}"></script>
	<script src="{{ asset('plugins/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
	<script src="{{ asset('js/carpeta.js') }}"></script>
	<script src="{{ asset('js/inicio-carpeta.js') }}"></script>
	
@endpush

@push('docready-js')
	$("#btn-submit").on("click", function(){
		localStorage.clear();		
	});
@endpush