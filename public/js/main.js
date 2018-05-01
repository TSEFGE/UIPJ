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
function scrollToTop(scrollDuration) {
    var cosParameter = window.scrollY / 2,
        scrollCount = 0,
        oldTimestamp = performance.now();
    function step (newTimestamp) {
        scrollCount += Math.PI / (scrollDuration / (newTimestamp - oldTimestamp));
        if (scrollCount >= Math.PI) window.scrollTo(0, 0);
        if (window.scrollY === 0) return;
        window.scrollTo(0, Math.round(cosParameter + cosParameter * Math.cos(scrollCount)));
        oldTimestamp = newTimestamp;
        window.requestAnimationFrame(step);
    }
    window.requestAnimationFrame(step);
}
/*
function topFunction() {
	// document.body.scrollTop = 20;
	document.documentElement.scrollTop = 0;
}*/
$('[data-toggle="tooltip"]').tooltip();
var correcto=0; 

