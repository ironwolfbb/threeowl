
$('.services-scroll').on('click', function() {
   $('html,body').animate({scrollTop:$('#services-block-main').offset().top+"px"},{duration:1E3});
});
$('.stocks-scroll').on('click', function() {
   $('html,body').animate({scrollTop:$('#stocks-block').offset().top+"px"},{duration:1E3});
});
$('.cases').on('click', function() {
   $('html,body').animate({scrollTop:$('#scrolling-block').offset().top+"px"},{duration:1E3});
});
$('.order-individual-project-btn button').on('click', function() {
   $('html,body').animate({scrollTop:$('.form').offset().top+"px"},{duration:1E3});
});
