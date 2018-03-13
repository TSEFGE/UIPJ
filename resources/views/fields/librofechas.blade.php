<div class="form-group" align="center">
	<div class="row">  
		<div class="col-6" align="center">
		<div class="form-group">
			{!! Form::label('fechaLibroIni', 'De Fecha:', ['class' => 'col-form-label-sm']) !!}
			<div class="input-group date" id="fechaLibroIni" data-target-input="nearest">
						{!! Form::text('fechaLibroIni', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaLibroIni', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
						<div class="input-group-append" data-target="#fechaLibroIni" data-toggle="datetimepicker">
								<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
				</div>
		</div>
	</div>
	
<div class="col-6" align="center" >
		<div class="form-group">
			{!! Form::label('fechaLibroFin', 'A Fecha:', ['class' => 'col-form-label-sm']) !!}
			<div class="input-group date" id="fechaLibroFin" data-target-input="nearest">
						{!! Form::text('fechaNacimiento', null, ['class' => 'form-control form-control-sm datetimepicker-input', 'data-target' => '#fechaLibroFin', 'data-toggle' => 'datetimepicker', 'required', 'placeholder' => 'DD/MM/AAAA']) !!}
						<div class="input-group-append" data-target="#fechaLibroFin" data-toggle="datetimepicker">
								<div class="input-group-text"><i class="fa fa-calendar"></i></div>
						</div>
				</div>
		</div>
	</div>


	</div>

</div>


