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