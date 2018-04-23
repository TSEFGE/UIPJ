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
     
//$('#btn-submit').prop("disabled", true );
$("#narracion").prop( "disabled", true );

$("#narracionText").prop( "disabled", true );

$("#btn-narracion").on("click",function(){
    console.log("funciona on click");
    $("#narracionText").prop( "disabled", false );

});