
$("#dtrabajo").addClass('visible');     
   $('#idOcupacion').change(function(event) {
                var ocupacion = $('#idOcupacion').val();
                if (ocupacion == 2947) {          
           $("#dtrabajo").removeClass('visible');  
            }
            else
            {
            $("#dtrabajo").addClass('visible');  
            }

            });

$("#autoridad").addClass('visible');
$("#direccion").addClass('visible');
$("#dnotificaciones").addClass('visible');
$("#personal").addClass('visible');
$("input [type= text]").addClass('vacio');
$("select").addClass('vacio');
$("select").attr('data-validation','required');
$("select").attr('data-validation-event', 'change');

$(document).ready(function() {
    $("#numInterno").val("S/N");
    $("#numExterno").val("S/N");
    $("#numInterno2").val("S/N");
    $("#numExterno2").val("S/N");
   

     });