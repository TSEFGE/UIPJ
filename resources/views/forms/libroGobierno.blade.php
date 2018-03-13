@extends('template.form')

@section('title', 'Libro de Gobierno')

@section('contenido')
 
	<div class="boxtwo" align="center">
		<h6 align="center">Consultar Libro de Gobierno</h6>
		
		@include('fields.librofechas')
	</div>
	<div class="boxtwo">
		<div class="row">
			<div class="col">
				<div class="text-center">
					<a href="{{ route('home') }}" class="btn btn-dark text-center">Volver atrás</a>
				</div>
			</div>
			<div class="col">	
				<div class="text-center">
					{!! Form::submit('Consultar', ['class' => 'btn btn-dark', 'id' => 'btn-submit']) !!}
				</div>
			</div>
		</div>
	</div>
	{!! Form::close() !!}
@endsection
@push('PilaScripts')

<script type="text/javascript">
$(function () {
        $('#fechaLibroIni').datetimepicker({
           format: 'YYYY-MM-DD',
        
       });
    });

      $(function () {
        $('#fechaLibroFin').datetimepicker({
           format: 'YYYY-MM-DD',
           maxDate: moment()
       });
    });
	
    $(function () {
        $('#fechaLibroIni').datetimepicker();
        $('#fechaLibroFin').datetimepicker({
            useCurrent: false
        });
        $("#fechaLibroIni").on("change.datetimepicker", function (e) {
            $('#fechaLibroFin').datetimepicker('minDate', e.date);
        });
        $("#fechaLibroFin").on("change.datetimepicker", function (e) {
            $('#fechaLibroIni').datetimepicker('maxDate', e.date);
        });
    });
</script>

@endpush