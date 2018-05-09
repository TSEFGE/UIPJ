$("#btn-submit").prop('disabled',true);
totalesP=0;
totalesD=0;
totalesTrab=0;
totalesNotif=0;
tabs=0;
correcto=0;

 $('#tdenunciante.nav-tabs a').on('shown.bs.tab', function (e) {
     var index = $($(this).attr('href')).index();
     switch(index){
         case 0:
         totalesP = $('#collapsePersonales1 .vacio').length;
         $('#collapsePersonales1').isValid();           
         break;
         case 1: 
         totalesD = $('#collapseDir1 .vacio').length;
         $('#collapseDir1').isValid();       
         break;
         case 2:
         totalesTrab = $('#collapseTrab1 .vacio').length;
         $('#collapseTrab1').isValid();
         break;
         case 3:
         totalesNotif = $('#collapseNotifs1 .vacio').length; 
          $('#collapseNotifs1').isValid();
         break;
     }    
        tabs = $("#tdenunciante .visible").length;
        
      console.log("tabs", tabs);
 });
$('#tdenunciante.nav-tabs a').on('hidden.bs.tab', function(event){
    //event.preventDefault();
        var index= $($(this).attr('href')).index();      
        
        switch(index) {
            case 0:  
            totalesP = $('#collapsePersonales1 .vacio').length;
            $('#collapsePersonales1').isValid();
            break;                                
            case 1: 
            totalesD = $('#collapseDir1 .vacio').length;
            $('#collapseDir1').isValid();
            break;    
            case 2:
            totalesTrab = $('#collapseTrab1 .vacio').length;
            $('#collapseTrab1').isValid();
            break;    
            case 3:
            totalesNotif = $('#collapseNotifs1 .vacio').length;
            $('#collapseNotifs1').isValid();
            break;  
            default:
            break;
    }   
     
   
  });
$("#ctdenunciante").hover(function () { 
    totalesP = $('#collapsePersonales1 .vacio').length;
    correcto = $('#tdenunciante .correcto').length;
    if (correcto == tabs) {
        $("#btn-submit").prop('disabled', false);
    } else {
        $("#btn-submit").prop('disabled', true);
    }
    console.log("correcto", correcto);
    console.log("totalesP", totalesP);
});
$("#collapsePersonales1").hover(function () {
    $(this).isValid();
    var count = $('#collapsePersonales1 .error').length;
    var correctos = $('#collapsePersonales1 .valid').length;
    countvacio= totalesP;
     if (count == 0) {
         $("#txtTab1").hide();
     } else {
         $("#txtTab1").show();
         $("#txtTab1").html(count);
         
     }
     if (correctos == 0) {
         $("#t1").hide();
     } else if (correctos == totalesP) {
         $("#t1").show();
         $("#t1").html('<i class="fa fa-check" aria-hidden="true"></i>');
         $("#t1").addClass('correcto');
         pass0 = 1;
     } else {
         $("#t1").show();
         $("#t1").html(correctos);
         $("#t1").removeClass('correcto');
     }
     
   
    /*console.log("totalesP", totalesP);
    console.log("error", count);
    console.log("correctos", correctos);*/
    correcto = $('#tdenunciante .correcto').length;
});
$("#collapseDir1").hover(function () {
     $(this).isValid();
    var count = $('#collapseDir1 .error').length;
    var correctos = $('#collapseDir1 .valid').length;
    countvacio= totalesD;
     if (count == 0) {
         $("#txtTab2").hide();
     } else {
         $("#txtTab2").show();
         $("#txtTab2").html(count);
     }    
     if (correctos == 0) {
         $("#t2").hide();
     } else if (correctos == totalesD) {
         $("#t2").show();
         $("#t2").html('<i class="fa fa-check" aria-hidden="true"></i>');
         $("#t2").addClass('correcto');
         pass1 = 1;
     } else {
         $("#t2").show();
         $("#t2").html(correctos);
         $("#t2").removeClass('correcto');
     }
     console.log("totalesD", totalesD);
     /*
     countvacio = countvacio - count - correctos;
     if (countvacio == 0 || countvacio == totalesD) {
         $("#tab2").hide();
     } else {
         $("#tab2").show();
         $("#tab2").html(countvacio);
     }*/
    correcto = $('#tdenunciante .correcto').length;

});
$("#collapseTrab1").hover(function () {
     $(this).isValid();
    var count = $('#collapseTrab1 .error').length;
    var correctos = $('#collapseTrab1 .valid').length;
    countvacio = totalesTrab;
    if (count == 0) {
        $("#txtTab3").hide();
    } else {
        $("#txtTab3").show();
        $("#txtTab3").html(count);
    }
    
    if (correctos == 0) {
        $("#t3").hide();
    } else if (correctos == totalesTrab) {
        $("#t3").show();
        $("#t3").html('<i class="fa fa-check" aria-hidden="true"></i>');
        $("#t3").addClass('correcto');
        pass2 = 1;
    } else {
        $("#t3").show();
        $("#t3").html(correctos);
        $("#t3").removeClass('correcto');
    }
/*
    countvacio = countvacio - count - correctos;
    if (countvacio == 0 || countvacio == totalesTrab) {
        $("#tab3").hide();
    } else {
        $("#tab3").show();
        $("#tab3").html(countvacio);
    }
        */
    correcto = $('#tdenunciante .correcto').length;

});
 
$("#collapseNotifs1").hover(function () {
     $(this).isValid();
    var count = $('#collapseNotifs1 .error').length;
    var correctos = $('#collapseNotifs1 .valid').length;
    countvacio= totalesNotif;
    if (count == 0) {
        $("#txtTab4").hide();
    } else {
        $("#txtTab4").show();
        $("#txtTab4").html(count);
    }
   
    if (correctos == 0) {
        $("#t4").hide();
    } else if (correctos == totalesNotif) {
        $("#t4").show();
        $("#t4").html('<i class="fa fa-check" aria-hidden="true"></i>');
        $("#t4").addClass('correcto');
        pass3 = 1;
    } else {
        $("#t4").show();
        $("#t4").html(correctos);
    }
/*
    countvacio = countvacio - count - correctos;
    if (countvacio == 0 || countvacio == totales) {
        $("#tab4").hide();
    } else {
        $("#tab4").show();
        $("#tab4").html(countvacio);
    }*/
    correcto = $('#tdenunciante .correcto').length;
});

  
 