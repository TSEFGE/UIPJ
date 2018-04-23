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