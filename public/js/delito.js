

    //Para delito, con o sin violencia
    $('#violencia').hide();
    $(".cv").prop('disabled', true);
    $("#conViolencia1").change(function(event){
        if ($('#conViolencia1').is(':checked') ) {
            $('#violencia').hide();
            $(".cv").prop('disabled', true);
            //$("#idTipoArma").prop('disabled', true);
            //$("#idArma").prop('disabled', true);
        }
    });
    $("#conViolencia2").change(function(event){
        if ($('#conViolencia2').is(':checked') ) {
            $('#violencia').show();
            $(".cv").prop('disabled', false);
            //$("#idTipoArma").prop('disabled', false);
            //$("#idArma").prop('disabled', false);
        }
    });
    // Tempus Dominus 
    $(function () {
        $('#fechadelit').datetimepicker({
           format: 'YYYY-MM-DD',
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