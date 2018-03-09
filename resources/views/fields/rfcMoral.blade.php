<script>
	$("#nombres2").focusout(function() {
  obtenerRFC();
});

$("#fechaAltaEmpresa").focusout(function() {
  obtenerRFC();
});

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

function obtenerRFC(){

console.log('entra ajax');

nombre = $("#nombres2").val().toUpperCase();
fecha = $("#fechaAltaEmpresa").val();
	

console.log(fecha);

  dia = fecha.substr(8, 2);
  mes = fecha.substr(5, 2);
  ano = fecha.substr(2, 2);

ruta="{{route('rfc.denunciante')}}";
$.ajax({
      type: "POST",
      url:ruta,
      data: {nombre,dia,mes,ano},
      dataType:"json",
     success: function(data){
     	$("#rfc2").val(data.res);
         console.log(data);
   },error:function(data){
   // console.log(data);
   }
 });

 
	
} 


</script>