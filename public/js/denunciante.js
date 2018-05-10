//Es victima 
$('#esVictima').on('click', function(e) {
    $('#fechanac').datetimepicker("destroy");
    if ($('#esVictima').is(':checked')) {
        $('#fechanac').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            maxDate: moment().subtract(0, 'years').format('YYYY-MM-DD'),
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
        });
        $('#edad').attr({
            'min': 0
        });
    } else {
        $('#edad').attr({
            'min': 16
        });
        $('#fechanac').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            maxDate: moment().subtract(16, 'years').format('YYYY-MM-DD'),
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
        });
    }
    $('#fechanac').trigger('change');
    $('#edad').val('16');
});
$("#idLengua").change(function(event) {
    console.log("entra");
    var lengua = $("#idLengua").val();
    if (lengua == 69 || lengua == 70) {
        $("#datosInterprete").hide();
        $("#nombreInterprete").removeClass('vacio');
        $("#nombreInterprete").removeClass('valid');
        $("#nombreInterprete").removeClass('error');
        $("#lugarTrabInterprete").removeClass('vacio');
        $("#lugarTrabInterprete").removeClass('valid');
        $("#lugarTrabInterprete").removeClass('error');
    } else {
        $("#datosInterprete").show();
        $("#nombreInterprete").addClass('vacio');
        $("#lugarTrabInterprete").addClass('vacio');
    }
});