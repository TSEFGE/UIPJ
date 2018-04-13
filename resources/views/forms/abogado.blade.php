@extends('template.form')

@section('title', 'Agregar abogado')
@section('contenido')	

{!! Form::open(['route' => 'store.abogado', 'method' => 'POST'])  !!}
{{ csrf_field() }}
<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">
				{{--Aqui van radios, etc --}}
				</div>
			</div>
		<div class="col">	
			<div class="text-right">
			@include('forms.buttons')
			</div>
		</div>
	</div>
</div> 
@include('forms.errores')
<div class=" card-body boxone">
		<div class="row no-gutters">
		<div class="col-12">
				<div class="row">
						@if(!empty($idCarpeta))
							{!! Form::hidden('idCarpeta', $idCarpeta) !!}
						@endif	
				</div>
		<div id="tabogado">
				<ul id="tabsabogado" class="nav nav-tabs">
					 <li class="nav-item" >
						<a class="nav-link active" data-toggle="tab" href="#collapsePersonales3"><p id="personal" class="pestaña" ><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
								<div id="espacio-notif"><span id="vacio" class="xvacio"></span>
								<span id="error" class="xerror"></span>
								<span id="bien" class="bien"></span></div>
						</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#collapseTrab3"><p id="dtrabajo" class="pestaña"> <i class="fa fa-industry" aria-hidden="true"></i></p>
								<div id="espacio-notif2"><span id="vacio1" class="xvacio"></span>
								<span id="error1" class="xerror"></span>
								<span id="bien1" class="bien"></span></div>
					</a>
					  </li>  		
					   <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#collapseAutoridad"><p id="autoridad" class="pestaña"><i class="fa fa-shield" aria-hidden="true"></i></p>
						 		<div id="espacio-notif5"><span id="vacio2" class="xvacio"></span>
								<span id="error2" class="xerror"></span>
								<span id="bien2" class="bien"></span></div>
						</a>
					  </li>
				</ul>
		</div>	
		
			<div class="boxtwo">
				<div class="tab-content" id="ctabogado">
					<div class="tab-pane active container" id="collapsePersonales3">  		
						@include('fields.personales-abo')		
					</div>
					<div class="tab-pane container" id="collapseTrab3">  		
						@include('fields.lugartrabajo')		
					</div>
					<div class="tab-pane container" id="collapseAutoridad">  		
						@include('fields.extra-abo')		
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
{!! Form::close() !!}


@endsection
@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Abogados Registrados')
		@include('tables.abogados')
	</div>

@endsection
@push('PilaScripts')
<script type="text/javascript">
$(document).ready(function() {
					
$("#nombres").addClass("vacio");
$("#primerAp").addClass("vacio");
$("#segundoAp").addClass("vacio");
$("#rfc").addClass("vacio");
$("#homo").addClass("vacio");
$("#curp").addClass("vacio");
$("#telefono").addClass("vacio");

$("#lugarTrabajo").addClass("vacio");
$("#telefonoTrabajo").addClass("vacio"); 

$("#calle2").addClass("vacio");
$("#numExterno2").addClass("vacio");
$("#numInterno2").addClass("vacio");  	
$("#numInterno3").addClass("vacio");

$("#cedulaProf").addClass("vacio");
$("#correo").addClass("vacio");

	});
</script>
@endpush
