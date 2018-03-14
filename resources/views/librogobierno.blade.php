@extends('template.form')

@section('title', 'Libro de Gobierno')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('contenido')
	<div class="boxtwo" align="center">
		<h6 align="center">Consultar Libro de Gobierno</h6>
		<div class="form-group" align="center">
			<div class="row">  
				<div class="col-6" align="center">
					<div class="form-group">
						{!! Form::label('fechaLibroIni', 'De Fecha:', ['class' => 'col-form-label-sm']) !!}
						<div class="input-group date" id="fechaLibroIni" data-target-input="nearest">
							{!! Form::text('fechaLibroIni', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaLibroIni', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
							<div class="input-group-append" data-target="#fechaLibroIni" data-toggle="datetimepicker">
								<div class="input-group-text"><i class="fa fa-calendar"></i></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6" align="center" >
					<div class="form-group">
						{!! Form::label('fechaLibroFin', 'A Fecha:', ['class' => 'col-form-label-sm']) !!}
						<div class="input-group date" id="fechaLibroFin" data-target-input="nearest">
							{!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaLibroFin', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
							<div class="input-group-append" data-target="#fechaLibroFin" data-toggle="datetimepicker">
								<div class="input-group-text"><i class="fa fa-calendar"></i></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{{----}}
		<div class="table">
			<table id="libroTable" class="table table-bordered table-striped" width="100%">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Núm. carpeta</th>
						<th>Unidad</th>
						<th>Fiscal</th>
						<th>Denunciante(s)</th>
						<th>Delito(s)</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="boxtwo">
		<div class="row">
			<div class="col">
				<div class="text-center">
					<a href="{{ route('home') }}" class="btn btn-dark text-center">Volver atrás</a>
				</div>
			</div>
			<div class="col">	
				<div class="text-center">
					{!! Form::submit('Consultar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
@endsection

@push('PilaScripts')
<script src="{{ asset('js/datatables.min.js')}}" ></script>
<script type="text/javascript">
	$(function () {
		$('#fechaLibroIni').datetimepicker({
			format: 'YYYY-MM-DD',
			maxDate: moment(),
			useCurrent: false
		});
		$('#fechaLibroFin').datetimepicker({
			format: 'YYYY-MM-DD',
			maxDate: moment(),
			useCurrent: false
		});
		$("#fechaLibroIni").on("change.datetimepicker", function (e) {
			$('#fechaLibroFin').datetimepicker('minDate', e.date);
		});
		$("#fechaLibroFin").on("change.datetimepicker", function (e) {
			$('#fechaLibroIni').datetimepicker('maxDate', e.date);
		});
	});

	var table = $('#libroTable').DataTable({
		language: {
			"url": "http://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json"
		},
		processing: true,
		serverSide: true,
		ajax: "{{ route('api.libro') }}",
		columns: [
			{data: 'id', name: 'id'},
			{data: 'nombre', name: 'nombre'}
		],
		dom: 'Bfrtip',
        buttons: [
            'csv', 'excel', 'pdf', 'pageLength',
        ]
	});
</script>

@endpush