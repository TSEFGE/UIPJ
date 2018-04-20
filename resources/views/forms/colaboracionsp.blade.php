@extends('template.form')

@section('title', 'Generar documento de colaboración con servicios periciales')

@section('contenido')
    {!! Form::open(['route' => 'colaboracion.sp', 'method' => 'POST'])  !!}
	{{ csrf_field() }}
	<div class="card-header">
		<div class="row">
			<div class="col">	
				<div class="text-right">
					{!! Form::submit('Generar documento', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
					<a href="{{ route('carpeta', $idCarpeta) }}" class="btn btn-dark text-center"><i class="fa fa-folder-open"></i></a>
				</div>
			</div>
		</div>
	</div>

	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				<h6>Acusaciones</h6>
				<div class="table">
				    <table class="table table-striped">
				        <thead>
				        	<th>Seleccione una</th>
				            <th>Nombre denunciante</th>
				            <th>Delito</th>
				            <th>Nombre denunciado</th>
				        </thead>
				        <tbody>
				            @if(count($acusaciones)==0)
				                <tr><td colspan="4" class="text-center">Sin registros</td></tr>
				            @else
				                @foreach($acusaciones as $acusacion)
				                    <tr>
				                    	<td><input style="width:20px;height:20px" type="radio" value="{{ $acusacion->id }}" name="radioAcusacion"></td>
				                        <td>{{ $acusacion->nombres." ".$acusacion->primerAp." ".$acusacion->segundoAp }}</td>
				                        <td>{{ $acusacion->delito }}</td>
				                        <td>{{ $acusacion->nombres2." ".$acusacion->primerAp2." ".$acusacion->segundoAp2 }}</td>
				                    </tr>
				                @endforeach
				            @endif
				        </tbody>
				    </table>
				</div>
				<div class="form-group">
					{!! Form::label('termino', 'Término', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('termino', ['8' => '8 horas', '12' => '12 horas', '24' => '24 horas'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el término', 'required']) !!}
				</div>
			</div>
			<div class="boxtwo ">
				<h6>Servicios:</h6>
				<div class="form-group">
					{!! Form::select('servicios', $servicios->pluck('nombre','id')->all(), null, ['name'=>'servicios[]','class' => 'form-control select2-multi', 'multiple']) !!}
				</div>
			</div>
			@include('forms.idcarpeta')
		</div>
	</div>
	{!! Form::close() !!}
@endsection

@push('docready-js')
    $('.select2-multi').select2();
@endpush