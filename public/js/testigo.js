$("#collapsePersonalesTestigo select").addClass('vacio');
$("#narracionUno").addClass('vacio');
$("#edad").addClass('vacio');
$("#collapseDirTestigo select").addClass('vacio');
$("#collapseTrabTestigo select").addClass('vacio');
$("#collapseNotifsTestigo select").addClass('vacio');
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
    $("#datosDir").addClass('visible');
    $('#idOcupacion').change(function(event) {
        var ocupacion = $('#idOcupacion').val();
        if (ocupacion == 2947) {
            $("#datosTrab").removeClass('visible');
        } else {
            $("#datosTrab").addClass('visible');
        }
    });
    $("#datosNotif").addClass('visible');
    $("#datosPer").addClass('visible');
    //Para generar Notificaciones se asigna clase
    $("#nombres").addClass("vacio");
    $("#primerAp").addClass("vacio");
    $("#segundoAp").addClass("vacio");
    $("#fechaNacimiento").addClass("vacio");
    $("#rfc").addClass("vacio");
    $("#homo").addClass("vacio");
    $("#curp").addClass("vacio");
    $("#telefono").addClass("vacio");
    $("#motivoEstancia").addClass("vacio");
    // $("#docIdentificacion").addClass("vacio");     
    $("#numDocIdentificacion").addClass("vacio");
    //  $("#narracionUno").addClass("vacio");
    $("#calle").addClass("vacio");
    $("#numExterno").addClass("vacio");
    $("#numInterno").addClass("vacio");
    $("#lugarTrabajo").addClass("vacio");
    $("#telefonoTrabajo").addClass("vacio");
    $("#calle2").addClass("vacio");
    $("#numExterno2").addClass("vacio");
    $("#numInterno2").addClass("vacio");
    $("#calle3").addClass("vacio");
    $("#numExterno3").addClass("vacio");
    $("#numInterno3").addClass("vacio");
    $("#correo").addClass("vacio");
    $("#telefonoN").addClass("vacio");
    $("#fax").addClass("vacio");
    $("#alias").addClass("vacio");
    $("#personasBajoSuGuarda").addClass("vacio");
    $("#ingreso").addClass("vacio");
    $("#residenciaAnterior").addClass("vacio");
    $("#vestimenta").addClass("vacio");
    $("#senasPartic").addClass("vacio");
    //  $("#narracionUno").addClass("vacio"); //para comprobar en autoridad
    $("#docIdentificacion").change(function(event) {
        var otro = $("#docIdentificacion").val();
        if (otro == "OTRO") {
            $("#otrodocto").show();
            $("#otroDocumento").removeClass("valid");
            $("#otroDocumento").removeClass("error");
            $("#otroDocumento").addClass("vacio");
        } else {
            $("#otrodocto").hide();
            $("#otroDocumento").removeClass("vacio");
            $("#otroDocumento").removeClass("valid");
            $("#otroDocumento").removeClass("error");
        }
    });
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
        }
    });
    $("#idLengua").change(function(event) {
        console.log("entra");
        var lengua = $("#idLengua").val();
        if (lengua == 69 || lengua == 70) {
            $("#datosInterprete").hide();
            $("#nombreInterprete").removeClass('vacio');
            $("#nombreInterprete").removeClass('valid');
            $("#nombreInterprete").removeClass('error');
            $("#lugarTrabInterprete").removeClass('vacio');
            $("#lugarTrabInterprete").removeClass('valid');
            $("#lugarTrabInterprete").removeClass('error');
        } else {
            $("#datosInterprete").show();
            $("#nombreInterprete").addClass('vacio');
            $("#lugarTrabInterprete").addClass('vacio');
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