(function(){

		$('.carousel').carousel({
  			interval: 5000,
 		    pause:"hover",
            wrap:true,
            interva:0
});
	// $('carouselExampleSlidesOnly').carousel();
	$(document).keydown(function(e) {
	if (e.keyCode === 37) {
	   // Previous
	   $(".carousel-control-prev").click();
	   return false;
	}
	if (e.keyCode === 39) {
	   // Next
	   $(".carousel-control-next").click();
	   return false;
	}
});
	$('.btn-primary').on('click',function(e){
			$('.carousel-control-prev').click();
	});
	$('.btn-info').on('click',function(e){
			$('.carousel-control-next').click();
	});
	

})();