
$("input [type= text]").attr('data-validation-event','keyup');
$("select").attr('data-validation', 'required');
$("select").attr('data-validation-event', 'change');

$("#vehiculos").hover(function(){
    $(this).isValid();
});