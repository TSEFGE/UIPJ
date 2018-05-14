$("#dtrabajo").addClass('visible');
$('#idOcupacion').change(function(event) {
    var ocupacion = $('#idOcupacion').val();
    if (ocupacion == 2947) {
        $("#dtrabajo").removeClass('visible');
    } else {
        $("#dtrabajo").addClass('visible');
    }
});
$("#autoridad").addClass('visible');
$("#direccion").addClass('visible');
$("#dnotificaciones").addClass('visible');
$("#personal").addClass('visible');
$("input [type= text]").addClass('vacio');
$("select").addClass('vacio');
$("select").attr('data-validation', 'required');
$("select").attr('data-validation-event', 'change');
$(document).ready(function() {
    $("#numInterno").val("S/N");
    $("#numExterno").val("S/N");
    $("#numInterno2").val("S/N");
    $("#numExterno2").val("S/N");
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