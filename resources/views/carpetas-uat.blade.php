@extends('template.main')

@section('title', 'Libro de oficios')

@push('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatables/css/datatables.min.css') }}">
@endpush

@section('content')
<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">
				{{--Aqui van radios, etc --}}
			</div>
		</div>
		<div class="col">
			<div class="text-right">
				<a href="{{ route('home') }}" class="btn btn-dark text-center">Regresar</a>
			</div>
		</div>
	</div>
</div>

@include('forms.errores')
<div class=" card-body boxone">
	<div class="row no-gutters">
		<div class="col-12">
			<div class="boxtwo">
				<div class="table">
					<div class="text-center">
					</div>
					<table id="oficiosTable" class="table table-bordered table-striped" width="100%">
						<thead>
							<tr>
								{{-- <th>No.</th> --}}
								<th>NO. UAT</th>
								{{--<th>Tipo</th>--}}
								<th>CREADA POR</th>
								<th>FECHA</th>
					            <th>Estado</th>
					            <th>ASIGNAR</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>
@endsection

@push('scripts')
	<script src="{{ asset('plugins/datatables/js/datatables.min.js')}}" ></script>
	<script type="text/javascript">
		// var table = $('#oficiosTable').DataTable({
		// 	language: {
		// 		"url": "{{ asset('plugins/datatables/json/Spanish.json') }}"
		// 	},
		// 	ajax: "{{ route('carpetas-uat.DataTable') }}",
		// 	columns: [
		// 		{data: 'numOficio', name: 'numOficio'},
		// 		{data: 'numCarpeta', name: 'numCarpeta'},
		// 		{data: 'extra', name: 'extra'},
		// 		{data: 'created_at', name: 'created_at'},
		// 		{data: null, "orderable": false,  render: function ( data, type, row ) {
		// 				return "<center><a href='' class='btn btn-primary'><i class='fa fa-reorder' aria-hidden='true'></i> Asignar</a></center>"
		// 			}
        //
		// 		},
		// 	]
		// });

		// setInterval( function () {
		// 	table.ajax.reload( null, false );
		// }, 20000 );
	</script>
@endpush
