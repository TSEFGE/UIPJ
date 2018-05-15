
$(document).ready(function(){
    $("#registroAux").hide();
    $('#btn-submit').prop('disabled', true);
    localStorage.removeItem('[id=undefined][name=undefined][id=contraseña2][name=contraseña2]');
    localStorage.removeItem('[id=undefined][name=undefined][id=contraseña][name=contraseña]');
    localStorage.removeItem('[id=undefined][name=undefined][id=contraseña2][name=repeat]');
    localStorage.removeItem('[id=undefined][name=undefined][id=contraseña][name=pass]');
    
    console.log ("ready");
});

$("#btn-agregar").on("click", function(){    
    $("#registroAux").show(1000);
});
$("#btn-ocultar").on("click", function () {
    $("#registroAux").hide(1000);
});
$('#contraseña').keyup
var contra1 = $('#contraseña').val();
var contra2 = $('#contraseña2').val();
console.log(`${contra1}`);
if (contra1 == contra2) {
    $('#btn-submit').prop('disabled', false);
}
else{
    $('#btn-submit').prop('disabled', true);
}

