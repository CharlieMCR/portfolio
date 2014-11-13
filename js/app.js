(function($, w, undefined){
    $(function(){

// hide div beneath second h2

$('.title:nth-of-type(1n+2) ~ div').addClass('hide');
$('.employment .description').addClass('hide');
$('.title').click(function() {
    $(this).next().slideToggle();
});



        
    }); // end ready

    // stuff not needing dom can run here.
})(jQuery, window);