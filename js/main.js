function resizeSpacer(){
	var h = $('footer').offset().top-($('.main-container').offset().top+$('.main-container').height())-40;
	$('.spacer').height(h);
}

$(document).ready(function(){
	//setInterval(resizeSpacer, 100);
	
	$('.carousel').carousel({
		interval: 8000
	})
	
});
