// hide all but first section content, toggle display on each
$('article + article:nth-child(1n+2) .content').addClass('hide');
$('.section h2').click(function() {
    $(this).next().slideToggle();
});

// hide all job descriptions, toggle display on each
$('.employment .description').addClass('hide');
$('.title').click(function() {
    $(this).next().slideToggle();
});