(function($, w, undefined){
    $(function(){

// hide div beneath second h2

	$('.title:nth-of-type(1n+2) ~ div').addClass('hide');
	$('.employment .description').addClass('hide');
	$('.title').click(function() {
	    $(this).next().slideToggle();
	});


	var windowHeight = $(window).height();
	var windowWidth = $(window).width();
	console.log(windowHeight);
	console.log(windowWidth);
	$('.front').css('height', windowHeight - 52);

	$('#main-content').css('minHeight', windowHeight);
		// $('.one').delay(500).animate({opacity:'1'},500, 'easeOutQuint');


        
    }); // end ready

    // stuff not needing dom can run here.
})(jQuery, window);