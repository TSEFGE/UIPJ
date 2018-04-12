
 $(document).ready(function(){        

var contador=0;


       });
                

 $('.nav-tabs a').on('hidden.bs.tab', function(event){
                    
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


                   // $("#txtTab1").html(contador);
                    //$("#txtTab2").html(contador);
                   // $("#txtTab3").html(contador);
                    //$("#txtTab4").html(contador);
                    //$("#txtTab5").html(contador);



                    });
