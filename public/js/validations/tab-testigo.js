$("#btn-submit").prop('disabled',true);
totalesP2=0;
totalesD2=0;
totalesTrab2=0;
totalesNotif2=0;
tabs=0;
correcto=0;


$('#tabstestigo.nav-tabs a').on('shown.bs.tab', function (e) {
     var index = $($(this).attr('href')).index();
     switch(index){
		 case 0:
		 totalesP2 = $("#collapsePersonalesTestigo .vacio").length;         
         $('#collapsePersonalesTestigo').isValid();            
         break;
		 case 1: 
		 totalesD2 = $("#collapseDirTestigo .vacio").length;       
         $('#collapseDirTestigo').isValid();       
         break;
		 case 2:
		 totalesTrab2 = $("#collapseTrabTestigo .vacio").length;
         $('#collapseTrabTestigo').isValid();
         break;
		 case 3:
		 totalesNotif2= $("#collapseNotifsTestigo .vacio").length;
          $('#collapseNotifsTestigo').isValid();
         break;
		 
     }

      tabs = $("#tabstestigo .visible").length;        
      console.log("tabs", tabs);
     
 });

$('#tabstestigo.nav-tabs a').on('hidden.bs.tab', function(event){

	var index= $($(this).attr('href')).index();
	switch(index) {
	 case 0:
	 totalesP2 = $("#collapsePersonalesTestigo .vacio").length;         
     $('#collapsePersonalesTestigo').isValid();                 
	break;
	
	case 1:
	totalesD2 = $("#collapseDirTestigo .vacio").length;         
    $('#collapseDirTestigo').isValid();   
	break;

	case 2:
	totalesTrab2 = $("#collapseTrabTestigo .vacio").length;         
    $('#collapseTrabTestigo').isValid();   
	break;

	case 3:
	totalesNotif2 = $("#collapseNotifsTestigo .vacio").length;         
    $('#collapseNotifsTestigo').isValid();  
	break;

	default:
	break;
}
	tabs = $("#tabstestigo .visible").length;
});

$("#cttestigo").hover(function () { 
	totalesP2 = $('#collapsePersonalesTestigo .vacio').length;
    correcto = $('#tabstestigo .correcto').length;
    if (correcto == tabs) {
        $("#btn-submit").prop('disabled', false);
    } else {
        $("#btn-submit").prop('disabled', true);
    }
    console.log("correcto",correcto);
    console.log(totalesP2);
});

$("#collapsePersonalesTestigo").hover(function () {
    $(this).isValid();
    var count = $('#collapsePersonalesTestigo .error').length;
    var correctos = $('#collapsePersonalesTestigo .valid').length;
    countvacio= totalesP2;
     if (count == 0) {
         $("#error").hide();
     	  } 
     else {
         $("#error").show();
         $("#error").html(count);
          }
     if (correctos == 0)
     	 {
         $("#bien").hide();
     	 } 
     else if (correctos == totalesP2) {
         $("#bien").show();
         $("#bien").html('<i class="fa fa-check" aria-hidden="true"></i>');
         $("#bien").addClass('correcto');
         pass0 = 1;
     } else {
         $("#bien").show();
         $("#bien").html(correctos);
         $("#bien").removeClass('correcto');
     }
   
   correcto = $('#tabstestigo .correcto').length;
   console.log(totalesP2);
});

$("#collapseDirTestigo").hover(function () {
     $(this).isValid();
    var count = $('#collapseDirTestigo .error').length;
    var correctos = $('#collapseDirTestigo .valid').length;    
     if (count == 0) {
         $("#error1").hide();
     } else {
         $("#error1").show();
         $("#error1").html(count);
     }    
     if (correctos == 0) {
         $("#bien1").hide();
     } else if (correctos == totalesD2) {
         $("#bien1").show();
         $("#bien1").html('<i class="fa fa-check" aria-hidden="true"></i>');
         $("#bien1").addClass('correcto');
         pass1 = 1;
     } else {
         $("#bien1").show();
		 $("#bien1").html(correctos);
		 $("#bien1").removeClass('correcto');
     }
     console.log("totalesD2", totalesD2);
     correcto = $('#tabstestigo .correcto').length;
    
});
$("#collapseTrabTestigo").hover(function () {
     $(this).isValid();
    var count = $('#collapseTrabTestigo .error').length;
    var correctos = $('#collapseTrabTestigo .valid').length;    
    if (count == 0) {
        $("#error2").hide();
    } else {
        $("#error2").show();
        $("#error2").html(count);
    }
    
    if (correctos == 0) {
        $("#bien2").hide();
    } else if (correctos == totalesTrab2) {
        $("#bien2").show();
        $("#bien2").html('<i class="fa fa-check" aria-hidden="true"></i>');
        $("#bien2").addClass('correcto');
        pass2 = 1;
    } else {
        $("#bien2").show();
		$("#bien2").html(correctos);
		$("#bien2").removeClass('correcto');
    }
  correcto = $('#tabstestigo .correcto').length;


});
 
$("#collapseNotifsTestigo").hover(function () {
     $(this).isValid();
    var count = $('#collapseNotifsTestigo .error').length;
    var correctos = $('#collapseNotifsTestigo .valid').length;    
    if (count == 0) {
        $("#error3").hide();
    } else {
        $("#error3").show();
        $("#error3").html(count);
    }
   
    if (correctos == 0) {
        $("#bien3").hide();
    } else if (correctos == totalesNotif2) {
        $("#bien3").show();
        $("#bien3").html('<i class="fa fa-check" aria-hidden="true"></i>');
        $("#bien3").addClass('correcto');
        pass3 = 1;
    } else {
        $("#bien3").show();
		$("#bien3").html(correctos);
		$("#bien3").removeClass('correcto');
    }

      correcto = $('#tabstestigo .correcto').length;


   });


