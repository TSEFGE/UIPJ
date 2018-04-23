$(document).ready(function(){
$('#fechaCit').datetimepicker({
    format: 'YYYY-MM-DD',
    defaultDate: moment(), 
    minDate: moment(),          
     widgetPositioning: {
      vertical: 'bottom',
      horizontal: 'left'
  }
 });
$(function () { //Datetimepicker a la zquierda y debajo para vizualizar mejor no se oculte en la nav
  $('#horaCit').datetimepicker({
      format: 'LT',
      defaultDate: moment(),  
      widgetPositioning: {
          vertical: 'bottom',
          horizontal: 'left'
      }
 });
});
});
