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
								<th>No.</th>
								<th>Carpeta</th>
								{{--<th>Tipo</th>--}}
								<th>Dirigido a</th>
								<th>Fecha</th>
					            <th>Estado</th>
					            <th>Descargar documento</th>
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
		var table = $('#oficiosTable').DataTable({
			language: {
				"url": "{{ asset('plugins/datatables/json/Spanish.json') }}"
			},
			ajax: "{{ route('api.oficios') }}",
			columns: [
				{data: 'numOficio', name: 'numOficio'},
				{data: 'numCarpeta', name: 'numCarpeta'},
				{data: 'extra', name: 'extra'},
				//{data: 'tipo', name: 'tipo'},
				{data: 'created_at', name: 'created_at'},
				//{data: 'status', name: 'status'},
				{data: null, "orderable": true,  render: function ( data, type, row ) {
					if(data.status == 1){
						return "PENDIENTE"
					}else{
						if(data.status == 2){
							return "APLICADA"
						}else{
							return "RECHAZADA"
						}
					}
				} 
				},
				//{data: 'oficio', name: 'oficio'},
				{data: null, "orderable": false,  render: function ( data, type, row ) {
					if(data.extra == "PERICIALES"){
						return "<center><a href='\storage/diligencias-sp\\"+ data.oficio +"' class='btn btn-primary'><i class='fa fa-reorder' aria-hidden='true'></i> Ver</a></center>"
					}else{
						return "<center><a href='\storage/diligencias-pm\\"+ data.oficio +"' class='btn btn-primary'><i class='fa fa-reorder' aria-hidden='true'></i> Ver</a></center>"
					}
				} 
				},  
			]
		});

		setInterval( function () {
			table.ajax.reload( null, false );
		}, 20000 );
	</script>
@endpush