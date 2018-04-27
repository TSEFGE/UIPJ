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