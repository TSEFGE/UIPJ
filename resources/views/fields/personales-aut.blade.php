<div class="row">
	<div class="col-3">
		<div class="form-group">
					{!! Form::label('nombres', 'Nombre', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('nombres', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el nombre','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ][\s]*){1,100}$']) !!}	
		</div>
	</div>
	<div class="col-3">
			<div class="form-group">
					{!! Form::label('primerAp', 'Primer apellido', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('primerAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el primer apellido','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-ZÁÉÑÍÓÚ][\s]*){1,50}$']) !!}
			</div>
	</div>
	<div class="col-3">
		<div class="form-group">
					{!! Form::label('segundoAp', 'Segundo apellido', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('segundoAp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el segundo apellido','data-validation'=>'custom' ,'data-validation-regexp'=>'^(([A-ZÁÉÑÍÓÚ][\s]*)?){1,50}$']) !!}

				</div>
	</div>
	<div class="col-2">
		<div class="form-group">
			{!! Form::label('fechaNacimiento', 'Fecha de nacimiento', ['class' => 'col-form-label-sm']) !!}
			<div class="input-group date" id="fechanac" data-target-input="nearest">
						{!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechanac', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'AAAA-MM-DD','data-validation'=>'date', 'data-validation-format'=>'yyyy-mm-dd']) !!}
						<div class="input-group-append" data-target="#fechanac" data-toggle="datetimepicker">
								<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
				</div>
		</div>
	</div>
	<div class="col-1">
		<div class="form-group">
			{!! Form::label('edad', 'Edad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::number('edad', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese la edad', 'min' => 0, 'max' => 150, 'required']) !!}
		</div>
	</div>
	
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('sexo', 'Sexo', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('sexo', ['SIN INFORMACION' => 'SIN INFORMACION', 'HOMBRE' => 'HOMBRE', 'MUJER' => 'MUJER'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el sexo', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idNacionalidad', 'Nacionalidad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idNacionalidad', $nacionalidades, '1', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la nacionalidad', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idEstadoOrigen', 'Entidad federativa de origen', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstadoOrigen', $estados, '30', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una entidad federativa', 'required']) !!}
		</div>
	</div>
	<div class="col-3">	
		<div class="row no-gutters">
			<div class="col-7">
				{!! Form::label('rfc', 'R.F.C.', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('rfc', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el R.F.C.','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z,Ñ,&]{4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1]))$']) !!}
				
			</div>

			<div class="col-5">
				{!! Form::label('homo', 'Homoclave', ['class' => 'col-form-label-sm']) !!}
				{!! Form::text('homo', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Homoclave','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z\d]{2}([A\d]))$']) !!}
				
			</div>	
		</div>	 
		
	</div>
		<div class="col-3">
			<div class="form-group">
				{!! Form::label('curp', 'C.U.R.P.', ['class' => 'col-form-label-sm']) !!}
					{!! Form::text('curp', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el C.U.R.P.','data-validation'=>'custom' ,'data-validation-regexp'=>'^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0[1-9]|1[0-2])(?:0[1-9]|[12]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$']) !!}
			</div>
		</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idEtnia', 'Etnia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEtnia', $etnias, '1', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la etnia', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idLengua', 'Lengua', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idLengua', $lenguas, '70', ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la lengua', 'required']) !!}
		</div>
	</div>

	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idMunicipioOrigen', 'Municipio de origen', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idMunicipioOrigen',$municipiosVer,null, ['placeholder' => 'Seleccione un municipio', 'class' => 'form-control form-control-sm', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('telefono', 'Teléfono', ['class' => 'col-form-label-sm']) !!}
			
					{!! Form::text('telefono', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el teléfono', 'data-validation'=>'custom', 'data-validation-regexp'=>'^([0-9]{10,15}|(SIN NUMERO))$']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('motivoEstancia', 'Motivo de estancia', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('motivoEstancia', "SIN INFORMACION", ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el motivo de estancia','data-validation'=>'length', 'data-validation-length'=>'5-200']) !!}
			
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idOcupacion', 'Ocupación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idOcupacion', $ocupaciones, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la ocupación', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idEstadoCivil', 'Estado civil', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEstadoCivil', $estadoscivil, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione el estado civil', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idReligion', 'Religión', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idReligion', $religiones, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la religión', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('idEscolaridad', 'Escolaridad', ['class' => 'col-form-label-sm']) !!}
			{!! Form::select('idEscolaridad', $escolaridades, null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione la escoalridad', 'required']) !!}
		</div>
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('docIdentificacion', 'Documento de identificación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('docIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el docto. de identificacion','data-validation'=>'length', 'data-validation-length'=>'3-50']) !!}
		</div>
		
	</div>
	<div class="col-3">
		<div class="form-group">
			{!! Form::label('numDocIdentificacion', 'Núm. de documento de identificación', ['class' => 'col-form-label-sm']) !!}
			{!! Form::text('numDocIdentificacion', null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese el núm. del docto. de identificación','data-validation'=>'custom', 'data-validation-regexp'=>'^[0-9]{1,50}$']) !!}
		</div>
		

	</div>
</div>
@include('fields.ajaxCurp')
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
