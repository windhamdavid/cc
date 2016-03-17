jQuery("document").ready(function($){
    
    var nav = $('.nav-container');
    
    $(window).scroll(function () {
        if ($(this).scrollTop() > 136) {
            nav.addClass("f-nav");
        } else {
            nav.removeClass("f-nav");
        }
    });
	 
	$(".navbar-toggle").on("click", function () {
		$(this).toggleClass("active");
	});
 
});

$(document).bind('keyup', function(e) {
     if(e.which == 39){
         $('.carousel').carousel('next');
     }
     else if(e.which == 37){
         $('.carousel').carousel('prev');
     }
 });
 
$(function () {
	$('[data-toggle="tooltip"]').tooltip()
})