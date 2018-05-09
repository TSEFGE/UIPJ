
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
            correcto= 0;
            $('#collapsePersonales1').isValid();                   
            $("#datosPer").addClass('visible');
            $("#datosDir").addClass('visible');
           // $("#datosTrab").addClass('visible'); 
            $('span').removeClass('correcto');
            $("#datosNotif").addClass('visible');            
            $("#btn-submit").prop('disabled',true);
            $('.xvacio').hide();
            $('.xerror').hide();
            $('.bien').hide();
            $('#datosPer').show();
            $('#personaFisica').hide();
            $('#personaMoral').show();
            $('#datosDir').show();
            $('#datosTrab').hide();
            $('#datosTrab').removeClass('visible');
            $('#datosNotif').show();
            $('#datosExtra').hide(); 
            $('#datosExtra').removeClass('visible');            
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
            $("select").removeClass('vacio ');
            $("select").removeClass('valid');
            $("select").removeClass('error');
            $("textarea").removeClass('vacio');
            $("textarea").removeClass('error');
            $("textarea").removeClass('valid');
            $('input').removeClass('vacio');
            $('input').removeClass('error');
            $('input').removeClass('valid');
            
            //$("#narracionUnoM").removeClass("error");         
            $("#idEstado, #idMunicipio, #idLocalidad, #idColonia, #cp").addClass('vacio');
            $("#idEstado3, #idMunicipio3, #idLocalidad3, #idColonia3, #cp3").addClass('vacio');
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
            $("#narracionUnoM").addClass("vacio");
            $("#correo").addClass("vacio");
            $("#telefonoN").addClass("vacio");     
            $("#fax").addClass("vacio");             
                

 //$("#narracionUno").addClass("vacio"); //para comprobar 

        }
    });
    //No es empresa
    $("#esEmpresa2").change(function(event){
        if ($('#esEmpresa2').is(':checked') ) {
            correcto = 0;   
            $('#collapsePersonales1').isValid();
            $('span').removeClass('correcto');                 
            $("#datosPer").addClass('visible');
            $("#datosDir").addClass('visible');
            $("#datosTrab").addClass('visible'); 
             $('#idOcupacion').change(function(event) {
                var ocupacion = $('#idOcupacion').val();
                if (ocupacion == 2947) {          
            $("#datosTrab").removeClass('visible');   
            
            
            }
            else
            {
            $("#datosTrab").addClass('visible');  
            }

            });

            $("#datosNotif").addClass('visible');
            $('#datosExtra').addClass('visible');
            
            $("#btn-submit").prop('disabled',true);
            $('.xvacio').hide();

            $('.xerror').hide();

            $('.bien').hide();


            $('#datosPer').show();
            $('#personaFisica').show();
            $('#personaMoral').hide();
            $('#datosDir').show();
            $('#datosTrab').show();
           // $('#datosTrab').addClass('visible');
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


                $('select').removeClass('vacio ');
                $('select').removeClass('valid');
                $('select').removeClass('error');
                $("textarea").removeClass('vacio');
                $("textarea").removeClass('error');
                $("textarea").removeClass('valid');
                $('input').removeClass('vacio ');
                $('input').removeClass('error ');
                $('input').removeClass('valid ');

                //Para generar Notificaciones se asigna clase
                $("select").addClass('vacio');
                /*$("#idEstado, #idMunicipio, #idLocalidad, #idColonia, #cp").addClass('vacio');
                $("#idEstado3, #idMunicipio3, #idLocalidad3, #idColonia3, #cp3").addClass('vacio');
                $("#idEstado2, #idMunicipio2, #idLocalidad2, #idColonia2, #cp2").addClass('vacio');*/
                $("#nombres").addClass("vacio");
                $("#primerAp").addClass("vacio");
                $("#segundoAp").addClass("vacio");
                $("#fechaNacimiento").addClass("vacio");
                $("#edad").addClass("vacio");
                $("#rfc").addClass("vacio");
                $("#homo").addClass("vacio");
                $("#curp").addClass("vacio");
                $("#telefono").addClass("vacio");
                $("#motivoEstancia").addClass("vacio");               
                $("#docIdentificacion").addClass("vacio");     
                $("#numDocIdentificacion").addClass("vacio");
                $("#narracionUno").addClass("vacio");

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

                $("#docIdentificacion").change(function(event){
                var otro= $("#docIdentificacion").val();    
                if(otro=="OTRO"){   

                  $("#otrodocto").show();
                  $("#otroDocumento").removeClass("valid");
                  $("#otroDocumento").removeClass("error");
                  $("#otroDocumento").addClass("vacio");  
               
                }
                else
                {
                  $("#otrodocto").hide(); 
                  $("#otroDocumento").removeClass("vacio");
                  $("#otroDocumento").removeClass("valid");
                  $("#otroDocumento").removeClass("error");
                }
            });


        }







    });

