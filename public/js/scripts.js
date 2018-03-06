$(document).ready(function(){
    $("input:text").keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });
    $("textarea").keyup(function() {
        $(this).val($(this).val().toUpperCase());
    });
    

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

            //Datos personales requeridos de Persona Moral o Empresa
            $('#nombres2').prop('disabled', false);
            $('#rfc2').prop('disabled', false);
            $('#representanteLegal').prop('disabled', false);
            $("#senasPartic").prop('disabled', false);
            $("#narracion").prop('disabled', false);
            
            //Datos personales no requeridos de Persona Física
            $("#nombres").prop('disabled', true);   
            $("#primerAp").prop('disabled', true);   
            $("#segundoAp").prop('disabled', true);   
            $("#rfc").prop('disabled', true);   
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

            //Datos personales no requeridos de Persona Moral o Empresa
            $('#nombres2').prop('disabled', true);
            $('#rfc2').prop('disabled', true);
            $('#representanteLegal').prop('disabled', true);
            
            //Datos personales requeridos de Persona Física
            $("#nombres").prop('disabled', false);   
            $("#primerAp").prop('disabled', false);   
            $("#segundoAp").prop('disabled', false);   
            $("#rfc").prop('disabled', false);   
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
           defaultDate: moment()
       });
    });
    $(function () {
        $('#horaInter').datetimepicker({
           format: 'LT',
           maxDate: moment()
       });
    });
    $(function () {
        $('#fechaiph2').datetimepicker({
           format: 'YYYY-MM-DD',
           maxDate: moment()
       });
    });
    $(function () {
        $('#fechadet').datetimepicker({
            format: 'YYYY-MM-DD',
            defaultDate: moment()
        });
    });

    $(function () {
        $('#fechanac').datetimepicker({
            format: 'YYYY-MM-DD',
            minDate: moment().subtract(150, 'years').format('YYYY-MM-DD'),
            maxDate: moment().subtract(18, 'years').format('YYYY-MM-DD')
        });
    });
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
            maxDate: moment()
        });
    });
    $("#fechanac2").on("change.datetimepicker", function (e) {
        $('.edad2').val(moment().diff(e.date,'years'));
    });
    $( ".edad2" ).change(function() {
        var anios = $('.edad2').val();
        $('#fechanac2').datetimepicker('date', moment().subtract(anios, 'years').format('YYYY-MM-DD'));
    });

    $(function () {
        $('#fechadelit').datetimepicker({
           format: 'YYYY-MM-DD',
           maxDate: moment()
       });
    });

    $(function () {
        $('#horadelit').datetimepicker({
           format: 'LT',
           maxDate: moment()
       });
    });
});