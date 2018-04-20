$('#tabsdelito.nav-tabs a').on('hidden.bs.tab', function(event){

	var index= $($(this).attr('href')).index();
	switch(index) {
	 case 0:
	 var countvacio = $('#infodelito .vacio').length; 
	 totales=countvacio;
	 var count = $('#infodelito .error').length;
	 if (count==0){
		$("#errorad").hide();
	} 
	else{  
		$("#errorad").show();                             
		$("#errorad").html(count); 
	} 
	var correctos = $('#infodelito .valid').length; 
	if (correctos==0){
		$("#bienad").hide();
	} 
	else if( correctos ==totales){
		$("#bienad").show();
		$("#bienad").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#bienad").show();                             
		$("#bienad").html(correctos); 
	} 
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacioad").hide();
	} else{  
		$("#vacioad").show();                            
		$("#vacioad").html(countvacio); 
	}                               
	break;
	
	case 1:
	var countvacio = $('#lugardelito .vacio').length; 
	totales=countvacio;
	var count = $('#lugardelito .error').length;
	if (count==0){
		$("#errorad2").hide();
	} 
	else{  
		$("#errorad2").show();                             
		$("#errorad2").html(count); 
	}  
	var correctos = $('#lugardelito .valid').length; 
	if (correctos==0){
		$("#bienad2").hide();
	} 
	else if( correctos ==totales){
		$("#bienad2").show();
		$("#bienad2").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#bienad2").show();                             
		$("#bienad2").html(correctos); 
	}  
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacioad2").hide();
	} else{  
		$("#vacioad2").show();                            
		$("#vacioad2").html(countvacio); 
	} 
	break;
	default:
	break;


}
});