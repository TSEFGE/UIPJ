// ---- Transiciones BOTONES y pestañas---//

$( "#btn-reset" ).hover(function() {    
    $(this).html( "Limpiar campos" );    
  },function(){    
    $(this).html('<i class="fa fa-eraser" aria-hidden="true"></i>')
});  
$( "#regresocarpeta" ).hover(function() {    
    $(this).html( "Regresar a carpeta" );    
  },function(){    
    $(this).html('<i class="fa fa-folder-open" aria-hidden="true"></i>')
});  
  $( "#personal" ).hover(function() {    
        $(this).html( "Datos personales" );
        $("#espacio-notif").css("margin-left","90px");     
  }, function(){
    $(this).html('<i class="fa fa-user-circle-o" aria-hidden="true"></i>')
    $("#espacio-notif").css("margin-left","0px"); 
  });
  $( "#direccion" ).hover(function() {
      $(this).html( "Dirección" ); 
      $("#espacio-notif1").css("margin-left","35px");      
  }, function(){
    $(this).html('<i class="fa fa-address-card" aria-hidden="true"></i>')
    $("#espacio-notif1").css("margin-left","0px"); 
  });

  $( "#dtrabajo" ).hover(function() {
    $(this).html( "Datos del trabajo" ); 
    $("#espacio-notif2").css("margin-left","87px");               
  }, function(){
    $(this).html('<i class="fa fa-industry" aria-hidden="true"></i>')
    $("#espacio-notif2").css("margin-left","0px"); 
  });
  
  $( "#dnotificaciones" ).hover(function() {
    $(this).html( "Dirección para notificaciones" ); 
    $("#espacio-notif3").css("margin-left","170px");             
  }, function(){
    $(this).html('<i class="fa fa-bell" aria-hidden="true"></i>')
    $("#espacio-notif3").css("margin-left","0px"); 
  });
  $( "#dextra" ).hover(function() {
    $(this).html( "Otros datos" ); 
    $("#espacio-notif4").css("margin-left","90px");             
  }, function(){
    $(this).html('<i class="fa fa-asterisk" aria-hidden="true"></i>')
    $("#espacio-notif4").css("margin-left","0px"); 
  });
  $( "#autoridad" ).hover(function() {
    $(this).html( "Información sobre la autoridad" ); 
    $("#espacio-notif5").css("margin-left","90px");             
  }, function(){
    $(this).html('<i class="fa fa-shield" aria-hidden="true"></i>')
    $("#espacio-notif5").css("margin-left","0px"); 
  });