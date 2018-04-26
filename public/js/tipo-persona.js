
    //Para el tipo de persona(Moral/Física)
    $("#esEmpresa1").prop("checked", false);
    $("#esEmpresa2").prop("checked", false);
    $('#datosPer').hide();
    $('#personaFisica').hide();
    $('#personaMoral').hide();
    $('#datosDir').hide();
    $('#datosTrab').hide();
    $('#datosNotif').hide();
    $('#datosExtra').hide();
    $('#extra-fis').hide();
    $('#Victima').hide();
    //Si es empresa
    $("#esEmpresa1").change(function(event){
        if ($('#esEmpresa1').is(':checked') ) {

            $('.xvacio').hide();
            $('.xerror').hide();
            $('.bien').hide();
            $('#datosPer').show();
            $('#personaFisica').hide();
            $('#personaMoral').show();
            $('#datosDir').show();
            $('#datosTrab').hide();
            $('#datosNotif').show();
            $('#datosExtra').hide();
            $('#extra-fis').hide();
            $('#Victima').hide();

            //Datos personales requeridos de Persona Moral o Empresa
            $('#nombres2').prop('disabled', false);
            $('#rfc2').prop('disabled', false);
            $('#homo2').prop('disabled', false);
            $('#representanteLegal').prop('disabled', false);
            $("#senasPartic").prop('disabled', false);
            $("#narracion").prop('disabled', false);

            //Datos personales no requeridos de Persona Física
            $("#nombres").prop('disabled', true);
            $("#primerAp").prop('disabled', true);
            $("#segundoAp").prop('disabled', true);
            $("#rfc").prop('disabled', true);
            $("#homo").prop('disabled', true);
            $("#fechaNacimiento").prop('disabled', true);
            $("#edad").prop('disabled', true);
            $("#sexo").prop('disabled', true);
            $("#curp").prop('disabled', true);
            $("#idNacionalidad").prop('disabled', true);
            $("#idEtnia").prop('disabled', true);
            $("#idLengua").prop('disabled', true);
            $("#idEstadoOrigen").prop('disabled', true);
            $("#idMunicipioOrigen").prop('disabled', true);
            $("#telefono").prop('disabled', true);
            $("#motivoEstancia").prop('disabled', true);
            $("#idOcupacion").prop('disabled', true);
            $("#idEstadoCivil").prop('disabled', true);
            $("#idReligion").prop('disabled', true);
            $("#idEscolaridad").prop('disabled', true);
            $("#docIdentificacion").prop('disabled', true);
            $("#numDocIdentificacion").prop('disabled', true);

            //Datos del trabajo no requeridos de Persona Física
            $("#lugarTrabajo").prop('disabled', true);
            $("#telefonoTrabajo").prop('disabled', true);
            $("#idEstado2").prop('disabled', true);
            $("#idMunicipio2").prop('disabled', true);
            $("#idLocalidad2").prop('disabled', true);
            $("#cp2").prop('disabled', true);
            $("#idColonia2").prop('disabled', true);
            $("#calle2").prop('disabled', true);
            $("#numExterno2").prop('disabled', true);
            $("#numInterno2").prop('disabled', true);

            //Datos no requeridos de extra denunciado
            $("#idPuesto").prop('disabled', true);
            $("#alias").prop('disabled', true);
            $("#personasBajoSuGuarda").prop('disabled', true);
            $("#ingreso").prop('disabled', true);
            $("#periodoIngreso").prop('disabled', true);
            $("#residenciaAnterior").prop('disabled', true);
            $("#perseguidoPenalmente").prop('disabled', true);
            $("#perseguidoPenalmente1").prop('disabled', true);
            $("#perseguidoPenalmente2").prop('disabled', true);
            $("#vestimenta").prop('disabled', true);


            //para generar notificaciones 
       //para generar notificaciones 
            $("#nombres").removeClass("vacio");
            $("#primerAp").removeClass("vacio");
            $("#segundoAp").removeClass("vacio");
            $("#fechaNacimiento").removeClass("vacio");
            $("#rfc").removeClass("vacio");
            $("#homo").removeClass("vacio");
            $("#curp").removeClass("vacio");
            $("#telefono").removeClass("vacio");
            $("#motivoEstancia").removeClass("vacio");
           // $("#docIdentificacion").removeClass("vacio");     
            $("#numDocIdentificacion").removeClass("vacio");
            $("#calle").removeClass("vacio");
            $("#numExterno").removeClass("vacio");    
            $("#numInterno").removeClass("vacio");
            $("#numExterno2").removeClass("vacio");   
            $("#numInterno2").removeClass("vacio");
            $("#lugarTrabajo").removeClass("vacio");
            $("#telefonoTrabajo").removeClass("vacio");   
            $("#calle").removeClass("vacio");
            $("#numExterno2").removeClass("vacio");    
            $("#numInterno2").removeClass("vacio");
            $("#correo").removeClass("vacio");
            $("#telefonoN").removeClass("vacio");     
            $("#fax").removeClass("vacio");
          //  $("#narracionUno").removeClass("vacio");
           // $("#narracionUnoM").removeClass("vacio");

             $("#nombres").removeClass("valid");
            $("#primerAp").removeClass("valid");
            $("#segundoAp").removeClass("valid");
            $("#fechaNacimiento").removeClass("valid");
            $("#rfc").removeClass("valid");
            $("#homo").removeClass("valid");
            $("#curp").removeClass("valid");
            $("#telefono").removeClass("valid");
            $("#motivoEstancia").removeClass("valid");
           // $("#docIdentificacion").removeClass("valid");     
            $("#numDocIdentificacion").removeClass("valid");
            $("#calle").removeClass("valid");
            $("#numExterno").removeClass("valid");    
            $("#numInterno").removeClass("valid");
            $("#numExterno2").removeClass("valid");   
            $("#numInterno2").removeClass("valid");
            $("#lugarTrabajo").removeClass("valid");
            $("#telefonoTrabajo").removeClass("valid");   
            $("#calle").removeClass("valid");
            $("#numExterno2").removeClass("valid");    
            $("#numInterno2").removeClass("valid");
            $("#correo").removeClass("valid");
            $("#telefonoN").removeClass("valid");     
            $("#fax").removeClass("valid");
              //  $("#narracionUno").removeClass("valid");
            //$("#narracionUnoM").removeClass("valid");

             $("#nombres").removeClass("error");
            $("#primerAp").removeClass("error");
            $("#segundoAp").removeClass("error");
            $("#fechaNacimiento").removeClass("error");
            $("#rfc").removeClass("error");
            $("#homo").removeClass("error");
            $("#curp").removeClass("error");
            $("#telefono").removeClass("error");
            $("#motivoEstancia").removeClass("error");
           // $("#docIdentificacion").removeClass("error");     
            $("#numDocIdentificacion").removeClass("error");
            $("#calle").removeClass("error");
            $("#numExterno").removeClass("error");    
            $("#numInterno").removeClass("error");
            $("#numExterno2").removeClass("error");   
            $("#numInterno2").removeClass("error");
            $("#lugarTrabajo").removeClass("error");
            $("#telefonoTrabajo").removeClass("error");   
            $("#calle").removeClass("error");
            $("#numExterno2").removeClass("error");    
            $("#numInterno2").removeClass("error");
            $("#correo").removeClass("error");
            $("#telefonoN").removeClass("error");     
            $("#fax").removeClass("error");
            
            //$("#narracionUnoM").removeClass("error");         

            $("#nombres2").addClass("vacio");
            $("#fechaAltaEmpresa").addClass("vacio");
            $("#rfc2").addClass("vacio");
            $("#homo2").addClass("vacio");
            $("#representanteLegal").addClass("vacio");
                $("#calle").addClass("vacio");
                $("#numExterno").addClass("vacio");     
                $("#numInterno").addClass("vacio"); 
                $("#calle3").addClass("vacio");
                $("#numExterno3").addClass("vacio");    
                $("#numInterno3").addClass("vacio");
            //    $("#narracionUnoM").addClass("vacio");
                $("#correo").addClass("vacio");
            $("#telefonoN").addClass("vacio");     
           $("#fax").addClass("vacio");             
                

 //$("#narracionUno").addClass("vacio"); //para comprobar 

        }
    });
    //No es empresa
    $("#esEmpresa2").change(function(event){
        if ($('#esEmpresa2').is(':checked') ) {

$('.xvacio').hide();

$('.xerror').hide();

$('.bien').hide();


            $('#datosPer').show();
            $('#personaFisica').show();
            $('#personaMoral').hide();
            $('#datosDir').show();
            $('#datosTrab').show();
            $('#datosNotif').show();
            $('#datosExtra').show();
            $('#extra-fis').show();
            $('#Victima').show();
            //$('#esVictima').prop('checked',false);

            //Datos personales no requeridos de Persona Moral o Empresa
            $('#nombres2').prop('disabled', true);
            $('#rfc2').prop('disabled', true);
            $('#homo2').prop('disabled', true);
            $('#representanteLegal').prop('disabled', true);

            //Datos personales requeridos de Persona Física
            $("#nombres").prop('disabled', false);
            $("#primerAp").prop('disabled', false);
            $("#segundoAp").prop('disabled', false);
            $("#rfc").prop('disabled', false);
            $("#homo").prop('disabled', false);
            $("#fechaNacimiento").prop('disabled', false);
            $("#edad").prop('disabled', false);
            $("#sexo").prop('disabled', false);
            $("#curp").prop('disabled', false);
            $("#idNacionalidad").prop('disabled', false);
            $("#idEtnia").prop('disabled', false);
            $("#idLengua").prop('disabled', false);
            $("#idEstadoOrigen").prop('disabled', false);
            $("#idMunicipioOrigen").prop('disabled', false);
            $("#telefono").prop('disabled', false);
            $("#motivoEstancia").prop('disabled', false);
            $("#idOcupacion").prop('disabled', false);
            $("#idEstadoCivil").prop('disabled', false);
            $("#idReligion").prop('disabled', false);
            $("#idEscolaridad").prop('disabled', false);
            $("#docIdentificacion").prop('disabled', false);
            $("#numDocIdentificacion").prop('disabled', false);

            //Datos del trabajo requeridos de Persona Física
            $("#lugarTrabajo").prop('disabled', false);
            $("#telefonoTrabajo").prop('disabled', false);
            $("#idEstado2").prop('disabled', false);
            $("#idMunicipio2").prop('disabled', false);
            $("#idLocalidad2").prop('disabled', false);
            $("#cp2").prop('disabled', false);
            $("#idColonia2").prop('disabled', false);
            $("#calle2").prop('disabled', false);
            $("#numExterno2").prop('disabled', false);
            $("#numInterno2").prop('disabled', false);

            //Datos requeridos de extra denunciado
            $("#idPuesto").prop('disabled', false);
            $("#alias").prop('disabled', false);
            $("#personasBajoSuGuarda").prop('disabled', false);
            $("#ingreso").prop('disabled', false);
            $("#periodoIngreso").prop('disabled', false);
            $("#residenciaAnterior").prop('disabled', false);
            $("#perseguidoPenalmente").prop('disabled', false);
            $("#perseguidoPenalmente1").prop('disabled', false);
            $("#perseguidoPenalmente2").prop('disabled', false);
            $("#vestimenta").prop('disabled', false);
            $("#senasPartic").prop('disabled', false);
            $("#narracion").prop('disabled', false);



                //quitar campos de persona moral
                $("#nombres2").removeClass("vacio");
                $("#fechaAltaEmpresa").removeClass("vacio");
                $("#rfc2").removeClass("vacio");
                $("#homo2").removeClass("vacio");
                $("#representanteLegal").removeClass("vacio");            

                $("#calle").removeClass("vacio");
                $("#numExterno").removeClass("vacio");     
                $("#numInterno").removeClass("vacio"); 
                $("#calle3").removeClass("vacio");
                $("#numExterno3").removeClass("vacio");    
                $("#numInterno3").removeClass("vacio");
                $("#correo").removeClass("vacio");
                $("#telefonoN").removeClass("vacio");     
                $("#fax").removeClass("vacio");

                $("#alias").removeClass("vacio");
                $("#personasBajoSuGuarda").removeClass("vacio");     
                $("#ingreso").removeClass("vacio");
                $("#residenciaAnterior").removeClass("vacio");
                $("#vestimenta").removeClass("vacio");
                $("#senasPartic").removeClass("vacio");
                // $("#narracionUno").removeClass("vacio");
             



                $("#nombres2").removeClass("valid");
                $("#fechaAltaEmpresa").removeClass("valid");
                $("#rfc2").removeClass("valid");
                $("#homo2").removeClass("valid");
                $("#representanteLegal").removeClass("valid");
                $("#calle").removeClass("valid");
                $("#numExterno").removeClass("valid");     
                $("#numInterno").removeClass("valid"); 
                $("#calle3").removeClass("valid");
                $("#numExterno3").removeClass("valid");    
                $("#numInterno3").removeClass("valid");
                $("#correo").removeClass("valid");
                $("#telefonoN").removeClass("valid");     
                $("#fax").removeClass("valid");
                $("#alias").removeClass("valid");
                $("#personasBajoSuGuarda").removeClass("valid");     
                $("#ingreso").removeClass("valid");
                $("#residenciaAnterior").removeClass("valid");
                $("#vestimenta").removeClass("valid");
                $("#senasPartic").removeClass("valid");
               //  $("#narracionUno").removeClass("valid");
               // $("#narracionUnoM").removeClass("valid");

                 $("#nombres2").removeClass("error");
                $("#fechaAltaEmpresa").removeClass("error");
                $("#rfc2").removeClass("error");
                $("#homo2").removeClass("error");
                $("#representanteLegal").removeClass("error");
                $("#calle").removeClass("error");
                $("#numExterno").removeClass("error");     
                $("#numInterno").removeClass("error"); 
                $("#calle3").removeClass("error");
                $("#numExterno3").removeClass("error");    
                $("#numInterno3").removeClass("error");
                $("#correo").removeClass("error");
                $("#telefonoN").removeClass("error");     
                $("#fax").removeClass("error");
                $("#alias").removeClass("error");
                $("#personasBajoSuGuarda").removeClass("error");     
                $("#ingreso").removeClass("error");
                $("#residenciaAnterior").removeClass("error");
                $("#vestimenta").removeClass("error");
                $("#senasPartic").removeClass("error");
               // $("#narracionUno").removeClass("error");
               



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
                //$("#docIdentificacion").addClass("vacio");     
                $("#numDocIdentificacion").addClass("vacio");
          //   $("#narracionUno").addClass("vacio");

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



        }
    });

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
