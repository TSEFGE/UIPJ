
$("#btn-submit").prop('disabled',true);
totalesP2=0;
totalesD2=0;
totalesTrab2=0;
totalesNotif2=0;
totalesDenun=0;
tabs=0;
correcto=0;

 $('#tdenunciado.nav-tabs a').on('shown.bs.tab', function (e) {
     var index = $($(this).attr('href')).index();
     switch(index){
		 case 0:
		 totalesP2 = $("#collapsePersonales2 .vacio").length;         
         $('#collapsePersonales2').isValid();            
         break;
		 case 1: 
		 totalesD2 = $("#collapseDir2 .vacio").length;       
         $('#collapseDir2').isValid();       
         break;
		 case 2:
		 totalesTrab2 = $("#collapseTrab2 .vacio").length;
         $('#collapseTrab2').isValid();
         break;
		 case 3:
		 totalesNotif2= $("#collapseNotifs2 .vacio").length;
          $('#collapseNotifs2').isValid();
         break;
		 case 4:
		 totalesDenun= $("#collapseDenun2 .vacio").length;
         $('#collapseDenun2').isValid();
         break;
     }

      tabs = $("#tdenunciado .visible").length;        
      console.log("tabs", tabs);
     
 });

$('#tdenunciado.nav-tabs a').on('hidden.bs.tab', function(event){
	var index= $($(this).attr('href')).index();

	switch(index) {
	 case 0:                               
	 totalesP2 = $("#collapsePersonales2 .vacio").length;         
     $('#collapsePersonales2').isValid();
	break;                                
	case 1:
	totalesD2 = $("#collapseDir2 .vacio").length;       
    $('#collapseDir2').isValid();
	break;

	case 2:
	totalesTrab2 = $("#collapseTrab2 .vacio").length;
    $('#collapseTrab2').isValid();
	break;

	case 3:
	totalesNotif2= $("#collapseNotifs2 .vacio").length;
    $('#collapseNotifs2').isValid();	
	break;

	case 4:
	totalesDenun= $("#collapseDenun2 .vacio").length;
    $('#collapseDenun2').isValid();
	break;

	default:
	break;
}
	
});


$("#ctdenunciado").hover(function () { 
    //totalesP2 = $('#collapsePersonales2 .vacio').length;
    totalesDenun = $('#lol .vacio').length;
	//totalesD2 = $("#collapseDir2 .vacio").length;
    correcto = $('#tdenunciado .correcto').length;
    if (correcto == tabs) {
        $("#btn-submit").prop('disabled', false);
    } else {
        $("#btn-submit").prop('disabled', true);
    }
    /*console.log("correcto",correcto);
    console.log("totalesP2", totalesP2);*/
});

$("#collapsePersonales2").hover(function () {
    $(this).isValid();
    var count = $('#collapsePersonales2 .error').length;
    var correctos = $('#collapsePersonales2 .valid').length;
    countvacio= totalesP2;
     if (count == 0) {
         $("#error").hide();
     } else {
         $("#error").show();
         $("#error").html(count);
         
     }
     if (correctos == 0) {
         $("#bien").hide();
     } else if (correctos == totalesP2) {
         $("#bien").show();
         $("#bien").html('<i class="fa fa-check" aria-hidden="true"></i>');
         $("#bien").addClass('correcto');
         pass0 = 1;
     } else {
         $("#bien").show();
         $("#bien").html(correctos);
         $("#bien").removeClass('correcto');
     }
   
});

$("#collapseDir2").hover(function () {
     $(this).isValid();
    var count = $('#collapseDir2 .error').length;
    var correctos = $('#collapseDir2 .valid').length;    
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
    
});
$("#collapseTrab2").hover(function () {
     $(this).isValid();
    var count = $('#collapseTrab2 .error').length;
    var correctos = $('#collapseTrab2 .valid').length;    
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

});
 
$("#collapseNotifs2").hover(function () {
     $(this).isValid();
    var count = $('#collapseNotifs2 .error').length;
    var correctos = $('#collapseNotifs2 .valid').length;    
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
   });


    $("#collapseDenun2").hover(function () {
     $(this).isValid();
    var count = $('#collapseDenun2 .error').length;
    var correctos = $('#collapseDenun2 .valid').length;    
    if (count == 0) {
        $("#error4").hide();
    } else {
        $("#error4").show();
        $("#error4").html(count);
    }
   
    if (correctos == 0) {
        $("#bien4").hide();
    } else if (correctos == totalesDenun) {
        $("#bien4").show();
        $("#bien4").html('<i class="fa fa-check" aria-hidden="true"></i>');
        $("#bien4").addClass('correcto');
        pass3 = 1;
    } else {
        $("#bien4").show();
		$("#bien4").html(correctos);
		$("#bien4").removeClass('correcto');
    }
	console.log("denun",totalesDenun);
	console.log("correcto denun",correctos);
});
