<script>
	$("#nombres2").focusout(function() {
  obtenerRFC();
});

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

function obtenerRFC(){
console.log('entra ajax');
nombreInput = $("#nombres2").val().toUpperCase();

ruta="{{route('rfc.denunciante')}}";
$.ajax({
      type: "POST",
      url:ruta,
      data: {nombreInput},
      dataType:"json",
     success: function(data){
         console.log(data);
   },error:function(data){
    console.log(data);
   }
 });
/*
$.get("funcion.php",{ "nombre" :  ""+nombreInput+"" },function(data){

             alert(data);


});*/
}




  
  
</script>