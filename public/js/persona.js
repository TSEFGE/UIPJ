$('#fechanac').datetimepicker({
    format: 'DD-MM-YYYY',
    minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
    maxDate: moment().subtract(16, 'years').format('YYYY-MM-DD'),
    widgetPositioning: {
        vertical: 'bottom',
        horizontal: 'left'
    }
});
  $('#edad').attr({'min':16});

$("#fechanac").on("change.datetimepicker", function (e) {
    $('#edad').val(moment().diff(e.date,'years'));
});
$( "#edad" ).change(function() {
    var anios = $('#edad').val();
    $('#fechanac').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
});
$(document).ready(function(){    
$("#motivoEstancia").val("SIN INFORMACION");
$("#numInterno").val("S/N");
$("#numInterno2").val("S/N");
$("#numInterno3").val("S/N");
$("#numInternoC").val("S/N");
$("#numExterno").val("S/N");
$("#numExterno2").val("S/N");
$("#numExterno3").val("S/N");
$("#numExternoC").val("S/N");
$("#fax").val("SIN INFORMACION");
$("#correo").val("sin@informacion.com");


$("#docIdentificacion").change(function(event){

    var otro= $("#docIdentificacion").val();
    
    if(otro=="OTRO"){
    
      
      $("#otrodocto").show();
           
    }
    else
    {

      $("#otrodocto").hide(); 
    }

});
});

