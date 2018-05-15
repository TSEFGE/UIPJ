@extends('template.main')

@section('title', 'Carpetas de UAT')

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
				<a href="{{ route('home') }}" class="btn btn-primary " data-toggle="tooltip" title="Inicio"><i class="fa fa-home" aria-hidden="true"></i></a>
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
					            <th>ACCIONES</th>
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
				<div class="stack text-left " >				
					<h5> <strong> Número de carpeta:</strong></h5>
					<h4 class="modal-title" id="numeroCarpeta"></h4>
				</div>							
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
				{!! Form::open(['route' => 'asignar.carpeta', 'method' => 'POST'])  !!}
				<div class="row">
					<div class="form-group col-6" >
						<label for="denunciantes"><strong> Denunciantes</strong></label>
						<div id="denunciantes"></div>
					</div>
					<div class="form-group col-6" >
						<label for="denunciantes"><strong> Denunciados</strong></label>
						<div id="denunciados"></div>
					</div>
					<div class="form-group col-12">
						<center><label for="acusaciones"><strong> Acusaciones</strong></label></center>
						<div id="acusaciones"></div>
					</div>
					<div class="form-group col-12">
						<center><label for="motivo" style="margin:0 auto;"><strong> Motivo</strong></label></center>
						<div  id="motivo"></div>

					</div>
				</div>
				<div class="form-group col">
						{!! Form::label('idFiscal', 'ASIGNAR A:') !!}
						{!! Form::select('idFiscal', $users,null, ['id'=>'user','class' => 'form-control', 'required','placeholder'=>'Seleccione un fiscal']) !!}
				</div>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
				{!! Form::hidden('idCarpeta', null) !!}

				{!! Form::submit('Guardar', ['class' => 'btn btn-primary', 'id' => 'btn-submit']) !!}
				{!! Form::close() !!}
            </div>
        </div>

    </div>
</div>
@endsection

@push('scripts')
	<script src="{{ asset('plugins/select2/js/select2.min.js')}}" ></script>

	<script src="{{ asset('plugins/datatables/js/datatables.min.js')}}" ></script>

	<script type="text/javascript">


		// setInterval( function () {
		// 	table.ajax.reload( null, false );
		// }, 20000 );
	</script>
@endpush
@push('docready-js')
	$('#user').select2();
	var table = $('#carpetasUAT').DataTable({
		language: {
			"url": "{{ asset('plugins/datatables/json/Spanish.json') }}"
		},
		ajax: "{{ route('carpetas-uat.DataTable') }}",
		columns: [
			{data: 'numCarpetaUat', name: 'numCarpetaUat'},
			{data: 'unidad', name: 'unidad'},
			{data: 'nombreFiscalUat', name: 'nombreFiscalUat'},
			{data: 'fechaInicio', name: 'fechaInicio'},
			{data: 'nombre', name: 'nombre'},
			{data: null, "orderable": false,  render: function ( data, type, row ) {
					return '<center data-toggle="tooltip" title="Asignar"><button id="modalBoton" type="button" name="'+data.numCarpetaUat+'" value="'+data.id+'" class="btn btn-primary" data-toggle="modal" data-target="#carpeta"><i class="nav-icon fa fa-exchange" ></i></button></center>'
				}

			},
		]
	});
	$('#carpetasUAT').on('click', '#modalBoton', function(){
			   this.preventDefault;
			   nombre=this.name;
			   numero=this.value;
			   console.log(numero);
			    console.log(`${nombre}`);
			   var idCarpeta="";
				$.get(route('datos.CarpetaUAT', numero), function(response, estado){
				idCarpeta=response['idCarpeta'];
				motivo=response['observacionesEstatus']['observacionesEstatus'];
				//motivo=response['motivo'][0]['observacionesEstatus'];
				console.log('idCarpeta: '+idCarpeta);
				console.log(response['denunciantes'].length);
				numTe=response['denunciantes'].length;
				numDo=response['denunciados'].length;
				numAcu=response['acusaciones'].length;
				$( "#denunciantes" ).html('');
				for (var i = 0; i < numTe ; i++) {
					$( "#denunciantes" ).append("<p>"+response['denunciantes'][i]['nombre']+"</p>");
				}
				$( "#denunciados" ).html('');
				for (var i = 0; i < numDo ; i++) {
					$( "#denunciados" ).append("<p>"+response['denunciados'][i]['nombre']+"</p>");
				}
				$( "#acusaciones" ).html('');
				var acusaciones="";
				for (var i = 0; i < numAcu ; i++) {
					acusaciones=acusaciones+' <strong>Delito:</strong> </br> '+response['acusaciones'][i]['delito']+"</br>"+" <strong>Entre calles:</strong> "+response['acusaciones'][i]['entreCalle']+"<strong>y: </strong>"+response['acusaciones'][i]['yCalle']+"</br><strong> Punto de referencia: </strong></br>"+response['acusaciones'][i]['puntoReferencia']+"</br>";
					// $( "#acusaciones" ).append("Delito: "+response['acusaciones'][i]['delito']);
					// $( "#acusaciones" ).append("Entre calle: "+response['acusaciones'][i]['entreCalle']);
				}
				$( "#acusaciones" ).append(acusaciones);
				$( "#motivo").html(''+motivo);
				console.log(`Motivo ${motivo}`);

				$( "input[name*='idCarpeta']" ).val(idCarpeta);
				});
			   $("#carpeta h4").text(nombre);
			});
@endpush
