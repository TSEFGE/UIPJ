
$(document).ready(function(){
    $("#registroAux").hide();
    console.log ("ready");
});

$("#btn-agregar").on("click", function(){    
    $("#registroAux").show(1000);
});
$("#btn-ocultar").on("click", function () {
    $("#registroAux").hide(1000);
});

