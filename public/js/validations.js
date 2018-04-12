$(document).ready(function(){        

var contador=0;


       });
                

 $('#tabsdenunciante.nav-tabs a').on('hidden.bs.tab', function(event){
                    
//event.preventDefault();
                                var index= $($(this).attr('href')).index();
                                switch(index) {
                                case 0:
                                
                                var count = $('#collapsePersonales1 .error').length; 
                                $("#txtTab1").html(count);

                                var correctos = $('#collapsePersonales1 .valid').length; 
                                 $("#t1").html(correctos);
                                 var countvacio = $('#collapsePersonales1 .vacio').length; 
                                 countvacio= countvacio-count-correctos;
                               $("#tab1").html(countvacio);


                                break;
                                
                                case 1:
                                var count = $('#collapseDir1 .error').length;                                
                                $("#txtTab2").html(count); 
                                var correctos = $('#collapseDir1 .valid').length;                                
                                $("#t2").html(correctos); 

                                var countvacio = $('#collapseDir1 .vacio').length; 
                                 countvacio= countvacio-count-correctos;
                               $("#tab2").html(countvacio);


                                break;

                                case 2:
                                var count = $('#collapseTrab1 .error').length;                                
                                $("#txtTab3").html(count);
                                var correctos = $('#collapseTrab1 .valid').length;                                
                                $("#t3").html(correctos); 

                                 var countvacio = $('#collapseTrab1 .vacio').length;
                                 countvacio=countvacio-count-correctos;                                
                                $("#tab3").html(countvacio); 

                                break;

                                case 3:
                                var count = $('#collapseNotifs1 .error').length;                                
                                $("#txtTab4").html(count); 
                                 var correctos = $('#collapseNotifs1 .valid').length;                                
                                $("#t4").html(correctos); 
                                var countvacio = $('#collapseNotifs1 .vacio').length;
                                 countvacio=countvacio-count-correctos;                                
                                $("#tab4").html(countvacio); 
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
                                
                                var count = $('#collapsePersonales2 .error').length; 
                                $("#txtTab1").html(count);
                                var correctos = $('#collapsePersonales2 .valid').length; 
                                 $("#t1").html(correctos);
                                 var countvacio = $('#collapsePersonales2 .vacio').length; 
                                 countvacio= countvacio-count-correctos;
                                 $("#tab1").html(countvacio);
                                 
                                break;
                                
                                case 1:
                                var count = $('#collapseDir2 .error').length;                                
                                $("#txtTab2").html(count); 
                                var correctos = $('#collapseDir2 .valid').length;                                
                                $("#t2").html(correctos); 
                                var countvacio = $('#collapseDir2 .vacio').length; 
                                 countvacio= countvacio-count-correctos;
                               $("#tab2").html(countvacio);


                                break;

                                case 2:
                                var count = $('#collapseTrab2 .error').length;                                
                                $("#txtTab3").html(count);
                                var correctos = $('#collapseTrab2 .valid').length;                                
                                $("#t3").html(correctos); 

                                 var countvacio = $('#collapseTrab2 .vacio').length;
                                 countvacio=countvacio-count-correctos;                                
                                $("#tab3").html(countvacio); 

                                break;

                                case 3:
                                var count = $('#collapseNotifs2 .error').length;                                
                                $("#txtTab4").html(count); 
                                 var correctos = $('#collapseNotifs2 .valid').length;                                
                                $("#t4").html(correctos); 
                                var countvacio = $('#collapseNotifs2 .vacio').length;
                                 countvacio=countvacio-count-correctos;                                
                                $("#tab4").html(countvacio); 
                                break;

                                case 4:
                               var count = $('#collapseDenun2 .error').length;                                
                                $("#txtTab4").html(count); 
                                 var correctos = $('#collapseDenun2 .valid').length;                                
                                $("#t4").html(correctos); 
                                var countvacio = $('#collapseDenun2 .vacio').length;
                                 countvacio=countvacio-count-correctos;                                
                                $("#tab4").html(countvacio); 
                                break;

                                default:
                                break;
                              }

                              });

$('#tabsautoridad.nav-tabs a').on('hidden.bs.tab', function(event){

  var index= $($(this).attr('href')).index();
                                switch(index) {
                                 case 0:

                                var count = $('#collapsePersonales3 .error').length; 
                                $("#errora").html(count);
                                var correctos = $('#collapsePersonales3 .valid').length; 
                                $("#biena").html(correctos);
                                var countvacio = $('#collapsePersonales3 .vacio').length; 
                                countvacio= countvacio-count-correctos;
                                $("#vacioa").html(countvacio);                                 
                                break;
                                
                                case 1:
                               var count = $('#collapseDir3 .error').length;                                
                               $("#txtTab2").html(count); 
                               var correctos = $('#collapseDir3 .valid').length;                                
                               $("#t2").html(correctos); 
                               var countvacio = $('#collapseDir3 .vacio').length; 
                               countvacio= countvacio-count-correctos;
                               $("#tab2").html(countvacio);
                               break;

                               case 2:
                                var count = $('#collapseTrab3 .error').length;                                
                                $("#txtTab3").html(count);
                                var correctos = $('#collapseTrab3 .valid').length;                                
                                $("#t3").html(correctos); 
                                var countvacio = $('#collapseTrab3 .vacio').length;
                                countvacio=countvacio-count-correctos;                                
                                $("#tab3").html(countvacio); 
                                break;

                                case 3:
                                var count = $('#collapseAutoridad .error').length;                                
                                $("#txtTab3").html(count);
                                var correctos = $('#collapseAutoridad .valid').length;                                
                                $("#t3").html(correctos); 
                                var countvacio = $('#collapseAutoridad .vacio').length;
                                countvacio=countvacio-count-correctos;                                
                                $("#tab3").html(countvacio); 
                                break;

                                default:
                                break;


                               }



                          });






$('#tabsdelito.nav-tabs a').on('hidden.bs.tab', function(event){

  var index= $($(this).attr('href')).index();
                                switch(index) {
                                 case 0:

                                var count = $('#infodelito .error').length; 
                                $("#errorad").html(count);
                                var correctos = $('#infodelito .valid').length; 
                                $("#bienad").html(correctos);
                                var countvacio = $('#infodelito .vacio').length; 
                                countvacio= countvacio-count-correctos;
                                $("#vacioad").html(countvacio);                                 
                                break;
                                
                                case 1:
                               var count = $('#lugardelito .error').length;                                
                               $("#errorad2").html(count); 
                               var correctos = $('#lugardelito .valid').length;                                
                               $("#bienad2").html(correctos); 
                               var countvacio = $('#lugardelito .vacio').length; 
                               countvacio= countvacio-count-correctos;
                               $("#vacioad2").html(countvacio);
                               break;
                                default:
                                break;


                               }



                          });
