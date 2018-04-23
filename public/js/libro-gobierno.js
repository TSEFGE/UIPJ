$(document).ready(function(){
$(function () {
    $('#fechaLibroIni').datetimepicker({
        format: 'YYYY-MM-DD',
        maxDate: moment(),
        useCurrent: false,
        widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }

    });
    $('#fechaLibroFin').datetimepicker({
        format: 'YYYY-MM-DD',
        maxDate: moment(),
        useCurrent: false,
        widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
    });
    $("#fechaLibroIni").on("change.datetimepicker", function (e) {
        $('#fechaLibroFin').datetimepicker('minDate', e.date);
    });
    $("#fechaLibroFin").on("change.datetimepicker", function (e) {
        $('#fechaLibroIni').datetimepicker('maxDate', e.date);
    });
});

});