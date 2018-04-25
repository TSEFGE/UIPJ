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
    $("#motivoEstancia").val("SIN INFORMACION");
    $("#numInterno").val("S/N");
    $("#numInterno2").val("S/N");
    $("#numInterno3").val("S/N");
    $("#numInternoC").val("S/N");
    $("#numExterno").val("S/N");
    $("#numExterno2").val("S/N");
    $("#numExterno3").val("S/N");
    $("#numExternoC").val("S/N");
    $("#fax").val("SIN INFORMACION");
    $("#correo").val("sin@informacion.com");
    $("#docIdentificacion").change(function(event) {
        var otro = $("#docIdentificacion").val();
        if (otro == "OTRO") {
            $("#otrodocto").show();
        } else {
            $("#otrodocto").hide();
        }
    });
    $('#idOcupacion').change(function(event) {
        var ocupacion = $('#idOcupacion').val();
        if (ocupacion == 2947) {
            /* var estado = $("#idEstado2").val();
             var idMunicipio2 = $("#idMunicipio2").val();
             var idLocalidad2 = $("#idLocalidad2").val();
             var idColonia2 = $("#idColonia2").val();
             var cp2 = $("#cp2").val();
             console.log(estado);
             console.log(idMunicipio2);
             console.log(idLocalidad2);
             console.log(idColonia2);
             console.log(cp2);*/
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
            $("#lugarTrabajo").prop('disabled', false);
            $("#telefonoTrabajo").prop('disabled', false);
            $("#idMunicipio2").prop('disabled', false);
            $("#idLocalidad2").prop('disabled', false);
            $("#idColonia2").prop('disabled', false);
            $("#cp2").prop('disabled', false);
            $("#calle2").prop('disabled', false);
            $("#numExterno2").prop('disabled', false);
            $("#numInterno2").prop('disabled', false);
        }
    });
});