$("#btn-submit").prop('disabled',true);

$('input').addClass('vacio');
$('input').prop('data-validation-event', 'ready');
$('select').addClass('vacio');
$('#collapsePersonales1').isValid();

 $('#tdenunciante.nav-tabs a').on('shown.bs.tab', function (e) {
     var index = $($(this).attr('href')).index();
     switch(index){
         case 0:
         $('#collapsePersonales1').isValid();        
         break;
         case 1:        
         $('#collapseDir1').isValid();       
         break;
         case 2:
         $('#collapseTrab1').isValid();
         break;
         case 3:
          $('#collapseNotifs1').isValid();
         break;
     }
     
 });
$('#tdenunciante.nav-tabs a').on('hidden.bs.tab', function(event){
    //event.preventDefault();
        var index= $($(this).attr('href')).index();       
        
        switch(index) {
            case 0:  
            var countvacio = $('#collapsePersonales1 .vacio').length;
            totales=countvacio ;                                                      
            var count = $('#collapsePersonales1 .error').length; 
            if (count==0){
                $("#txtTab1").hide();
            } 
            else{  
                $("#txtTab1").show();                             
                $("#txtTab1").html(count); 
            }
            var correctos = $('#collapsePersonales1 .valid').length;
            if (correctos==0){
                $("#t1").hide();
            } 
            else if( correctos ==totales){
                $("#t1").show();
                $("#t1").html('<i class="fa fa-check" aria-hidden="true"></i>');
                $("#t1").addClass('correcto');
                pass0 =1;                              
            }
            else{
                $("#t1").show();                             
                $("#t1").html(correctos);
                $("#t1").removeClass('correcto');
            }                                 
            countvacio= countvacio-count-correctos;
            if (countvacio == 0 || countvacio == totales){
                $("#tab1").hide();
            } else{  
                $("#tab1").show();                             
                $("#tab1").html(countvacio); 
            } 
                                            
            break;                                
            case 1:
            var countvacio = $('#collapseDir1 .vacio').length; 
            totales = countvacio
            var count = $('#collapseDir1 .error').length;
            if (count==0){
                $("#txtTab2").hide();
            } 
            else{  
                $("#txtTab2").show();                             
                $("#txtTab2").html(count); 
            }                                
            var correctos = $('#collapseDir1 .valid').length; 
            if (correctos==0){
                $("#t2").hide();
            } 
            else if( correctos ==totales){
                $("#t2").show();
                $("#t2").html('<i class="fa fa-check" aria-hidden="true"></i>'); 
                $("#t2").addClass('correcto');
                pass1 =1;                                
            }
            else{  
                $("#t2").show();                             
                $("#t2").html(correctos); 
            }                              
           
            countvacio= countvacio-count-correctos;
            if (countvacio == 0 || countvacio == totales){
                $("#tab2").hide();
            } else{  
                $("#tab2").show();                             
                $("#tab2").html(countvacio); 
            }
    
            break;
    
            case 2:
            var countvacio = $('#collapseTrab1 .vacio').length;
            totales =countvacio;
            var count = $('#collapseTrab1 .error').length;
            if (count==0){
                $("#txtTab3").hide();
            } 
            else{  
                $("#txtTab3").show();                             
                $("#txtTab3").html(count); 
            }                                                           
            var correctos = $('#collapseTrab1 .valid').length;
            if (correctos==0){
                $("#t3").hide();
            } 
            else if( correctos ==totales){
                $("#t3").show();
                $("#t3").html('<i class="fa fa-check" aria-hidden="true"></i>'); 
                $("#t3").addClass('correcto');  
                pass2 =1;                                   
            }
            else{  
                $("#t3").show();                             
                $("#t3").html(correctos); 
            }           
            
            countvacio=countvacio-count-correctos;
            if (countvacio == 0 || countvacio ==totales){
             $("#tab3").hide();
         } else{  
             $("#tab3").show();                            
             $("#tab3").html(countvacio); 
         }
    
         break;
    
         case 3:
        var countvacio = $('#collapseNotifs1 .vacio').length;
        totales = countvacio
         var count = $('#collapseNotifs1 .error').length;
         if (count==0){
            $("#txtTab4").hide();
        } 
        else{  
            $("#txtTab4").show();                             
            $("#txtTab4").html(count); 
        }    
        var correctos = $('#collapseNotifs1 .valid').length;
        if (correctos==0){
            $("#t4").hide();
        } 
        else if( correctos ==totales){
            $("#t4").show();
            $("#t4").html('<i class="fa fa-check" aria-hidden="true"></i>');
            $("#t4").addClass('correcto');   
            pass3 =1;                                                                 
        }                                
        else{  
            $("#t4").show();                             
            $("#t4").html(correctos); 
        } 
        
        countvacio=countvacio-count-correctos;
        if (countvacio == 0 || countvacio ==totales){
            $("#tab4").hide();
        } else{  
            $("#tab4").show();                            
            $("#tab4").html(countvacio); 
        }
        
        
        break;
    
        case 4: 
             break;
            
      default:
        break;
    }   
    
    var tabs= $("#tdenunciante .visible").length;
    var correcto = $('#tdenunciante .correcto').length;
    if (correcto == tabs){
        $("#btn-submit").prop('disabled',false);
    }else{
        $("#btn-submit").prop('disabled',true);
    } 
    console.log( "tabs", tabs);
  });
  console.log( "correcto", correcto);
    
