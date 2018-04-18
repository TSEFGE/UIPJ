@extends('template.form')

@section('title', 'Agregar víctima, ofendido u apoderado legal')

@section('contenido')
{!! Form::open(['route' => 'store.denunciante', 'method' => 'POST']) !!}
{{ csrf_field() }}
<div class="card-header">
	<div class="row">
		<div class="col">
			<div class="text-left">
				<div class="row">

					<div class="col-6">
						<div class="form-group">
							<label class="col-form-label col-form-label-sm" for="formGroupExampleInput">¿Es víctima?</label>
							<div class="clearfix"></div>
							<div class="form-check form-check-inline">
								<label class="form-check-label col-form-label col-form-label-sm">
									<input class="form-check-input" type="radio" id="esVictima1" name="esVictima" value="1" required> Sí
								</label>
							</div>
							<div class="form-check form-check-inline">
								<label class="form-check-label col-form-label col-form-label-sm">
									<input class="form-check-input" type="radio" id="esVictima2" name="esVictima" value="0" required> No
								</label> 
							</div>
						</div>
					</div>
					<div  id="tipop" class="col-6" >
						@include('fields.tipo-persona')
					</div>
				</div>
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
					@if(!empty($idCarpeta)) {!! Form::hidden('idCarpeta', $idCarpeta) !!} @endif
				</div>
				<div class="" id="datosPer">
					<div id="denunciante">

						<ul id="tdenunciante" class="nav nav-tabs">
							<li class="nav-item " id="datosPer">
								<a class="nav-link tab active pestaña " id="p-personal" data-toggle="tab" href="#collapsePersonales1"><p id="personal" class="pestaña" ><i class="fa fa-user-circle-o" aria-hidden="true"></i></p>
								<div id="espacio-notif"><span id="tab1" class="xvacio"></span>
									<span id="txtTab1" class="xerror"></span>
									<span id="t1" class="bien"></span></div>																
								</a>
							</li>
							<li class="nav-item" id="datosDir">
								<a class="nav-link" data-toggle="tab" id="p-direccion" href="#collapseDir1"><p id="direccion" class="pestaña"><i class="fa fa-address-card" aria-hidden="true"></i></p>
								<div id="espacio-notif1"><span id="tab2" class="xvacio"></span>
									<span id="txtTab2" class="xerror"></span>
									<span id="t2" class="bien"></span></div>								
								</a>
							</li>
							<li class="nav-item" id="datosTrab">
								<a class="nav-link" data-toggle="tab"  href="#collapseTrab1"><p id="dtrabajo" class="pestaña"> <i class="fa fa-industry" aria-hidden="true"></i></p>									
								<div id="espacio-notif2"><span id="tab3" class="xvacio"></span>
									<span id="txtTab3" class="xerror"></span>
									<span id="t3" class="bien"></span></div>
								</a>
							</li>
							<li class="nav-item" id="datosNotif">
								<a class="nav-link" data-toggle="tab"  href="#collapseNotifs1"><p id="dnotificaciones" class="pestaña"><i class="fa fa-bell" aria-hidden="true"></i></p>
									<div id="espacio-notif3"><span id="tab4" class="xvacio"></span>
									<span id="txtTab4" class="xerror"></span>
									<span id="t4" class="bien"></span></div>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div id="cajados" class="boxtwo">
					<div class="tab-content" id="ctdenunciante">
						<div class="tab-pane active container" id="collapsePersonales1">
							@include('fields.personales')
							
							@include('fields.extra-denunciante')


						</div>
						<div class="tab-pane container" id="collapseDir1">
							@include('fields.direcciones')
						</div>
						<div class="tab-pane container" id="collapseTrab1">
							@include('fields.lugartrabajo')
						</div>
						<div class="tab-pane container" id="collapseNotifs1">
							@include('fields.notificaciones')
						</div>
					</div>
				</div>
					<!-- Fin pestañas -->


		</div>
	</div>
</div>


{!! Form::close() !!} @endsection @section('tabla')
<div class="boxtwo">
	@section('titulo-tabla', 'Denunciantes registrados') @include('tables.denunciantes')
</div>
@endsection @push('PilaScripts')
<script type="text/javascript">
	$(document).ready(function() {
					$('#tipop').hide(); 

});
	$('input[type=radio][name=esVictima]').change(function() {
		if (this.value == 0) {
			swal("Atención", "Ha seleccionado registrar un denunciante como ofendido .", "warning")
		} else if (this.value == 1) {
			swal("Atención", "Ha seleccionado registrar un denunciante como victima.", "warning")
		}
			$('#tipop').show();
	});



</script>



@endpush





