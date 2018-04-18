$(document).ready(function(){
    // Selects personales
    data = localStorage.getItem("[id=undefined][name=undefined][id=fechaNacimiento][name=fechaNacimiento]");
    if (data != null){
     $('#fechaNAcimiento').val(data);
    }
    data = localStorage.getItem("[id=undefined][name=undefined][id=sexo][name=sexo]");
    if (data != null){
      var sex  =  data.toString();
      $('#sexo').val(sex).trigger('change');     
    }
    data=null;
    data = localStorage.getItem("[id=undefined][name=undefined][id=idNacionalidad][name=idNacionalidad]");
    if (data != null){
     $('#idNacionalidad').val(data).trigger('change.select2');
    }
    data=null;
    data = localStorage.getItem("[id=undefined][name=undefined][id=idEtnia][name=idEtnia]");
    if (data != null){
     $('#idEtnia').val(data).trigger('change.select2');
    }
    data=null;
    data = localStorage.getItem("[id=undefined][name=undefined][id=idLengua][name=idLengua]");
    if (data != null){
     $('#idLengua').val(data).trigger('change.select2');
    }
    data=null;
    data = localStorage.getItem("[id=undefined][name=undefined][id=idOcupacion][name=idOcupacion]");
    if (data != null){
     $('#idOcupacion').val(data).trigger('change.select2');
    }
    data=null;
    data = localStorage.getItem("[id=undefined][name=undefined][id=idEstadoCivil][name=idEstadoCivil]");
    if (data != null){
     $('#idEstadoCivil').val(data).trigger('change.select2');
    }
    data=null;
    data = localStorage.getItem("[id=undefined][name=undefined][id=idReligion][name=idReligion]");
    if (data != null){
     $('#idReligion').val(data).trigger('change.select2');
    }
    data=null;
    data = localStorage.getItem("[id=undefined][name=undefined][id=idEscolaridad][name=idEscolaridad]");
    if (data != null){
     $('#idEscolaridad').val(data).trigger('change.select2');
    }
    
});