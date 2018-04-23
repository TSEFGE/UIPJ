$('#tabsautoridad.nav-tabs a').on('hidden.bs.tab', function(event){

	var index= $($(this).attr('href')).index();
	switch(index) {
	 case 0:
	 var countvacio = $('#collapsePersonales3 .vacio').length;
	 totales= countvacio;
	 var count = $('#collapsePersonales3 .error').length;
	 if (count==0){
		$("#errora").hide();
	} 
	else{  
		$("#errora").show();                             
		$("#errora").html(count); 
	}  
	var correctos = $('#collapsePersonales3 .valid').length;
	if (correctos==0){
		$("#biena").hide();
	} 
	else if( correctos ==totales){
		$("#biena").show();
		$("#biena").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#biena").show();                             
		$("#biena").html(correctos); 
	} 
	
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacioa").hide();
	} else{  
		$("#vacioa").show();                            
		$("#vacioa").html(countvacio); 
	} 
	break;
	
	case 1:
	var countvacio = $('#collapseDir3 .vacio').length; 
    totales = countvacio;
    console.log(totales);
    
	var count = $('#collapseDir3 .error').length;
	if (count==0){
		$("#errora1").hide();
	} 
	else{  
		$("#errora1").show();                             
		$("#errora1").html(count); 
	} 
	var correctos = $('#collapseDir3 .valid').length;
	if (correctos==0){
		$("#biena1").hide();
	} 
	else if( correctos ==totales){
		$("#biena1").show();
		$("#biena1").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#biena1").show();                             
		$("#biena1").html(correctos); 
	} 
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacioa1").hide();
	} else{  
		$("#vacioa1").show();                            
		$("#vacioa1").html(countvacio); 
    }
    
    
	break;

	case 2:
	var countvacio = $('#collapseTrab3 .vacio').length;
	totales=countvacio;
	var count = $('#collapseTrab3 .error').length;
	if (count==0){
		$("#errora2").hide();
	} 
	else{  
		$("#errora2").show();                             
		$("#errora2").html(count); 
	}   
	var correctos = $('#collapseTrab3 .valid').length;
	if (correctos==0){
		$("#biena2").hide();
	} 
	else if( correctos ==totales){
		$("#biena2").show();
		$("#biena2").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#biena2").show();                             
		$("#biena2").html(correctos); 
	} 
	countvacio=countvacio-count-correctos;                                
	if (countvacio == 0 || countvacio ==totales){
		$("#vacioa2").hide();
	} else{  
		$("#vacioa2").show();                            
		$("#vacioa2").html(countvacio); 
	} 
	break;

	case 3:
	var countvacio = $('#collapseAutoridad .vacio').length;
	totales=countvacio;
	var count = $('#collapseAutoridad .error').length; 
	if (count==0){
		$("#errora3").hide();
	} 
	else{  
		$("#errora3").show();                             
		$("#errora3").html(count); 
	} 
	var correctos = $('#collapseAutoridad .valid').length;                                
	if (correctos==0){
		$("#biena3").hide();
	} 
	else if( correctos ==totales){
		$("#biena3").show();
		$("#biena3").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#biena3").show();                             
		$("#biena3").html(correctos); 
	} 
	countvacio=countvacio-count-correctos;                                
	if (countvacio == 0 || countvacio ==totales){
		$("#vacioa3").hide();
	} else{  
		$("#vacioa3").show();                            
		$("#vacioa3").html(countvacio); 
	}
	break;

	default:
	break;

}
});