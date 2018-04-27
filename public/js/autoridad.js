$("#personal").addClass('visible');


    $('#idOcupacion').change(function(event) {
                var ocupacion = $('#idOcupacion').val();
                if (ocupacion == 2947) {          
           $("#dtrabajo").addClass('visible');  
            }
            else
            {
            $("#dtrabajo").removeClass('visible');  
            }

            });


$("#direccion").addClass('visible');
$("#dnotificaciones").addClass('visible');