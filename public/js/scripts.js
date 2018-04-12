$(document).ready(function(){
    $("input[type=radio]").attr("checked", false);
    //Para el inicio de carpeta
    $("#conDetenido").prop("checked", false);
    $('#conDet1').css('display', 'none');
    $("#horaIntervencion").prop('disabled', true);
    $("#npd").prop('disabled', true);
    $("#numIph").prop('disabled', true);
    $("#fechaIph").prop('disabled', true);
    $("#narracionIph").prop('disabled', true);
    $("#conDetenido").change(function(event){
        if ($('#conDetenido').is(':checked') ) {
            $('#conDet1').css('display', 'block');
            $("#horaIntervencion").prop('disabled', false);
            $("#npd").prop('disabled', false);
            $("#numIph").prop('disabled', false);
            $("#fechaIph").prop('disabled', false);
            $("#narracionIph").prop('disabled', false);
        }else{
            $('#conDet1').css('display', 'none');
            $("#horaIntervencion").prop('disabled', true);
            $("#npd").prop('disabled', true);
            $("#numIph").prop('disabled', true);
            $("#fechaIph").prop('disabled', true);
            $("#narracionIph").prop('disabled', true);
        }
    });

    //Para el tipo de denunciado
    $("#tipoDenunciado1").prop("checked", false);
    $("#tipoDenunciado2").prop("checked", false);
    $("#tipoDenunciado3").prop("checked", false);
    $('#qrr').hide();
    $('#conocido').hide();
    $('.comparecencia').hide();
    //Si es QRR
    $("#tipoDenunciado1").change(function(event){
        if ($('#tipoDenunciado1').is(':checked') ) {
            $('#qrr').show();
            $('#conocido').hide();
            $('.comparecencia').hide();

            //Datos requeridos de Q.R.R.
            $('#nombresQ').prop('disabled', false);

            //Datos no requeridos de denunciado conocido
            $('#nombresC').prop('disabled', true);
            $('#primerApC').prop('disabled', true);
            $('#aliasC').prop('disabled', true);
            $('#idEstadoC').prop('disabled', true);
            $('#idMunicipioC').prop('disabled', true);
            $('#idLocalidadC').prop('disabled', true);
            $('#cpC').prop('disabled', true);
            $('#idColoniaC').prop('disabled', true);
            $('#calleC').prop('disabled', true);
            $('#numExternoC').prop('disabled', true);
            $('#numInternoC').prop('disabled', true);
            $('#senasParticC').prop('disabled', true);

            //Datos no requeridos de denunciado comparecencia
            $('#esEmpresa1').prop('disabled', true);
            $('#esEmpresa2').prop('disabled', true);

            //Datos personales no requeridos de Persona Moral o Empresa
            $('#nombres2').prop('disabled', true);
            $('#rfc2').prop('disabled', true);
            $('#homo2').prop('disabled', true);
            $('#representanteLegal').prop('disabled', true);
            $('#idEstado').prop('disabled', true);
            $('#idMunicipio').prop('disabled', true);
            $('#idLocalidad').prop('disabled', true);
            $('#cp').prop('disabled', true);
            $('#idColonia').prop('disabled', true);
            $('#calle').prop('disabled', true);
            $('#numExterno').prop('disabled', true);
            $('#numInterno').prop('disabled', true);


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

            //Datos no requeridos de direccion para notificaciones
            $("#idEstado3").prop('disabled', true);
            $("#idMunicipio3").prop('disabled', true);
            $("#idLocalidad3").prop('disabled', true);
            $("#cp3").prop('disabled', true);
            $("#idColonia3").prop('disabled', true);
            $("#calle3").prop('disabled', true);
            $("#numExterno3").prop('disabled', true);
            $("#numInterno3").prop('disabled', true);
            $("#correo").prop('disabled', true);
            $("#telefonoN").prop('disabled', true);
            $("#fax").prop('disabled', true);

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
            $("#senasPartic").prop('disabled', true);
            $("#narracion").prop('disabled', true);
        }
    });
    //Si lo conoce el denunciante
    $("#tipoDenunciado2").change(function(event){
        if ($('#tipoDenunciado2').is(':checked') ) {
            $('#qrr').hide();
            $('#conocido').show();
            $('.comparecencia').hide();

            //Datos requeridos de Q.R.R.
            $('#nombresQ').prop('disabled', true);

            //Datos no requeridos de denunciado conocido
            $('#nombresC').prop('disabled', false);
            $('#primerApC').prop('disabled', false);
            $('#aliasC').prop('disabled', false);
            $('#idEstadoC').prop('disabled', false);
            $('#idMunicipioC').prop('disabled', false);
            $('#idLocalidadC').prop('disabled', false);
            $('#cpC').prop('disabled', false);
            $('#idColoniaC').prop('disabled', false);
            $('#calleC').prop('disabled', false);
            $('#numExternoC').prop('disabled', false);
            $('#numInternoC').prop('disabled', false);
            $('#senasParticC').prop('disabled', false);

            //Datos no requeridos de denunciado comparecencia
            $('#esEmpresa1').prop('disabled', true);
            $('#esEmpresa2').prop('disabled', true);

            //Datos personales no requeridos de Persona Moral o Empresa
            $('#nombres2').prop('disabled', true);
            $('#rfc2').prop('disabled', true);
            $('#homo2').prop('disabled', true);
            $('#representanteLegal').prop('disabled', true);
            $('#idEstado').prop('disabled', true);
            $('#idMunicipio').prop('disabled', true);
            $('#idLocalidad').prop('disabled', true);
            $('#cp').prop('disabled', true);
            $('#idColonia').prop('disabled', true);
            $('#calle').prop('disabled', true);
            $('#numExterno').prop('disabled', true);
            $('#numInterno').prop('disabled', true);

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

            //Datos no requeridos de direccion para notificaciones
            $("#idEstado3").prop('disabled', true);
            $("#idMunicipio3").prop('disabled', true);
            $("#idLocalidad3").prop('disabled', true);
            $("#cp3").prop('disabled', true);
            $("#idColonia3").prop('disabled', true);
            $("#calle3").prop('disabled', true);
            $("#numExterno3").prop('disabled', true);
            $("#numInterno3").prop('disabled', true);
            $("#correo").prop('disabled', true);
            $("#telefonoN").prop('disabled', true);
            $("#fax").prop('disabled', true);

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
            $("#senasPartic").prop('disabled', true);
            $("#narracion").prop('disabled', true);

        }
    });
    //Si es por comparecencia
    $("#tipoDenunciado3").change(function(event){
        if ($('#tipoDenunciado3').is(':checked') ) {
            $('#qrr').hide();
            $('#conocido').hide();
            $('.comparecencia').show();

            //Datos requeridos de Q.R.R.
            $('#nombresQ').prop('disabled', true);

            //Datos no requeridos de denunciado conocido
            $('#nombresC').prop('disabled', true);
            $('#primerApC').prop('disabled', true);
            $('#aliasC').prop('disabled', true);
            $('#idEstadoC').prop('disabled', true);
            $('#idMunicipioC').prop('disabled', true);
            $('#idLocalidadC').prop('disabled', true);
            $('#cpC').prop('disabled', true);
            $('#idColoniaC').prop('disabled', true);
            $('#calleC').prop('disabled', true);
            $('#numExternoC').prop('disabled', true);
            $('#numInternoC').prop('disabled', true);
            $('#senasParticC').prop('disabled', true);

            //Datos no requeridos de denunciado comparecencia
            $('#esEmpresa1').prop('disabled', false);
            $('#esEmpresa2').prop('disabled', false);

            //Datos personales no requeridos de Persona Moral o Empresa
            $('#nombres2').prop('disabled', false);
            $('#rfc2').prop('disabled', false);
            $('#homo2').prop('disabled', false);
            $('#representanteLegal').prop('disabled', false);
            $('#idEstado').prop('disabled', false);
            $('#idMunicipio').prop('disabled', false);
            $('#idLocalidad').prop('disabled', false);
            $('#cp').prop('disabled', false);
            $('#idColonia').prop('disabled', false);
            $('#calle').prop('disabled', false);
            $('#numExterno').prop('disabled', false);
            $('#numInterno').prop('disabled', false);

            //Datos personales no requeridos de Persona Física
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

            //Datos del trabajo no requeridos de Persona Física
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

            //Datos no requeridos de direccion para notificaciones
            $("#idEstado3").prop('disabled', false);
            $("#idMunicipio3").prop('disabled', false);
            $("#idLocalidad3").prop('disabled', false);
            $("#cp3").prop('disabled', false);
            $("#idColonia3").prop('disabled', false);
            $("#calle3").prop('disabled', false);
            $("#numExterno3").prop('disabled', false);
            $("#numInterno3").prop('disabled', false);
            $("#correo").prop('disabled', false);
            $("#telefonoN").prop('disabled', false);
            $("#fax").prop('disabled', false);

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
        }
    });

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
            $('#datosPer').show();
            $('#personaFisica').hide();
            $('#personaMoral').show();
            $('#datosDir').show();
            $('#datosTrab').hide();
            $('#datosNotif').show();
            $('#datosExtra').show();
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
        }
    });
    //No es empresa
    $("#esEmpresa2").change(function(event){
        if ($('#esEmpresa2').is(':checked') ) {
            $('#datosPer').show();
            $('#personaFisica').show();
            $('#personaMoral').hide();
            $('#datosDir').show();
            $('#datosTrab').show();
            $('#datosNotif').show();
            $('#datosExtra').show();
            $('#extra-fis').show();
            $('#Victima').show();
            $('#esVictima').prop('checked',false);

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
        }
    });

    $("#btn-submit").click(function() {
        $('.collapse').collapse('show');
    });

    //Para delito, con o sin violencia
    $('#violencia').hide();
    $(".cv").prop('disabled', true);
    $("#conViolencia1").change(function(event){
        if ($('#conViolencia1').is(':checked') ) {
            $('#violencia').hide();
            $(".cv").prop('disabled', true);
            //$("#idTipoArma").prop('disabled', true);
            //$("#idArma").prop('disabled', true);
        }
    });
    $("#conViolencia2").change(function(event){
        if ($('#conViolencia2').is(':checked') ) {
            $('#violencia').show();
            $(".cv").prop('disabled', false);
            //$("#idTipoArma").prop('disabled', false);
            //$("#idArma").prop('disabled', false);
        }
    });



    $('[data-toggle="tooltip"]').tooltip();

    $(function () {
        $('#fechaInicial').datetimepicker({
           format: 'YYYY-MM-DD',
           defaultDate: moment(),
           widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
       });
    });



    $(function () {
        $('#horaInter').datetimepicker({
           format: 'LT',
           maxDate: moment(),
           widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
       });
    });
    $(function () {
        $('#fechaiph2').datetimepicker({
           format: 'YYYY-MM-DD',
           maxDate: moment(),
           widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
       });
    });
    $(function () {
        $('#fechadet').datetimepicker({
            format: 'YYYY-MM-DD',
            defaultDate: moment(),
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
        });
    });
   $(function () {
        $('#fechaAlta').datetimepicker({
            format: 'YYYY-MM-DD',
            keepOpen:true,
            minDate: moment().subtract(1500, 'years').format('YYYY-MM-DD'),
            maxDate: moment(),
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
        });
        $('#fechaAltaEmpresa').focus(function(){
            $('#cajados').css("padding-bottom", '160px');
        });
        $('#fechaAltaEmpresa').focusout(function(){
            $('#cajados').css("padding-bottom", '20px');
        });
    });

    $('#esVictima').on('click',function(e) {
          $('#fechanac').datetimepicker("destroy");
      if ($('#esVictima').is(':checked') ) {

        $('#fechanac').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            maxDate: moment().subtract(0, 'years').format('YYYY-MM-DD'),
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
        });
        $('#edad').attr({'min':0});
      }else{
        $('#edad').attr({'min':16});
        $('#fechanac').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            maxDate: moment().subtract(16, 'years').format('YYYY-MM-DD'),
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
        });
      }

    });


    $('#fechanac').datetimepicker({
        format: 'YYYY-MM-DD',
        minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
        maxDate: moment().subtract(16, 'years').format('YYYY-MM-DD'),
        widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
    });
      $('#edad').attr({'min':16});

    $("#fechanac").on("change.datetimepicker", function (e) {
        $('#edad').val(moment().diff(e.date,'years'));
    });
    $( "#edad" ).change(function() {
        var anios = $('#edad').val();
        $('#fechanac').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
    });

    $(function () {
        $('#fechanac2').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            maxDate: moment(),
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
        });
    });
    $("#fechanac2").on("change.datetimepicker", function (e) {
        $('.edad2').val(moment().diff(e.date,'years'));
    });
    $( ".edad2" ).change(function() {
        var anios = $('.edad2').val();
        $('#fechanac2').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
    });

     $('#fechaCit').datetimepicker({
       
           maxDate: moment(),
           widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
       });

    $(function () {
        $('#fechadelit').datetimepicker({
           format: 'YYYY-MM-DD',
           maxDate: moment(),
           widgetPositioning: {
            vertical: 'bottom',
            horizontal: 'left'
        }
       });
        $('#fecha').focus(function(){
            $('#cajados').css("padding-bottom", '80px');
        });
        $('#fecha').focusout(function(){
            $('#cajados').css("padding-bottom", '10px');
        });
    });

    $(function () { //Datetimepicker a la zquierda y debajo para vizualizar mejor no se oculte en la nav
        $('#horadelit').datetimepicker({
            format: 'LT',
            widgetPositioning: {
                vertical: 'bottom',
                horizontal: 'left'
            }
       });
    });
    $("#motivoEstancia").val("SIN INFORMACION");
    $("#numInterno").val("S/N");
    $("#numInterno2").val("S/N");
    $("#numInterno3").val("S/N");
    $("#numInternoC").val("S/N");
    $("#numExterno").val("S/N");
    $("#numExterno2").val("S/N");
    $("#numExterno3").val("S/N");
    $("#numExternoC").val("S/N");
    $("#fax").val("SIN INFORMACION");
    $("#correo").val("sin@informacion.com");

    $("#archivo").fileinput({
        language:'es',
        theme: 'fa',
        browseClass: 'btn btn-info btn-block',
        showCaption: true,
        showRemove: true,
        showUpload: false,
        allowedFileExtensions: ['jpg','jpeg','png','gif','pdf']
    });
    var tiempoDelay;
});
      $('#fechanac').trigger('change');
      $('#edad').val('16');
$("#btn-reset").on("click",function(){
    swal({
        title: "¿Estas seguro?",
        text: "Deseas borrar el contenido del formulario y del almacenamiento local",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar",
        closeOnConfirm: false,
        closeOnCancel: false
      },
      function(isConfirm) {
        if (isConfirm) {
            //e.preventDefault();
            $('form').trigger("reset");
            $('select').trigger('change');
           swal("Borrado", "Ya puedes llenar tu formulario con normalidad", "success");
        } else {
          swal("Cancelado", "Tus datos siguen ahí", "error");
        }
      });

    $("#btn-reset").html('<i class="fa fa-eraser" aria-hidden="true"></i>');

});


    //--- N A  R   R   A   C    I   O  N   E   S
    function crearFileInput(){
      $("#archivo").fileinput('destroy');
      $("#archivo").fileinput({
          language:'es',
          theme: 'fa',
          browseClass: 'btn btn-info btn-block',
          showCaption: true,
          showRemove: true,
          showUpload: false,
          allowedFileExtensions: ['jpg','jpeg','png','gif','pdf']
      });
    }

    $(".ver-Narracion").on('click',function(e){
      var id=this.id;
      $('#btn-submit').prop("disabled", true );
      $("#narracion").prop( "disabled", true );
      $.get("../../"+id+"/ver",'async:true',function(response){
       $('#narracion').val(response.narracion);
       if(response.archivo!=""){
         $("#subirArchivo").show();
         console.log('entra');
         //ruta=window.location.host+"/"+$.url('1')+("/public/storage/adjuntoNarracion/"+response.archivo);
         ruta=("../../../storage/adjuntoNarracion/"+response.archivo);
         console.log(ruta);
          $("#archivo").fileinput('destroy');
         $("#archivo").fileinput({
           language:'es',
           theme:'fa',
           browseClass:'btn btn-info btn-block',
           showCaption:false,
           showUpload:false,
           showRemove:false,
           allowedFileExtensions:['jpg','jpeg','png','pdf'],
           previewFileIcon:'<i class="glyphicon glyphicon-king"></i>',
           overwriteInitial:false,
           initialPreviewAsData:true,
           initialPreview:[ruta]
           });
       }else{
        $("#subirArchivo").hide();
        $("#archivo").fileinput('destroy');
       }
     });
    });
     $("#subirArchivo").hide();
    $("#btn-narracion").on("click",function(){
      $("#narracion").attr("placeholder", "Ingrese Narración");
      $('#btn-submit').prop("disabled", false );
       crearFileInput();
       $("#subirArchivo").show();
       $("#narracion").prop("disabled", false );


    });


      $('#fechanac').trigger('change');
      $('#edad').val('16');
      $("#btn-reset").on("click",function(){
        swal({
            title: "¿Estas seguro?",
            text: "Deseas borrar el contenido del formulario y del almacenamiento local",
            type: "warning",
            showCancelButton: true,
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Aceptar",
            cancelButtonText: "Cancelar",
            closeOnConfirm: false,
            closeOnCancel: false
          },
          function(isConfirm) {
            if (isConfirm) {
                //e.preventDefault();
                $('form').trigger("reset");
                $('select').trigger('change');
               swal("Borrado", "Ya puedes llenar tu formulario con normalidad", "success");
            } else {
              swal("Cancelado", "Tus datos siguen ahí", "error");
            }
          });

          });


//$('#btn-submit').prop("disabled", true );
$("#narracion").prop( "disabled", true );

$("#narracionText").prop( "disabled", true );

$("#btn-narracion").on("click",function(){
   console.log("funciona on click");
 $("#narracionText").prop( "disabled", false );

});
// ---- Transiciones BOTONES y pestañas---//
  
$( "#btn-reset" ).hover(function() {    
    $(this).html( "Limpiar campos" );    
  },function(){    
    $(this).html('<i class="fa fa-eraser" aria-hidden="true"></i>')
});  
$( "#regresocarpeta" ).hover(function() {    
    $(this).html( "Regresar a carpeta" );    
  },function(){    
    $(this).html('<i class="fa fa-folder-open" aria-hidden="true"></i>')
}); 
$("#p-personal").hasClass('')
$("#personal").html( "Datos personales" );
$("#espacio-notif").css("margin-left","90px");
$("#p-personal").click(function(){
    if ($(this).hasClass('show')){
        $("#personal").html( "Datos personales" );
        $("#espacio-notif").css("margin-left","90px");
    }else{}
        
});/*
$( "#personal" ).on({
    focus: function() {
        $(this).html( "Datos personales" );
        $("#espacio-notif").css("margin-left","90px");
    }, mouseenter: function() {
        $(this).html( "Datos personales" );
        $("#espacio-notif").css("margin-left","90px");
    }, mouseleave: function() {
        $(this).html('<i class="fa fa-user-circle-o" aria-hidden="true"></i>')
        $("#espacio-notif").css("margin-left","0px"); 
    }
  }); /*
    
  $( "#personal" ).hover(function() {    
        $(this).html( "Datos personales" );
        $("#espacio-notif").css("margin-left","90px");     
  }, function(){
    $(this).html('<i class="fa fa-user-circle-o" aria-hidden="true"></i>')
    $("#espacio-notif").css("margin-left","0px"); 
  });*/
  $( "#direccion" ).hover(function() {
      $(this).html( "Dirección" ); 
      $("#espacio-notif1").css("margin-left","35px");      
  }, function(){
    $(this).html('<i class="fa fa-address-card" aria-hidden="true"></i>')
    $("#espacio-notif1").css("margin-left","0px"); 
  });

  $( "#dtrabajo" ).hover(function() {
    $(this).html( "Datos del trabajo" ); 
    $("#espacio-notif2").css("margin-left","87px");               
  }, function(){
    $(this).html('<i class="fa fa-industry" aria-hidden="true"></i>')
    $("#espacio-notif2").css("margin-left","0px"); 
  });
  /* condicion para Tab acive mantenga html en letras//
  $ ("#personal").click(function (){ 
    if($(this).hasClass("active")){
    $(this).html( "Datos personales" ); 
 }
});*/
  $( "#dnotificaciones" ).hover(function() {
    $(this).html( "Dirección para notificaciones" ); 
    $("#espacio-notif3").css("margin-left","170px");             
  }, function(){
    $(this).html('<i class="fa fa-bell" aria-hidden="true"></i>')
    $("#espacio-notif3").css("margin-left","0px"); 
  });
  $( "#dextra" ).hover(function() {
    $(this).html( "Otros datos" ); 
    $("#espacio-notif4").css("margin-left","90px");             
  }, function(){
    $(this).html('<i class="fa fa-asterisk" aria-hidden="true"></i>')
    $("#espacio-notif4").css("margin-left","0px"); 
  });
  $( "#autoridad" ).hover(function() {
    $(this).html( "Información sobre la autoridad" ); 
    $("#espacio-notif5").css("margin-left","90px");             
  }, function(){
    $(this).html('<i class="fa fa-shield" aria-hidden="true"></i>')
    $("#espacio-notif5").css("margin-left","0px"); 
  });