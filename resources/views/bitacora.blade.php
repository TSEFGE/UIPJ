@extends('template.main')

@section('title', 'Bitácora de actividades')

@section('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-header">Bitácora de actividades</div>
    <div class="card-body boxone">

	<div class="boxtwo" align="center">
		<div class="table">
			<table id="bitacoraTable" class="table table-bordered table-striped" width="100%">
				<thead>
					<tr>
						<th>No.</th>
						<th>Usuario</th>
						<th>Tabla</th>
						<th>Acción</th>
						<th>Descripción</th>
						<th>Id afectado</th>
						<th>Fecha</th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<div class="boxtwo">
		<div class="row">
			<div class="col">
				<div class="text-center">
					<a href="{{ route('home') }}" class="btn btn-dark text-center">Regresar</a>
				</div>
			</div>
		</div>
	</div>
    </div>
    </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/datatables.min.js')}}" ></script>
<script type="text/javascript">
	var table = $('#bitacoraTable').DataTable({
		language: {
			"url": "{{ asset('json/Spanish.json') }}"
		},
		ajax: "{{ route('api.bitacora') }}",
		columns: [
			{data: 'id', name: 'id'},
			{data: 'usuario', name: 'usuario'},
			{data: 'tabla', name: 'tabla'},
			{data: 'accion', name: 'accion'},
			{data: 'descripcion', name: 'descripcion'},
			{data: 'idFilaAccion', name: 'idFilaAccion'},
			{data: 'created_at', name: 'created_at'},
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
</script>

@endsection
