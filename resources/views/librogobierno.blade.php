@extends('template.form')

@section('title', 'Libro de gobierno')
@section('contenido')

	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/tempusdominus-bootstrap-4.min.css') }}">



<div class="card-header">
<div class="row">
		<div class="col">
			<div class="text-left">
				{{--Aqui van radios, etc --}}
			</div>
		</div>
		<div class="col">	
			<div class="text-right">
				<button type="button" class="btn btn-dark" id="consultar">Consultar</button>
			</div>
		</div>
	</div>
</div> 

@include('forms.errores')
<div class=" card-body boxone">
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">			
				<h6 align="center">Consultar libro de gobierno</h6>

				{!! Form::open() !!}
		<div class="form-group" align="center">
			<div class="row" align="center">
				<div class="col-6" align="center">
					<div class="form-group">
						{!! Form::label('fechaIni', 'De fecha:', ['class' => 'col-form-label-sm']) !!}
						<div class="input-group date" id="fechaLibroIni" data-target-input="nearest">
							{!! Form::text('fechaIni', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaLibroIni', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
							<div class="input-group-append" data-target="#fechaLibroIni" data-toggle="datetimepicker">
								<div class="input-group-text"><i class="fa fa-calendar"></i></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-6" align="center" >
					<div class="form-group">
						{!! Form::label('fechaFin', 'A fecha:', ['class' => 'col-form-label-sm']) !!}
						<div class="input-group date" id="fechaLibroFin" data-target-input="nearest">
							{!! Form::text('fechaFin', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaLibroFin', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
							<div class="input-group-append" data-target="#fechaLibroFin" data-toggle="datetimepicker">
								<div class="input-group-text"><i class="fa fa-calendar"></i></div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-2">
					<div class="form-group">
						<br>
						
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}

		<div class="table">
			<table id="libroTable" class="table table-bordered table-striped" width="100%">
				<thead>
					<tr>
						<th>Fecha</th>
						<th>Núm. carpeta</th>
						<th>Unidad</th>
						<th>Fiscal</th>
						<th>Denunciante(s)</th>
						<th>Nota</th>
					</tr>
				</thead>
			</table>
		</div>


@section('scripts')
<script src="{{ asset('js/datatables.min.js')}}" ></script>
<script src="{{ asset('js/moment.min.js') }}"></script>
<script src="{{ asset('js/es.js') }}"></script>
<script src="{{ asset('js/tempusdominus-bootstrap-4.min.js') }}"></script>
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
			"url": "{{ asset('json/Spanish.json') }}"
		},
		ajax: "{{ route('api.libro') }}",
		columns: [
			{data: 'Fecha', name: 'Fecha'},
			{data: 'numCarpeta', name: 'numCarpeta'},
			{data: 'Unidad', name: 'Unidad'},
			{data: 'Fiscal', name: 'Fiscal'},
			{data: 'Denunciante', name: 'Denunciante'},
			{data: 'Nota', name: 'Nota'},
		],
		dom: 'Bfrtip',
        buttons: [
			'csv', 'excel',
			{
			extend: 'pdfHtml5',
			orientation: 'landscape',
			tittle:'Carpetas generadas',
			pageSize: 'letter',
			/*customize: function ( doc ) {
				doc.content.splice( 0, 0, {
				  alignment: 'left',
					margin: [ 0, 0, 0, 0 ],
					image: imagen,
					width: 750
					} );
                }*/ 
			},
			{
				extend: 'pageLength',
				text: 'Cantidad de registros'
			}           
        ]
	});

	setInterval( function () {
	    table.ajax.reload( null, false );
	}, 20000 );

	$.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });
    $('#consultar').on('click',function(e){
        var route="{{route('api.rango')}}";
        var fechaIni=$("#fechaIni").val();
        var fechaFin=$("#fechaFin").val();
        if(fechaIni!="" || fechaFin!=""){
            $.ajax({
                type: 'get',
                url:route,
                data:{fechaInicial:fechaIni, fechaFinal: fechaFin},
                dataType:'json',
                success: function(data){
                    table.clear().draw();
                    table.rows.add( data ).draw();
                },
                error:function(e){
                    console.log(e);
                }
            });
        }else{
            swal("Atención", 'Seleccione un rango de fechas.', 'warning');
        }
	});
	
</script>

@endsection

			</div>
		</div>
	</div>
</div>

@endsection

