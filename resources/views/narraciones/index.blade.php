@extends('template.form')

@section('title', 'Agregar narración')
@section('contenido')
				{!! Form::open(['route' => 'store.narracion', 'method' => 'POST', 'files'=>true])  !!}
<div class="card-header">
	<div class="row">
		<div class="col-sm-1">
			<div class="text-left">
				{!! Form::hidden('idInvolucrado', $idInvolucrado) !!}
				{!! Form::hidden('tipoInvolucrado', $tipoInvolucrado) !!}
				
				{!! Form::button('Nueva', ['class' => 'btn btn-primary', 'id' => 'btn-narracion']) !!}
			</div>
		</div>
		<div class="col">
			<div class="text-right">
				@include('forms.buttons')
			</div>
		</div>

		@isset($idCarpeta)
		{!! Form::hidden('idCarpeta', $idCarpeta) !!}
		@endisset

	</div>
</div>

@include('forms.errores')
<div class=" card-body boxone">
	<div class="col-12">
		<div class="boxtwo">
			<div class="row">

				<div class="col-sm-2" >

					{!! Form::label('narracionEti', 'Narraciones Registradas', ['class' => 'col-form-label-sm']) !!}
					<div class="table" style="width: 200px; height: 550px; overflow-y: scroll;">
						<style media="screen">
							.table tr {
								cursor: pointer;
							}
							</style>
						<table class="table table-striped">
							<thead>
							</thead>
							<tbody>
								@foreach($narraciones as $narracion)
								<tr>
									<td id='{{ $narracion->id }}' class='ver-Narracion'>{{ $narracion->created_at }}</td>
								</tr>
								@endforeach

							</tbody>
						</table>
					</div>

				</div>
				<div class="col-lg-10">

					{!! Form::label('narracion', 'Narración', ['class' => 'col-form-label-sm']) !!}
					{!! Form::textarea('narracion', null, ['class' => 'form-control form-control-sm','id' => 'narracion', 'data-validation-length'=>'5-1000','data-validation-error-msg'=>'Narración deben contener al menos cinco letras']) !!}


					<div  class="form-group" id="subirArchivo">
					{!! Form::label('archivo', 'Seleccione archivo', ['class' => 'col-form-label-sm']) !!}
			     	<input type="file"  id="archivo" name="archivo">

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{!! Form::close() !!}

@endsection
