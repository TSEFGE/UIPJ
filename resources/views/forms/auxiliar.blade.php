@extends('template.form')

@section('title', 'Administrar auxiliar')

@push('css')
	<link rel="stylesheet" href="{{ asset('plugins/toastr/css/toastr.min.css') }}">
	<link rel="stylesheet" href="{{ asset('plugins/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}">
@endpush

@section('contenido')
<div class="tarjeta">
{!! Form::open(['route' => 'store.auxiliar', 'method' => 'POST'])  !!}
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
		{{--<div class="row no-gutters">
		<div class="col-12">
				<div class="row">
						@if(!empty($idCarpeta))
							{{--{!! Form::hidden('idCarpeta', $idCarpeta) !!}
						@endif
				</div>
		<div id="tabogado">
				
		</div>--}}
			<div class="boxtwo" id="registroAux">
                <div class="row">
				<div class="col-6">
                    {!! Form::label('nombreAux', 'Nombre', ['class' => 'col-form-label-sm']) !!}
			        {!! Form::text('nombreAux', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre']) !!}                    
                </div>
                <div class="col-6">
                    {!! Form::label('primerApAux', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
			        {!! Form::text('primerApAux', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el apellido paterno']) !!}                    
                </div>
                <div class="col-6">
                    {!! Form::label('segundoApAux', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
			        {!! Form::text('segundoApAux', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el apellido materno']) !!}                    
                </div>
                <div class="col-6">
                    {!! Form::label('email', 'Correo electrónico', ['class' => 'col-form-label-sm']) !!}
			        {!! Form::text('email', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese correo']) !!}                    
                </div>
                <div class="col-6">
                    {!! Form::label('telefonoAux', 'Numero de teléfono', ['class' => 'col-form-label-sm']) !!}
			        {!! Form::text('telefonoAux', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese numero']) !!}                    
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col">
							{!! Form::label('contraseña', 'Ingresa una contraseña', ['class' => 'col-form-label-sm']) !!}
							{!! Form::text('contraseña', null, ['class' => 'form-control form-control-sm pw', 'placeholder' => 'Contraseña','data-validation'=>'length','name'=>'pass','data-validation-length'=>'min8']) !!}                    
						</div>
						<div class="col">
							{!! Form::label('contraseña2', 'Repite tu contraseña', ['class' => 'col-form-label-sm']) !!}
							{!! Form::text('contraseña2', null, ['class' => 'form-control form-control-sm pw', 'placeholder' => '********','name'=>'repeat','data-validation'=>'confirmation','data-validation-confirm'=>'pass']) !!}                    
						</div>
					</div>
					<div id="nocoinciden"></div>
				</div>
				<div class="col-12 text-right bottom" >					
				{!! Form::button('<i class="fa fa-minus" aria-hidden="true"></i>', array ('class' => 'btn btn-secondary ','data-toggle'=>'tooltip','title'=>'Ocultar formulario','id' => 'btn-ocultar')) !!}
				</div>
                </div>
			</div>{{--}}
		</div>
	</div>--}}
</div>
{!! Form::close() !!}
</div>
@endsection

@section('tabla')
	<div class="boxtwo">
        @section('titulo-tabla', 'Auxiliares Registrados')
        @include('tables.auxiliares')		
	</div>
@endsection

@push('scripts')
	<script src="{{ asset('plugins/toastr/js/toastr.min.js')}}" ></script>
	<script src="{{ asset('plugins/moment/js/moment.min.js') }}"></script>
	<script src="{{ asset('plugins/moment/locales/es.js') }}"></script>	
	<script src="{{ asset('js/auxiliar.js') }}"></script>
	<script src="{{ asset('js/curp.js') }}"></script>
	<script src="{{ asset('js/rfcFisico.js') }}"></script>
	<script src="{{ asset('js/ajaxCurp.js') }}"></script>
@endpush

@push('docready-js')
	toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": true,
        "progressBar": true,
        "positionClass": "toast-bottom-right",
        "preventDuplicates": true,
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "3000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
	}
	
	@endpush
