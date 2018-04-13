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
                                  $("#t3").html('<i class="fa fa-check" aria-hidden="true"></i>');                                    
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
                                 if (correctos==0){
                                  $("#t4").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#t4").show();
                                  $("#t4").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#t4").show();                             
                                  $("#t4").html(correctos); 
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
                                
                              
                                break;

                                case 4:
                               // var count = $('#collapseDenun1 .error').length;                                
                                //$("#txtTab5").html(count); 
                                break;

                                default:
                                break;
                        }

                    });


  $('#tdenunciado.nav-tabs a').on('hidden.bs.tab', function(event){

  var index= $($(this).attr('href')).index();
                                switch(index) {
                                 case 0:                               
                                var countvacio = $('#collapsePersonales2 .vacio').length; 
                                totales = countvacio                                                             
                                var count = $('#collapsePersonales2 .error').length; 
                                if (count==0){
                                  $("#error").hide();
                                } 
                                else{  
                                  $("#error").show();                             
                                  $("#error").html(count); 
                                } 
                                var correctos = $('#collapsePersonales2 .valid').length; 
                                if (correctos==0){
                                  $("#bien").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#bien").show();
                                  $("#bien").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#bien").show();                             
                                  $("#bien").html(correctos); 
                                }
                                countvacio=countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio ==totales){
                                  $("#vacio").hide();
                                } else{  
                                  $("#vacio").show();                            
                                  $("#vacio").html(countvacio); 
                                }          
                                break;                                
                                case 1:
                                var countvacio = $('#collapseDir2 .vacio').length; 
                                totales= countvacio;                                
                                var count = $('#collapseDir2 .error').length;
                                if (count==0){
                                  $("#error1").hide();
                                } 
                                else{  
                                  $("#error1").show();                             
                                  $("#error1").html(count); 
                                } 
                                var correctos = $('#collapseDir2 .valid').length;
                                if (correctos==0){
                                  $("#bien1").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#bien1").show();
                                  $("#bien1").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#bien1").show();                             
                                  $("#bien1").html(correctos); 
                                } 
                                countvacio= countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio ==totales){
                                  $("#vacio1").hide();
                                } else{  
                                  $("#vacio1").show();                            
                                  $("#vacio1").html(countvacio); 
                                }
                                break;

                                case 2:
                                var countvacio = $('#collapseTrab2 .vacio').length;
                                totales= countvacio;
                                var count = $('#collapseTrab2 .error').length;                                
                                if (count==0){
                                  $("#error2").hide();
                                } 
                                else{  
                                  $("#error2").show();                             
                                  $("#error2").html(count); 
                                } 
                                var correctos = $('#collapseTrab2 .valid').length;                                
                                if (correctos==0){
                                  $("#bien2").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#bien2").show();
                                  $("#bien2").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#bien2").show();                             
                                  $("#bien2").html(correctos); 
                                }                                 
                                countvacio= countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio ==totales){
                                  $("#vacio2").hide();
                                } else{  
                                  $("#vacio2").show();                            
                                  $("#vacio2").html(countvacio); 
                                }
                                break;

                                case 3:
                                var countvacio = $('#collapseNotifs2 .vacio').length;
                                totales= countvacio;
                                var count = $('#collapseNotifs2 .error').length;                                
                                if (count==0){
                                  $("#error3").hide();
                                } 
                                else{  
                                  $("#error3").show();                             
                                  $("#error3").html(count); 
                                } 
                                var correctos = $('#collapseNotifs2 .valid').length;                                
                                if (correctos==0){
                                  $("#bien3").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#bien3").show();
                                  $("#bien3").html('<i class="fa fa-check" aria-hidden="true"></i>');
                                  console.log("son iguales");
                                }                                
                                else{  
                                  $("#bien3").show();                             
                                  $("#bien3").html(correctos); 
                                } 
                                countvacio= countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio ==totales){
                                  $("#vacio3").hide();
                                } else{  
                                  $("#vacio3").show();                            
                                  $("#vacio3").html(countvacio); 
                                }  
                                break;

                                case 4:
                                var countvacio = $('#collapseDenun2 .vacio').length;
                                totales= countvacio;
                                var count = $('#collapseDenun2 .error').length;                                
                                if (count==0){
                                  $("#error4").hide();
                                } 
                                else{  
                                  $("#error4").show();                             
                                  $("#error4").html(count); 
                                } 
                                 var correctos = $('#collapseDenun2 .valid').length;                                
                                 if (correctos==0){
                                  $("#bien4").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#bien4").show();
                                  $("#bien4").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#bien4").show();                             
                                  $("#bien4").html(correctos); 
                                }  
                                countvacio= countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio ==totales){
                                  $("#vacio4").hide();
                                } else{  
                                  $("#vacio4").show();                            
                                  $("#vacio4").html(countvacio); 
                                } 
                                break;

                                default:
                                break;
                              }

                              });

$('#tabsautoridad.nav-tabs a').on('hidden.bs.tab', function(event){

  var index= $($(this).attr('href')).index();
                                switch(index) {
                                 case 0:
                                var countvacio = $('#collapsePersonales3 .vacio').length;
                                totales= countvacio;
                                var count = $('#collapsePersonales3 .error').length;
                                if (count==0){
                                  $("#errora").hide();
                                } 
                                else{  
                                  $("#errora").show();                             
                                  $("#errora").html(count); 
                                }  
                                var correctos = $('#collapsePersonales3 .valid').length;
                                if (correctos==0){
                                  $("#biena").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#biena").show();
                                  $("#biena").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#biena").show();                             
                                  $("#biena").html(correctos); 
                                } 
                                 
                                countvacio= countvacio-count-correctos;
                                 if (countvacio == 0 || countvacio ==totales){
                                  $("#vacioa").hide();
                                } else{  
                                  $("#vacioa").show();                            
                                  $("#vacioa").html(countvacio); 
                                } 
                                break;
                                
                                case 1:
                               var countvacio = $('#collapseDir3 .vacio').length; 
                               totales = countvacio;
                               var count = $('#collapseDir3 .error').length;
                               if (count==0){
                                $("#errora1").hide();
                              } 
                              else{  
                                $("#errora1").show();                             
                                $("#errora1").html(count); 
                              } 
                               var correctos = $('#collapseDir3 .valid').length;
                               if (correctos==0){
                                $("#biena1").hide();
                              } 
                              else if( correctos ==totales){
                                $("#biena1").show();
                                $("#biena1").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                              }                                
                              else{  
                                $("#biena1").show();                             
                                $("#biena1").html(correctos); 
                              } 
                               countvacio= countvacio-count-correctos;
                               if (countvacio == 0 || countvacio ==totales){
                                $("#vacioa1").hide();
                              } else{  
                                $("#vacioa1").show();                            
                                $("#vacioa1").html(countvacio); 
                              }
                               break;

                               case 2:
                               var countvacio = $('#collapseTrab3 .vacio').length;
                               totales=countvacio;
                                var count = $('#collapseTrab3 .error').length;
                                if (count==0){
                                  $("#errora2").hide();
                                } 
                                else{  
                                  $("#errora2").show();                             
                                  $("#errora2").html(count); 
                                }   
                                var correctos = $('#collapseTrab3 .valid').length;
                                if (correctos==0){
                                  $("#biena2").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#biena2").show();
                                  $("#biena2").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#biena2").show();                             
                                  $("#biena2").html(correctos); 
                                } 
                                countvacio=countvacio-count-correctos;                                
                                if (countvacio == 0 || countvacio ==totales){
                                  $("#vacioa2").hide();
                                } else{  
                                  $("#vacioa2").show();                            
                                  $("#vacioa2").html(countvacio); 
                                } 
                                break;

                                case 3:
                                var countvacio = $('#collapseAutoridad .vacio').length;
                                totales=countvacio;
                                var count = $('#collapseAutoridad .error').length; 
                                if (count==0){
                                  $("#errora3").hide();
                                } 
                                else{  
                                  $("#errora3").show();                             
                                  $("#errora3").html(count); 
                                } 
                                var correctos = $('#collapseAutoridad .valid').length;                                
                                if (correctos==0){
                                  $("#biena3").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#biena3").show();
                                  $("#biena3").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#biena3").show();                             
                                  $("#biena3").html(correctos); 
                                } 
                                countvacio=countvacio-count-correctos;                                
                                if (countvacio == 0 || countvacio ==totales){
                                  $("#vacioa3").hide();
                                } else{  
                                  $("#vacioa3").show();                            
                                  $("#vacioa3").html(countvacio); 
                                }
                                break;

                                default:
                                break;

                               }
                          });


$('#tabsdelito.nav-tabs a').on('hidden.bs.tab', function(event){

  var index= $($(this).attr('href')).index();
                                switch(index) {
                                 case 0:
                                 var countvacio = $('#infodelito .vacio').length; 
                                 totales=countvacio;
                                var count = $('#infodelito .error').length;
                                if (count==0){
                                  $("#errorad").hide();
                                } 
                                else{  
                                  $("#errorad").show();                             
                                  $("#errorad").html(count); 
                                } 
                                var correctos = $('#infodelito .valid').length; 
                                if (correctos==0){
                                  $("#bienad").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#bienad").show();
                                  $("#bienad").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#bienad").show();                             
                                  $("#bienad").html(correctos); 
                                } 
                                countvacio= countvacio-count-correctos;
                                if (countvacio == 0 || countvacio ==totales){
                                  $("#vacioad").hide();
                                } else{  
                                  $("#vacioad").show();                            
                                  $("#vacioad").html(countvacio); 
                                }                               
                                break;
                                
                                case 1:
                                var countvacio = $('#lugardelito .vacio').length; 
                                totales=countvacio;
                               var count = $('#lugardelito .error').length;
                               if (count==0){
                                $("#errorad2").hide();
                              } 
                              else{  
                                $("#errorad2").show();                             
                                $("#errorad2").html(count); 
                              }  
                               var correctos = $('#lugardelito .valid').length; 
                               if (correctos==0){
                                $("#bienad2").hide();
                              } 
                              else if( correctos ==totales){
                                $("#bienad2").show();
                                $("#bienad2").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                              }                                
                              else{  
                                $("#bienad2").show();                             
                                $("#bienad2").html(correctos); 
                              }  
                               countvacio= countvacio-count-correctos;
                               if (countvacio == 0 || countvacio ==totales){
                                $("#vacioad2").hide();
                              } else{  
                                $("#vacioad2").show();                            
                                $("#vacioad2").html(countvacio); 
                              } 
                               break;
                               default:
                               break;


                               }



                          });



$('#tabstestigo.nav-tabs a').on('hidden.bs.tab', function(event){

  var index= $($(this).attr('href')).index();
                                switch(index) {
                                 case 0:
                                 var countvacio = $('#collapsePersonalesTestigo .vacio').length; 
                                 totales=countvacio;
                                var count = $('#collapsePersonalesTestigo .error').length; 
                                if (count==0){
                                  $("#error").hide();
                                } 
                                else{  
                                  $("#error").show();                             
                                  $("#error").html(count); 
                                } 
                                var correctos = $('#collapsePersonalesTestigo .valid').length; 
                                if (correctos==0){
                                  $("#bien").hide();
                                } 
                                else if( correctos ==totales){
                                  $("#bien").show();
                                  $("#bien").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                                }                                
                                else{  
                                  $("#bien").show();                             
                                  $("#bien").html(correctos); 
                                }                                
                                countvacio= countvacio-count-correctos;
                                if (countvacio == 0 || countvacio ==totales){
                                  $("#vacio").hide();
                                } else{  
                                  $("#vacio").show();                            
                                  $("#vacio").html(countvacio); 
                                }                                
                                break;
                                
                                case 1:
                                var countvacio = $('#collapseDirTestigo .vacio').length; 
                                totales=countvacio;
                               var count = $('#collapseDirTestigo .error').length;
                               if (count==0){
                                $("#error1").hide();
                              } 
                              else{  
                                $("#error1").show();                             
                                $("#error1").html(count); 
                              }
                               var correctos = $('#collapseDirTestigo .valid').length;                                
                               if (correctos==0){
                                $("#bien1").hide();
                              } 
                              else if( correctos ==totales){
                                $("#bien1").show();
                                $("#bien1").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                              }                                
                              else{  
                                $("#bien1").show();                             
                                $("#bien1").html(correctos); 
                              } 
                               countvacio= countvacio-count-correctos;
                               if (countvacio == 0 || countvacio ==totales){
                                $("#vacio1").hide();
                              } else{  
                                $("#vacio1").show();                            
                                $("#vacio1").html(countvacio); 
                              } 
                               break;

                               case 2:
                               var countvacio = $('#collapseTrabTestigo .vacio').length; 
                               totales=countvacio;
                               var count = $('#collapseTrabTestigo .error').length; 
                               if (count==0){
                                $("#error2").hide();
                              } 
                              else{  
                                $("#error2").show();                             
                                $("#error2").html(count); 
                              }                                
                               $("#error2").html(count); 
                               var correctos = $('#collapseTrabTestigo .valid').length;                                
                               if (correctos==0){
                                $("#bien2").hide();
                              } 
                              else if( correctos ==totales){
                                $("#bien2").show();
                                $("#bien2").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                              } 
                              else{  
                                  $("#bien2").show();                             
                                  $("#bien2").html(correctos); 
                                } 
                               countvacio= countvacio-count-correctos;
                               if (countvacio == 0 || countvacio ==totales){
                                $("#vacio2").hide();
                              } else{  
                                $("#vacio2").show();                            
                                $("#vacio2").html(countvacio); 
                              }
                               break;

                               case 3:
                               var countvacio = $('#collapseNotifsTestigo .vacio').length; 
                               totales=countvacio;
                               var count = $('#collapseNotifsTestigo .error').length;                                
                               if (count==0){
                                $("#error3").hide();
                              } 
                              else{  
                                $("#error3").show();                             
                                $("#error3").html(count); 
                              }
                               var correctos = $('#collapseNotifsTestigo .valid').length;                                
                               if (correctos==0){
                                $("#bien3").hide();
                              } 
                              else if( correctos ==totales){
                                $("#bien3").show();
                                $("#bien3").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
                              }                                
                              else{  
                                $("#bien3").show();                             
                                $("#bien3").html(correctos); 
                              }
                               countvacio= countvacio-count-correctos;
                               if (countvacio == 0 || countvacio ==totales){
                                $("#vacio3").hide();
                              } else{  
                                $("#vacio3").show();                            
                                $("#vacio3").html(countvacio); 
                              }
                               break;


                                default:
                                break;


                               }



                          });






$('#tabsabogado.nav-tabs a').on('hidden.bs.tab', function(event){

  var index= $($(this).attr('href')).index();
                                switch(index) {
                                 case 0:

                                var count = $('#collapsePersonales3 .error').length; 
                                $("#error").html(count);
                                var correctos = $('#collapsePersonales3 .valid').length; 
                                $("#bien").html(correctos);
                                var countvacio = $('#collapsePersonales3 .vacio').length; 
                                countvacio= countvacio-count-correctos;
                                $("#vacio").html(countvacio);                                 
                                break;
                                
                                case 1:
                               var count = $('#collapseTrab3 .error').length;                                
                               $("#error1").html(count); 
                               var correctos = $('#collapseTrab3 .valid').length;                                
                               $("#bien1").html(correctos); 
                               var countvacio = $('#collapseTrab3 .vacio').length; 
                               countvacio= countvacio-count-correctos;
                               $("#vacio1").html(countvacio);
                               break;

                               case 2:
                               var count = $('#collapseAutoridad .error').length;                                
                               $("#error2").html(count); 
                               var correctos = $('#collapseAutoridad .valid').length;                                
                               $("#bien2").html(correctos); 
                               var countvacio = $('#collapseAutoridad .vacio').length; 
                               countvacio= countvacio-count-correctos;
                               $("#vacio2").html(countvacio);
                               break;

                               default:
                                break;


                               }



                          });
