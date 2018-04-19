$(window).on("unload", function(e) {
	//localStorage.clear();
	localStorage.removeItem('isLiveLocal');
	console.log('saliendo');
});

$("input:text,textarea").keyup(function() {
	$(this).val($(this).val().toUpperCase());
});

$("input:text, textarea").focusout(function() {
	$(this).val($(this).val().toUpperCase());
});

window.onscroll = function(){
	scrollFunction()
};

function scrollFunction() {
	if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
		document.getElementById("subir").style.display = "block";
	} else {
		document.getElementById("subir").style.display = "none";
	}
}

function topFunction() {
	// document.body.scrollTop = 20;
	document.documentElement.scrollTop = 0;
}