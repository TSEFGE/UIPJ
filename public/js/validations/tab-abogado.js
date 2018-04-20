$('#tabsabogado.nav-tabs a').on('hidden.bs.tab', function(event){

	var index= $($(this).attr('href')).index();
	switch(index) {
	 case 0:
	 var countvacio = $('#collapsePersonales3 .vacio').length; 
	 totales= countvacio;
	 var count = $('#collapsePersonales3 .error').length; 
	 if (count==0){
		$("#error").hide();
	} 
	else{  
		$("#error").show();                             
		$("#error").html(count); 
	}
	$("#error").html(count);
	var correctos = $('#collapsePersonales3 .valid').length;
	if (correctos==0){
		$("#bien").hide();
	} 
	else if( correctos ==totales){
		$("#bien").show();
		$("#bien").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#bien").show();                             
		$("#bien").html(correctos); 
	} 
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacio").hide();
	} else{  
		$("#vacio").show();                            
		$("#vacio").html(countvacio); 
	}                               
	break;
	
	case 1:
	var countvacio = $('#collapseTrab3 .vacio').length; 
	totales = countvacio;
	var count = $('#collapseTrab3 .error').length;
	if (count==0){
		$("#error1").hide();
	} 
	else{  
		$("#error1").show();                             
		$("#error1").html(count); 
	}   
	var correctos = $('#collapseTrab3 .valid').length;
	if (correctos==0){
		$("#bien1").hide();
	} 
	else if( correctos ==totales){
		$("#bien1").show();
		$("#bien1").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#bien1").show();                             
		$("#bien1").html(correctos); 
	} 
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacio1").hide();
	} else{  
		$("#vacio1").show();                            
		$("#vacio1").html(countvacio); 
	}  
	break;
	case 2:
	var countvacio = $('#collapseAutoridad .vacio').length; 
	totales=countvacio;
	var count = $('#collapseAutoridad .error').length; 
	if (count==0){
		$("#error2").hide();
	} 
	else{  
		$("#error2").show();                             
		$("#error2").html(count); 
	}  
	var correctos = $('#collapseAutoridad .valid').length;
	if (correctos==0){
		$("#bien2").hide();
	} 
	else if( correctos ==totales){
		$("#bien2").show();
		$("#bien2").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#bien2").show();                             
		$("#bien2").html(correctos); 
	} 
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacio2").hide();
	} else{  
		$("#vacio2").show();                            
		$("#vacio2").html(countvacio); 
	}  
	break;

	default:
	break;


}
});