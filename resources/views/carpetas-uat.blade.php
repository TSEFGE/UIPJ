@extends('template.main')

@section('title', 'CARPETAS FROM UAT')

@push('css')
	<link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/css/select2.css') }}">

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
					<table id="carpetasUAT" class="table table-bordered table-striped" width="100%">
						<thead>
							<tr>
								{{-- <th>No.</th> --}}
                                <th>NO. UAT</th>
								<th>UNIDAD</th>
								{{--<th>Tipo</th>--}}
								<th>CREADA POR</th>
								<th>FECHA</th>
					            <th>ESTADO</th>
					            <th>ASIGNAR</th>
							</tr>
						</thead>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="carpeta">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title" id="numeroCarpeta"></h3>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <div class="form-group col">
                    {!! Form::label('user', 'ASIGNAR A:') !!}
                    {!! Form::select('user', $users,null, ['id'=>'user','class' => 'form-control', 'required','placeholder'=>'Seleccione un fiscal']) !!}
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">CANCELAR</button>
                {!! Form::submit('ASIGNAR', ['class' => 'btn btn-success']) !!}
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
	<script src="{{ asset('plugins/select2/js/select2.min.js')}}" ></script>

	<script src="{{ asset('plugins/datatables/js/datatables.min.js')}}" ></script>

	<script type="text/javascript">

	var table = $('#carpetasUAT').DataTable({
		language: {
			"url": "{{ asset('plugins/datatables/json/Spanish.json') }}"
		},
		ajax: "{{ route('carpetas-uat.DataTable') }}",
		columns: [
			{data: 'numCarpetaUat', name: 'numCarpetaUat'},
			{data: 'idUnidad', name: 'idUnidad'},
			{data: 'nombreFiscalUat', name: 'nombreFiscalUat'},
			{data: 'fechaInicio', name: 'fechaInicio'},
			{data: 'nombre', name: 'nombre'},
			{data: null, "orderable": false,  render: function ( data, type, row ) {
					return '<center><button id="modalBoton" type="button" name="'+data.numCarpetaUat+'" value="'+data.id+'" class="btn btn-primary" data-toggle="modal" data-target="#carpeta">ASIGNAR</button></center>'
				}

			},
		]
	});
	$('#carpetasUAT').on('click', '#modalBoton', function(){

               this.preventDefault;
               nombre=this.name;
               numero=this.value;
               console.log(numero);
			   	$.get(route('datos.CarpetaUAT', numero), function(response, estado){
			   		if(response.res==true){
			   			console.log('true')
			   			swal({
			   				title: "Alerta",
			   				text: "Ya existe una persona registrada con ese CURP.",
			   				type: "warning",
			   				showCancelButton: false,
			   				confirmButtonClass: "btn-danger",
			   				confirmButtonText: "Aceptar",
			   				closeOnConfirm: false
			   			});
			   		}
			   	});



			   $("#carpeta h3").text(nombre);
               // swal({
               //         title: "¿Seguro que desea eliminar la sucursal "+nombre+"?",
               //         text: "No podrá deshacer este paso.",
               //         type: "warning",
               //         showCancelButton: true,
               //         cancelButtonText: "Cancelar",
               //         confirmButtonColor: "#DD6B55",
               //         confirmButtonText: "Confirmar",
               //         closeOnConfirm: false
               // }, function(isConfirm){
			   //
			   // });
            });
		// setInterval( function () {
		// 	table.ajax.reload( null, false );
		// }, 20000 );
	</script>
@endpush
@push('docready-js')
	$('#user').select2();
@endpush
