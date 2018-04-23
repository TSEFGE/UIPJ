$(function () {
    $('#fechaInicial').datetimepicker({
       format: 'YYYY-MM-DD',
       defaultDate: moment(),
       widgetPositioning: {
        vertical: 'bottom',
        horizontal: 'left'
    }
   });
});

$(function () {
    $('#horaInter').datetimepicker({
       format: 'LT',
       maxDate: moment(),
       widgetPositioning: {
        vertical: 'bottom',
        horizontal: 'left'
    }
   });
});
$(function () {
    $('#fechaiph2').datetimepicker({
       format: 'YYYY-MM-DD',
       maxDate: moment(),
       widgetPositioning: {
        vertical: 'bottom',
        horizontal: 'left'
    }
   });
});
$(function () {
    $('#fechadet').datetimepicker({
        format: 'YYYY-MM-DD',
        defaultDate: moment(),
        widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
    });
});