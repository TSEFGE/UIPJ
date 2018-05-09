/*
$("input [type= text]").attr('data-validation-event','keyup');
$("select").attr('data-validation', 'required');
$("select").attr('data-validation-event', 'change');

$("#vehiculos").hover(function(){
    $(this).isValid();
});**/
$('input[type= text]').val("SIN INFORMACION");
$('textarea').val("SIN INFORMACION");
$("#idMarca").val(955).trigger('change');
$("#idSubmarca").val(24403).trigger('change');
$("#idClaseVehiculo").val(10).trigger('change');
$("#idTipoVehiculo").val(25).trigger('change');