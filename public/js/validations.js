
 $(document).ready(function(){        

var contador=0;


       });
                

 $('.nav-tabs a').on('hidden.bs.tab', function(event){
                    
//event.preventDefault();
                        var index= $($(this).attr('href')).index();
                        var totalG, correctosG;
                        switch(index) {
                                case 0:                                
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
                                  $("#t1").html('<i class="fa fa-check" aria-hidden="true"></i>');  ;                                  
                                }
                                else{
                                  $("#t1").show();                             
                                  $("#t1").html(correctos);
                                }
                                 var countvacio = $('#collapsePersonales1 .vacio').length;
                                 totales=countvacio 
                                 countvacio= countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio == totales){
                                  $("#tab1").hide();
                                } else{  
                                  $("#tab1").show();                             
                                  $("#tab1").html(countvacio); 
                                }if (totales == correctos){
                                   $("#tab1").html('Ok');
                                   
                                 }
                                 
                                break;                                
                                case 1:
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
                                  $("#t2").html('<i class="fa fa-check" aria-hidden="true"></i>');  ;                                  
                                }
                                else{  
                                  $("#t2").show();                             
                                  $("#t2").html(correctos); 
                                }                               
                                var countvacio = $('#collapseDir1 .vacio').length; 
                                totales = countvacio
                                 countvacio= countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio == totales){
                                  $("#tab2").hide();
                                } else{  
                                  $("#tab2").show();                             
                                  $("#tab2").html(countvacio); 
                                }
                                 if (totales == correctos){
                                   tablista=1;
                                 }
                                break;

                                case 2:
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
                                  $("#t3").html('<i class="fa fa-check" aria-hidden="true"></i>');  ;                                  
                                }
                                else{  
                                  $("#t3").show();                             
                                  $("#t3").html(correctos); 
                                }           
                                 var countvacio = $('#collapseTrab1 .vacio').length;
                                 totales =countvacio
                                 countvacio=countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio ==totales){
                                   $("#tab3").hide();
                                 } else{  
                                   $("#tab3").show();                            
                                   $("#tab3").html(countvacio); 
                                 }
                                 if (totales == correctos){
                                  tablista=1;
                                }
                                break;

                                case 3:
                                var count = $('#collapseNotifs1 .error').length;
                                if (count==0){
                                  $("#txtTab4").hide();
                                } 
                                else{  
                                  $("#txtTab4").show();                             
                                  $("#txtTab4").html(count); 
                                }    
                                 var correctos = $('#collapseNotifs1 .valid').length;
                                 if (count==0){
                                  $("#t4").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#t4").show();
                                  $("#t4").html('<i class="fa fa-check" aria-hidden="true"></i>');  ;                                  
                                }
                                else{  
                                  $("#t4").show();                             
                                  $("#t4").html(count); 
                                } 
                                var countvacio = $('#collapseNotifs1 .vacio').length;
                                totales = countvacio
                                 countvacio=countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio ==totales){
                                  $("#tab4").hide();
                                } else{  
                                  $("#tab4").show();                            
                                  $("#tab4").html(countvacio); 
                                }
                                if (totales == correctos){
                                 tablista=1;
                               }                                
                                
                                break;

                                case 4:
                               // var count = $('#collapseDenun1 .error').length;                                
                                //$("#txtTab5").html(count); 
                                break;

                                default:
                                break;
                        }


                   // $("#txtTab1").html(contador);
                    //$("#txtTab2").html(contador);
                   // $("#txtTab3").html(contador);
                    //$("#txtTab4").html(contador);
                    //$("#txtTab5").html(contador);



                    });
