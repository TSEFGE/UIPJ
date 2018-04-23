$(function () {
    $('#fechaAlta').datetimepicker({
        format: 'YYYY-MM-DD',
        keepOpen:true,
        minDate: moment().subtract(1500, 'years').format('YYYY-MM-DD'),
        maxDate: moment(),
        widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
    });
    $('#fechaAltaEmpresa').focus(function(){
        $('#cajados').css("padding-bottom", '160px');
    });
    $('#fechaAltaEmpresa').focusout(function(){
        $('#cajados').css("padding-bottom", '20px');
    });
});   