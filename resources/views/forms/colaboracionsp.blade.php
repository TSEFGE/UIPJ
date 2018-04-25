@extends('template.form')

@section('title', 'Diligencias a servicios periciales')

@section('contenido')
    {!! Form::open(['route' => 'diligencia.sp', 'method' => 'POST'])  !!}
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
                <div class="row">
                    <div class="form-group col-md-3">
                                <center>
                                    <label class="col-form-label col-form-label-sm">¿Con indicio?</label>
                                    <div class="clearfix"></div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label col-form-label col-form-label-sm">
                                            <input class="form-check-input" type="radio" id="conIndicio1" name="conIndicio" value="1" required> Sí
                                        </label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label col-form-label col-form-label-sm">
                                            <input class="form-check-input" type="radio" id="conIndicio2" name="conIndicio" value="0" required> No
                                        </label>
                                    </div>
                                </center>
                    </div>
    				<div class="form-group col-md-3">
    					{!! Form::label('unidadTermino', 'Unidad Termino', ['class' => 'col-form-label-sm']) !!}
                        {!! Form::select('unidadTermino', ['horas' => 'horas', 'dias' => 'dias'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el término', 'required']) !!}
    				</div>
                    <div class="form-group col-md-3">
                        {!! Form::label('cantidadTermino', 'Cantidad termino', ['class' => 'col-form-label-sm']) !!}
                        {!! Form::number('cantidadTermino', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el tiempo', 'required']) !!}
                    </div>
                    <div class="form-group col-md-3">
                        {!! Form::label('servicio', 'Servicio:', ['class' => 'col-form-label-sm']) !!}
                        {!! Form::select('servicio', $servicios->pluck('nombre','id')->all(), null, ['class' => 'form-control select', 'required']) !!}
                    </div>
                </div>

				<div class="form-group">
                    {!! Form::label('observaciones', 'Observaciones:', ['class' => 'col-form-label-sm']) !!}
					{!! Form::textarea('observaciones', null, ['class'=>'form-control', 'rows' => 2,'required']) !!}
				</div>
			</div>
			@include('forms.idcarpeta')
		</div>
	</div>
	{!! Form::close() !!}
@endsection
