@extends('template.form')

@section('title', 'Agregar autoridad') 
@section('contenido')
 {!! Form::open(['route' => 'store.autoridad', 'method' => 'POST'])  !!}
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
<!-- Pestañas -->
		<div id="tautoridad">
				<ul id="tabsautoridad" class="nav nav-tabs">
 					<li class="nav-item">
    					<a class="nav-link active" id="personal" data-toggle="tab" href="#collapsePersonales3"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
    							<span id="vacioa" class="xvacio"></span>
								<span id="errora" class="error"></span>
								<span id="biena" class="bien"></span>
  					</li>
  					<li class="nav-item">
    					<a class="nav-link" id="direccion" data-toggle="tab" href="#collapseDir3"><i class="fa fa-address-card" aria-hidden="true"></i></a>
    					<span id="vacioa1" class="xvacio"></span>
								<span id="errora1" class="error"></span>
								<span id="biena1" class="bien"></span>
  					</li>
  					<li class="nav-item">
    					<a class="nav-link" data-toggle="tab" id="dtrabajo" href="#collapseTrab3"><i class="fa fa-industry" aria-hidden="true"></i></a>
    					<span id="vacioa2" class="xvacio"></span>
								<span id="errora2" class="error"></span>
								<span id="biena2" class="bien"></span>
  					</li>  		
			   		<li class="nav-item">
			    		<a class="nav-link" data-toggle="tab" id="autoridad" href="#collapseAutoridad"><i class="fa fa-shield" aria-hidden="true"></i></a>
			    				<span id="vacioa3" class="xvacio"></span>
								<span id="errora3" class="error"></span>
								<span id="biena3" class="bien"></span>
			  		</li>
				</ul>
		</div>
		<div id="cajados" class="boxtwo">
		<div class="tab-content" id="ctautoridad">
			<div class="tab-pane active container" id="collapsePersonales3">  		
				@include('fields.personales-aut')		
			</div>
			<div class="tab-pane container" id="collapseDir3">  		
				@include('fields.direcciones')		
			</div>
			<div class="tab-pane container" id="collapseTrab3">  		
				@include('fields.lugartrabajo')		
			</div>
			<div class="tab-pane container" id="collapseAutoridad">  		
				@include('fields.extra-aut')		
			</div>
		</div>
		</div>
<!-- Fin pestañas -->
			
		</div>
	</div>
</div>
{!! Form::close() !!}
@endsection

@section('tabla')
	<div class="boxtwo">
		@section('titulo-tabla', 'Autoridades registradas')
		@include('tables.autoridades')
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
$("#motivoEstancia").addClass("vacio");
$("#docIdentificacion").addClass("vacio");  	
$("#numDocIdentificacion").addClass("vacio");

$("#calle").addClass("vacio");
$("#numExterno").addClass("vacio");  	
$("#numInterno").addClass("vacio");

$("#lugarTrabajo").addClass("vacio");
$("#telefonoTrabajo").addClass("vacio");  	
$("#calle2").addClass("vacio");

$("#antiguedad").addClass("vacio");
$("#horarioLaboral").addClass("vacio");

});

</script>
@endpush






	