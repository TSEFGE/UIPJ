$('#tdenunciado.nav-tabs a').on('hidden.bs.tab', function(event){

	var index= $($(this).attr('href')).index();
	switch(index) {
	 case 0:                               
	 var countvacio = $('#collapsePersonales2 .vacio').length; 
	 totales = countvacio                                                             
	 var count = $('#collapsePersonales2 .error').length; 
	 if (count==0){
		$("#error").hide();
	} 
	else{  
		$("#error").show();                             
		$("#error").html(count); 
	} 
	var correctos = $('#collapsePersonales2 .valid').length; 
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
	countvacio=countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacio").hide();
	} else{  
		$("#vacio").show();                            
		$("#vacio").html(countvacio); 
	}          
	break;                                
	case 1:
	var countvacio = $('#collapseDir2 .vacio').length; 
	totales= countvacio;                                
	var count = $('#collapseDir2 .error').length;
	if (count==0){
		$("#error1").hide();
	} 
	else{  
		$("#error1").show();                             
		$("#error1").html(count); 
	} 
	var correctos = $('#collapseDir2 .valid').length;
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
	var countvacio = $('#collapseTrab2 .vacio').length;
	totales= countvacio;
	var count = $('#collapseTrab2 .error').length;                                
	if (count==0){
		$("#error2").hide();
	} 
	else{  
		$("#error2").show();                             
		$("#error2").html(count); 
	} 
	var correctos = $('#collapseTrab2 .valid').length;                                
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

	case 3:
	var countvacio = $('#collapseNotifs2 .vacio').length;
	totales= countvacio;
	var count = $('#collapseNotifs2 .error').length;                                
	if (count==0){
		$("#error3").hide();
	} 
	else{  
		$("#error3").show();                             
		$("#error3").html(count); 
	} 
	var correctos = $('#collapseNotifs2 .valid').length;                                
	if (correctos==0){
		$("#bien3").hide();
	} 
	else if( correctos ==totales){
		$("#bien3").show();
		$("#bien3").html('<i class="fa fa-check" aria-hidden="true"></i>');
		console.log("son iguales");
	}                                
	else{  
		$("#bien3").show();                             
		$("#bien3").html(correctos); 
	} 
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacio3").hide();
	} else{  
		$("#vacio3").show();                            
		$("#vacio3").html(countvacio); 
	}  
	break;

	case 4:
	var countvacio = $('#collapseDenun2 .vacio').length;
	totales= countvacio;
	var count = $('#collapseDenun2 .error').length;                                
	if (count==0){
		$("#error4").hide();
	} 
	else{  
		$("#error4").show();                             
		$("#error4").html(count); 
	} 
	var correctos = $('#collapseDenun2 .valid').length;                                
	if (correctos==0){
		$("#bien4").hide();
	} 
	else if( correctos ==totales){
		$("#bien4").show();
		$("#bien4").html('<i class="fa fa-check" aria-hidden="true"></i>');                                                                
	}                                
	else{  
		$("#bien4").show();                             
		$("#bien4").html(correctos); 
	}  
	countvacio= countvacio-count-correctos;
	if (countvacio == 0 || countvacio ==totales){
		$("#vacio4").hide();
	} else{  
		$("#vacio4").show();                            
		$("#vacio4").html(countvacio); 
	} 
	break;

	default:
	break;
}

});
