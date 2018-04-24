$(function () {
    $('#fechaInicial').datetimepicker({
       format: 'DD-MM-YYYY',
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
       format: 'DD-MM-YYYY',
       maxDate: moment(),
       widgetPositioning: {
        vertical: 'bottom',
        horizontal: 'left'
    }
   });
});
$(function () {
    $('#fechadet').datetimepicker({
        format: 'DD-MM-YYYY',
        defaultDate: moment(),
        widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
    });
});