$(function() {
    $('#fechaAlta').datetimepicker({
        format: 'DD-MM-YYYY',
        keepOpen: true,
        minDate: moment().subtract(1500, 'years'),
        maxDate: moment(),
        widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
    });
    $('#fechaAltaEmpresa').focus(function() {
        $('#cajados').css("padding-bottom", '160px');
    });
    $('#fechaAltaEmpresa').focusout(function() {
        $('#cajados').css("padding-bottom", '20px');
    });
});