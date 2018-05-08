$('input [type=text]').addClass('vacio');
$("#idDelito , #idAgrupacion1, #idAgrupacion2 , #idModalidad , #formaComision , #consumacion ").addClass('vacio');
$('#lugardelito select ').addClass('vacio');

    //Para delito, con o sin violencia
    $('#violencia').hide();
    $(".cv").prop('disabled', true);
    $("#conViolencia1").change(function(event){
        if ($('#conViolencia1').is(':checked') ) {
            $('#violencia').hide();
            $(".cv").prop('disabled', true);
            $("#idTipoArma , #idArma, #idPosibleCausa ").removeClass('vacio');
            correcto=0;
            $('span').removeClass('correcto')
            //$("#idArma").prop('disabled', true);
        }
    });
    $("#conViolencia2").change(function(event){
        if ($('#conViolencia2').is(':checked') ) {
            $('#violencia').show();
            $(".cv").prop('disabled', false);
            $("#idTipoArma , #idArma, #idPosibleCausa ").addClass('vacio');
            $('span').removeClass('correcto')
            //$("#idTipoArma").prop('disabled', false);
            //$("#idArma").prop('disabled', false);
        }
    });
    // Tempus Dominus 
    $(function () {
        $('#fechadelit').datetimepicker({
           format: 'DD-MM-YYYY',
           maxDate: moment(),
           widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
       });
       // Ampliacion de el contenedor a clickear los input de tempus
        $('#fecha').focus(function(){
            $('#cajados').css("padding-bottom", '80px');
        });
        $('#fecha').focusout(function(){
            $('#cajados').css("padding-bottom", '10px');
        });
    });

    $(function () { //Datetimepicker a la zquierda y debajo para vizualizar mejor no se oculte en la nav
        $('#horadelit').datetimepicker({
            format: 'LT',
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
       });
    });

   