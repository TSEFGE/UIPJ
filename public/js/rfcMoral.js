$("#nombres2").focusout(function() {
  obtenerRFC();
});
$("#fechaAltaEmpresa").focusout(function() {
  obtenerRFC();
});

function obtenerRFC(){
nombreInput = $("#nombres2").val().toUpperCase();
fechaInput = $("#fechaAltaEmpresa").val().toUpperCase();

//---------------Generar Digitos de Nombre----------------
var palabra1;
var palabra2;
var palabra3;

var array= nombreInput.split("");

// Valor : contenido de ésa posicion
// indice: posicion
// console.log("En el índice " + indice + " hay este valor: " + valor);

array.forEach( function(valor, indice, array) { 
         if(valor="B"|"I"){
              var aux;
              aux.push(valor);
            }else{
              console.log(valor);
            }
    
    });

}