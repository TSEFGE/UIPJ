<div class="row">
	<div class="col-12" id="personaFisica">
		<div class="row">
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('nombres', 'Nombre', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('nombres', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ][\s]*){1,100}$', 'data-validation-error-msg'=>'Nombre debe contener al menos una letra', 'data-validation-event'=>'keyup']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('primerAp', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('primerAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ][\s]*){1,50}$','data-validation-error-msg'=>'Primer apellido debe contener al menos una letra', 'data-validation-event'=>'keyup']) !!}
				</div> 
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('segundoAp', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('segundoAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido','data-validation'=>'custom' ,'data-validation-regexp'=>'^(([A-ZÁÉÑÍÓÚ][\s]*)?){2,50}$','data-validation-error-msg'=>'Segundo apellido debe contener solo letras', 'data-validation-event'=>'keyup']) !!}
				</div>
			</div>
			@isset($puestos)
			<div class="col-2">
				<div class="form-group">
					{!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'col-form-label-sm']) !!}
					<div class="input-group date" id="fechanac2" data-target-input="nearest">
						{!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechanac2', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'DD-MM-AAAA','data-validation'=>'date', 'data-validation-format'=>'dd-mm-yyyy','data-validation-error-msg'=>'Ingrese fecha en el formato correcto DD-MM-AAAA']) !!}
						<div class="input-group-append" data-target="#fechanac2" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-1">
				<div class="form-group">
					{!! Form::label('edad', 'Edad', ['class' => 'col-form-label-sm']) !!}
					{!! Form::number('edad', null, ['class' => 'form-control form-control-sm edad2', 'placeholder' => 'Ingrese la edad', 'min' => 0, 'max' => 150, 'data-validation'=>'number','data-validation-allowing' =>'range[0;150]']) !!}					
					
				</div>
			</div>
			@else
			<div class="col-2">
				<div class="form-group">
					{!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'col-form-label-sm']) !!}
					<div class="input-group date" id="fechanac" data-target-input="nearest">
						{!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechanac', 'data-toggle' => 'datetimepicker', 'placeholder' => 'DD-MM-AAAA','data-validation'=>'date', 'data-validation-format'=>'dd-mm-yyyy','data-validation-error-msg'=>'Ingrese fecha en el formato correcto DD-MM-AAAA']) !!}
						<div class="input-group-append" data-target="#fechanac" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-1">
				<div class="form-group">
					{!! Form::label('edad', 'Edad', ['class' => 'col-form-label-sm']) !!}
					{!! Form::number('edad', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la edad', 'min' => 16, 'max' => 150 ,'data-validation'=>'number','data-validation-allowing' =>'range[0;150]', 'data-validation-error-msg'=>'Valor de 0 a 150','data-validation-event'=>'change']) !!}					
				</div>
			</div>
			@endisset

			<div class="col-3">
			<div class="form-group">
				{!! Form::label('idNacionalidad', 'Nacionalidad', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('idNacionalidad', $nacionalidades, '1', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la nacionalidad', 'data-validation'=>'required','data-validation-event'=>'change']) !!}
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				{!! Form::label('idEstadoOrigen', 'Entidad federativa de origen', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('idEstadoOrigen', $estados, '30', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'data-validation'=>'required','data-validation-event'=>'change']) !!}
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				{!! Form::label('idMunicipioOrigen', 'Municipio de origen', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('idMunicipioOrigen',$municipiosVer,null, [ 'placeholder' => 'Seleccione un municipio','class' => 'form-control form-control-sm', 'data-validation'=>'required','data-validation-event'=>'change']) !!}
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				{!! Form::label('sexo', 'Sexo', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('sexo', ['SIN INFORMACION' => 'SIN INFORMACION', 'HOMBRE' => 'HOMBRE', 'MUJER' => 'MUJER'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el sexo', 'data-validation'=>'required','data-validation-event'=>'change']) !!}
			</div>
		</div>


		<div class="col-3">
			<div class="form-group">
				{!! Form::label('curp', 'C.U.R.P.', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('curp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el C.U.R.P.','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$','data-validation-error-msg'=>'CURP inválido']) !!}

			</div>
		</div>	

		<div class="col-3">
			<div class="row no-gutters">
				<div class="col-7">
					{!! Form::label('rfc', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('rfc', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.', 'required','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z,Ñ,&]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))$','data-validation-error-msg'=>'RFC inválido']) !!}
					<input type="hidden" name="rfcAux" id="rfcAux">
				</div>

				<div class="col-5">
					{!! Form::label('homo', 'Homoclave', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('homo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Homoclave', 'required','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z\d]{2}([A\d]))$','data-validation-error-msg'=>'Homoclave inválida']) !!}

				</div>
			</div>
		</div>

		<div class="col-3">
			<div class="form-group">
				{!! Form::label('idEtnia', 'Etnia', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('idEtnia', $etnias, '1', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la etnia', 'data-validation'=>'required','data-validation-event'=>'change']) !!}
			</div>
		</div>
		<div class="col-3">
			<div class="form-group">
				{!! Form::label('idLengua', 'Lengua', ['class' => 'col-form-label-sm']) !!}
				{!! Form::select('idLengua', $lenguas, '70', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la lengua' , 'data-validation'=>'required','data-validation-event'=>'change']) !!}
			</div>
		</div>

		<div class="col-12"  id="datosInterprete" style="display:none;">

			<div class="row">
				<div class="col-6">
					<div class="form-group"> 
						{!! Form::label('nombreInterprete', 'Nombre del intérprete', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('nombreInterprete',null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese nombre','data-validation'=>'length', 'data-validation-length'=>'2-200','data-validation-error-msg'=>'El nombre debe contener al menos 2 letras', 'data-validation-event'=>'keyup']) !!}
					</div>
				</div>
				<div class="col-6">
					<div class="form-group"> 
						{!! Form::label('lugarTrabInterprete', 'Lugar de trabajo del intérprete', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('lugarTrabInterprete',null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese nombre de la organización','data-validation'=>'length', 'data-validation-length'=>'2-200','data-validation-error-msg'=>'El nombre debe contener al menos 2 letras', 'data-validation-event'=>'keyup']) !!}
					</div>
				</div>
			</div>
		</div>


			<div class="col-3">
				<div class="form-group">
					{!! Form::label('telefono', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('telefono', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'data-validation'=>'custom', 'data-validation-regexp'=>'^([0-9]{10,15}|(SIN NUMERO)|(SN))$','data-validation-error-msg'=>'Teléfono debe contener de diez a quince números o SIN NUMERO', 'data-validation-event'=>'keyup']) !!}
				</div>
			</div>
			
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('motivoEstancia', 'Motivo de estancia', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('motivoEstancia', "SIN INFORMACION", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el motivo de estancia','data-validation'=>'length', 'data-validation-length'=>'5-200','data-validation-error-msg'=>'El motivo de la estancia debe contener al menos cinco letras', 'data-validation-event'=>'keyup']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('idOcupacion', 'Ocupación', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idOcupacion', $ocupaciones, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la ocupación','data-validation'=>'required' ,'data-validation-event'=>'change']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('idEstadoCivil', 'Estado civil', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idEstadoCivil', $estadoscivil, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el estado civil','data-validation'=>'required' ,'data-validation-event'=>'change']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('idReligion', 'Religión', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idReligion', $religiones, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la religión','data-validation'=>'required' ,'data-validation-event'=>'change']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('idEscolaridad', 'Escolaridad', ['class' => 'col-form-label-sm']) !!}
					{!! Form::select('idEscolaridad', $escolaridades, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la escolaridad','data-validation'=>'required' ,'data-validation-event'=>'change']) !!}
				</div>
			</div>
			<div class="col-3">
				<div class="form-group">
					{!! Form::label('docIdentificacion', 'Documento de identificación', ['class' => 'col-form-label-sm']) !!}					

					{!! Form::select('docIdentificacion', ['CREDENCIAL DE ELECTOR' => 'CREDENCIAL DE ELECTOR', 'PASAPORTE' => 'PASAPORTE','	
					CARTILLA MILITAR' => 'CARTILLA MILITAR','LICENCIA PARA CONDUCIR' => 'LICENCIA PARA CONDUCIR','CREDENCIAL ESCOLAR' => 'CREDENCIAL ESCOLAR','VISA' => 'VISA','OTRO' => 'OTRO'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione uno', 'required','data-validation'=>'required' ,'data-validation-event'=>'change']) !!}
				</div>
			</div>

			<div class="col-3" id="otrodocto" style="display:none;">
				<div class="form-group"> 
					{!! Form::label('otroDocumento', 'Otro documento identificación', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('otroDocumento',null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese documento','data-validation'=>'length', 'data-validation-length'=>'5-200','data-validation-error-msg'=>'El nombre de documento debe contener al menos 5 caracteres', 'data-validation-event'=>'keyup']) !!}
				</div>
			</div>				

			<div class="col-3">
				<div class="form-group">
					{!! Form::label('numDocIdentificacion', 'Núm. de documento de identificación', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('numDocIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el núm. del docto. de identificación','data-validation'=>'custom', 'data-validation-regexp'=>'^[0-9]{1,50}$','data-validation-error-msg'=>'Ingrese al menos un número', 'data-validation-event'=>'keyup']) !!}
				</div>


			</div>


			<div class="col-12">
				<div class="form-group">
					{!! Form::label('narracionUno', 'Narración', ['class' => 'col-form-label-sm']) !!}
					{!! Form::textarea('narracionUno', null, ['class' => 'form-control form-control-sm','id' => 'narracionUno','rows' => '3', 'data-validation'=>'required' , 'data-validation-event'=>'keyup']) !!}
				</div>
			</div>

		</div>
	</div>
	<!--      DATOS DE PERSONA MORAL       -->
	<div class="col-12" id="personaMoral">
		<div class="row">
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('nombres2', 'Nombre', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('nombres2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','data-validation'=>'custom' ,'data-validation-regexp'=>'^(([A-ZÁÉÑÍÓÚ]|[0-9])(-|,|.|\s)*){1,100}$', 'data-validation-error-msg'=>'Nombre debe contener al menos una letra']) !!}
				</div>
			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('fechaAltaEmpresa', 'Fecha de alta de persona moral', ['class' => 'col-form-label-sm']) !!}<div class="input-group date" id="fechaAlta" data-target-input="nearest">
						{!! Form::text('fechaAltaEmpresa', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaAlta', 'data-toggle' => 'datetimepicker', 'placeholder' => 'AAAA-MM-DD','data-validation'=>'date', 'data-validation-format'=>'dd-mm-yyyy','data-validation-error-msg'=>'Ingrese fecha en el formato correcto AAAA-MM-DD']) !!}
						<div class="input-group-append" data-target="#fechaAlta" data-toggle="datetimepicker">
							<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-6">
				<div class="row no-gutters">
					<div class="col-7">
						{!! Form::label('rfc2', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('rfc2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z,Ñ,&]{3}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))$','data-validation-error-msg'=>'RFC inválido']) !!}
					</div>

					<div class="col-5">
						{!! Form::label('homo2', 'Homoclave', ['class' => 'col-form-label-sm']) !!}
						{!! Form::text('homo2', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Homoclave','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z\d]{2}([A\d]))$','data-validation-error-msg'=>'Homoclave inválida']) !!}

					</div>
				</div>

			</div>
			<div class="col-6">
				<div class="form-group">
					{!! Form::label('representanteLegal', 'Representante legal', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('representanteLegal', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre del representante legal','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ]|[\s]|[.]){1,300}$', 'data-validation-error-msg'=>'Nombre del representante legal no debe estar vacio']) !!}

				</div>
			</div>
			<div class="col-12">
				<div class="form-group">
					{!! Form::label('narracionUnoM', 'Narración', ['class' => 'col-form-label-sm']) !!}
					{!! Form::textarea('narracionUnoM', null, ['class' => 'form-control form-control-sm','id' => 'narracionUnoM','rows' => '3', 'data-validation'=>'required' , 'data-validation-event'=>'keyup']) !!}
				</div>
			</div>
		</div>
	</div>
</div>

{{--<div id="accordion" role="tablist">
	<div class="card">
		<div class="card-header" role="tab" id="headingGenerales">
			<h5 class="mb-0">
				<a data-toggle="collapse" href="#collapseGen" aria-expanded="true" aria-controls="collapseGen">
					Datos personales
				</a>
			</h5>
		</div>
		<div id="collapseGen" class="collapse show boxcollapse" role="tabpanel" aria-labelledby="headingGenerales" data-parent="#accordion">
			<div class="boxtwo">
				@include('fields.personales')
			</div>
		</div>
	</div>
</div>--}}
