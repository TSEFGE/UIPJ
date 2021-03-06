$('#fechanac').datetimepicker({
    format: 'DD-MM-YYYY',
    minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
    maxDate: moment().subtract(16, 'years').format('YYYY-MM-DD'),
    widgetPositioning: {
        vertical: 'bottom',
        horizontal: 'left'
    }
});
$('#edad').attr({
    'min': 16
});
$("#fechanac").on("change.datetimepicker", function(e) {
    $('#edad').val(moment().diff(e.date, 'years'));
});
$("#edad").change(function() {
    var anios = $('#edad').val();
    $('#fechanac').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
});
$(document).ready(function() {
    $('select').removeClass('vacio ');
    $('select').removeClass('valid');
    $('select').removeClass('error');
    $('textarea').removeClass('vacio');
    $('textarea').removeClass('error');
    $('textarea').removeClass('valid');
    $('input').removeClass('vacio ');
    $('input').removeClass('error ');
    $('input').removeClass('valid ');
    $("#motivoEstancia").val("SIN INFORMACION");
    $("#numInterno").val("S/N");
    $("#numInterno2").val("S/N");
    $("#numInterno3").val("S/N");
    $("#numInternoC").val("S/N");
    $("#numExterno").val("S/N");
    $("#numExterno2").val("S/N");
    $("#numExterno3").val("S/N");
    $("#numExternoC").val("S/N");
    $("#alias").val("SIN INFORMACION");
    $("#vestimenta").val("SIN INFORMACION");
    $("#senasPartic").val("SIN INFORMACION");
    $("#fax").val("SIN INFORMACION");
    $("#correo").val("sin@informacion.com");
    $('#idOcupacion').change(function(event) {
        var ocupacion = $('#idOcupacion').val();
        if (ocupacion == 2947) {
            $("#idEstado2").val(33).prop('disabled', true);
            $('#idEstado2').select2('destroy');
            $("#idMunicipio2").val(2496).prop('disabled', true);
            $('#idMunicipio2').select2('destroy');
            $("#idLocalidad2").val(27153).prop('disabled', true);
            $('#idLocalidad2').select2('destroy');
            $("#idColonia2").val(49172).prop('disabled', true);
            $('#idColonia2').select2('destroy');
            $("#cp2").val(49172).prop('disabled', true);
            $('#cp2').select2('destroy');
            $("#lugarTrabajo").val("SIN INFORMACION").prop('disabled', true);
            $("#telefonoTrabajo").val("SIN INFORMACION").prop('disabled', true);
            $("#calle2").val("SIN INFORMACION").prop('disabled', true);
            $("#numExterno2").val("S/N").prop('disabled', true);
            $("#numInterno2").val("S/N").prop('disabled', true);
            $('#datosTrab').removeClass('visible');
        } else {
            $("#idEstado2").prop('disabled', false);
            $('#idEstado2').select2();
            $("#lugarTrabajo").prop('disabled', false);
            $("#telefonoTrabajo").prop('disabled', false);
            $("#idMunicipio2").prop('disabled', false);
            $('#idMunicipio2').select2();
            $("#idLocalidad2").prop('disabled', false);
            $('#idLocalidad2').select2();
            $("#idColonia2").prop('disabled', false);
            $('#idColonia2').select2();
            $("#cp2").prop('disabled', false);
            $('#cp2').select2();
            $("#calle2").prop('disabled', false);
            $("#numExterno2").prop('disabled', false);
            $("#numInterno2").prop('disabled', false);
            $('#datosTrab').addClass('visible');
        }
    });
    $("#docIdentificacion").change(function(event) {
        var otro = $("#docIdentificacion").val();
        if (otro == "OTRO") {
            $("#otrodocto").show();
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").removeClass("valid");
            $("#otroDocumento").addClass("vacio");
        } else {
            $("#otrodocto").hide();
            $("#otroDocumento").removeClass("vacio");
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").removeClass("valid");
        }
    });
    $("#otroDocumento").keyup(function() {
        var nombreOtro = $("#otroDocumento").val();
        console.log(nombreOtro);
        if (nombreOtro == "CREDENCIAL DE ELECTOR" || nombreOtro == "INE" || nombreOtro == "IFE" || nombreOtro == "CREDENCIAL") {
            console.log("entra a otro doc");
            $("#otrodocto").hide();
            $("#otroDocumento").removeClass("vacio");
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").removeClass("valid");
            $("#docIdentificacion").val("CREDENCIAL DE ELECTOR").trigger('change');
        } else if (nombreOtro == "PASAPORTE") {
            $("#otrodocto").hide();
            $("#otroDocumento").removeClass("vacio");
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").removeClass("valid");
            $("#docIdentificacion").val("PASAPORTE").trigger('change');
        } else if (nombreOtro == "CARTILLA MILITAR") {
            $("#otrodocto").hide();
            $("#otroDocumento").removeClass("vacio");
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").removeClass("valid");
            $("#docIdentificacion").val("CARTILLA MILITAR").trigger('change');
        } else if (nombreOtro == "LICENCIA PARA CONDUCIR" || nombreOtro == "LICENCIA DE CONDUCIR" || nombreOtro == "LICENCIA" || nombreOtro == "LICENCIA DE MANEJAR" || nombreOtro == "LICENCIA DE MANEJO") {
            $("#otrodocto").hide();
            $("#otroDocumento").removeClass("vacio");
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").removeClass("valid");
            $("#docIdentificacion").val("LICENCIA PARA CONDUCIR").trigger('change');
        } else if (nombreOtro == "CREDENCIAL ESCOLAR" || nombreOtro == "CREDENCIAL DE LA ESCUELA") {
            $("#otrodocto").hide();
            $("#otroDocumento").removeClass("vacio");
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").removeClass("valid");
            $("#docIdentificacion").val("CREDENCIAL ESCOLAR").trigger('change');
        } else if (nombreOtro == "VISA") {
            $("#otrodocto").hide();
            $("#otroDocumento").removeClass("vacio");
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").removeClass("valid");
            $("#docIdentificacion").val("VISA").trigger('change');
        }
    });
});