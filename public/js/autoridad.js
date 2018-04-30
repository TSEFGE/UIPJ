$("#personal").addClass('visible');


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


$("#direccion").addClass('visible');
$("#dnotificaciones").addClass('visible');

$(document).ready(function() {
    $("#numInterno").val("S/N");
    $("#numExterno").val("S/N");
    $("#numInterno2").val("S/N");
    $("#numExterno2").val("S/N");
   

     });