@extends('template.form-edit')

@section('title', 'Editar denuncias registradas')

@section('contenido')

{!! Form::open(['route' => ['update.acusacion', $idCarpeta, $id], 'method' => 'PUT'])  !!}
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
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				<h6>Datos de la denuncia</h6>
				
					@if(!empty($idCarpeta))
						{!! Form::hidden('idCarpeta', $idCarpeta) !!}
						{!! Form::hidden('id', $id) !!}

					@endif
					
					@include('fields.acusacion')
			
			</div>
		</div>
	</div>

	
{!! Form::close() !!}
@endsection

@push('docready-js')
		
		$("#idDenunciante").addClass("vacio");
		$("#idTipifDelito").addClass("vacio");
		$("#idDenuciado").addClass("vacio");	
		$('#idDenunciante').val("{{ $denunciante->idExtraDenunciante }}").trigger('change');
		$('#idTipifDelito').val({{ $delito->idTipifDelito }}).trigger('change');
		$('#idDenuciado').val({{ $denunciado->idExtraDenunciado}}).trigger('change');

		@endpush
		



