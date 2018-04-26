 $('#fechanac').datetimepicker({
    format: 'DD-MM-YYYY',
    minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
    maxDate: moment().subtract(16, 'years').format('YYYY-MM-DD'),
    widgetPositioning: {
        vertical: 'bottom',
        horizontal: 'left'
    }
});
$('#edad').attr({
    'min': 16
});
$("#fechanac").on("change.datetimepicker", function(e) {
    $('#edad').val(moment().diff(e.date, 'years'));
});
$("#edad").change(function() {
    var anios = $('#edad').val();
    $('#fechanac').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
});

 $(document).ready(function(){ 

 //Para generar Notificaciones se asigna clase
                $("#nombres").addClass("vacio");
                $("#primerAp").addClass("vacio");
                $("#segundoAp").addClass("vacio");
                $("#fechaNacimiento").addClass("vacio");
                $("#rfc").addClass("vacio");
                $("#homo").addClass("vacio");
                $("#curp").addClass("vacio");
                $("#telefono").addClass("vacio");
                $("#motivoEstancia").addClass("vacio");
               // $("#docIdentificacion").addClass("vacio");     
                $("#numDocIdentificacion").addClass("vacio");
           //  $("#narracionUno").addClass("vacio");

                $("#calle").addClass("vacio");
                $("#numExterno").addClass("vacio");    
                $("#numInterno").addClass("vacio");

                $("#lugarTrabajo").addClass("vacio");
                $("#telefonoTrabajo").addClass("vacio"); 
                $("#calle2").addClass("vacio");
                $("#numExterno2").addClass("vacio");   
                $("#numInterno2").addClass("vacio");
                  
                
                $("#calle3").addClass("vacio");
                $("#numExterno3").addClass("vacio");   
                $("#numInterno3").addClass("vacio");
                $("#correo").addClass("vacio");
                $("#telefonoN").addClass("vacio");     
                $("#fax").addClass("vacio");

                $("#alias").addClass("vacio");
                $("#personasBajoSuGuarda").addClass("vacio");     
                $("#ingreso").addClass("vacio");
                $("#residenciaAnterior").addClass("vacio");
                $("#vestimenta").addClass("vacio");
                $("#senasPartic").addClass("vacio");   
              //  $("#narracionUno").addClass("vacio"); //para comprobar en autoridad


$("#docIdentificacion").change(function(event){

    var otro= $("#docIdentificacion").val();
    
    if(otro=="OTRO"){
    
      
      $("#otrodocto").show();
      $("#otrodocto").addClass("vacio");  

    }
    else
    {

      $("#otrodocto").hide(); 
      $("#otrodocto").removeClass("vacio");
    }

});


});