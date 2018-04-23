//Es victima 
$('#esVictima').on('click',function(e) {
    $('#fechanac').datetimepicker("destroy");
if ($('#esVictima').is(':checked') ) {

  $('#fechanac').datetimepicker({
      format: 'YYYY-MM-DD',
      minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
      maxDate: moment().subtract(0, 'years').format('YYYY-MM-DD'),
      widgetPositioning: {
          vertical: 'bottom',
          horizontal: 'left'
      }
  });

  $('#edad').attr({'min':0});
}else{
  $('#edad').attr({'min':16});
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
