function resizeSpacer(){
	var h = $('footer').offset().top-($('.main-container').offset().top+$('.main-container').height())-40;
	$('.spacer').height(h);
}

$(document).ready(function(){
	var next = 0;
	//setInterval(resizeSpacer, 100);
	
	//$('.image-carousel').carousel({
	//	interval: 1000
	//})
	var items = $('.carousel-description > .d-item');
	$('.carousel').carousel({
		interval: 8000
	}).on('slide', function(){
		//console.log(items.length);
		var itemcount = items.length;
		$('.carousel-description > .active').hide('drop',{ direction: "down" }, 250, function(){
			$(this).removeClass('active');
		});
		if(next < itemcount-1){
			next++;
		}else{
			next=0;
		}
		
		$(items[next]).delay(250).prependTo('.carousel-description').show('drop', { direction: "up" }, 250, function(){
			$(this).addClass('active');
		});
		//$('.carousel-description:first-child');
	});
	
});
