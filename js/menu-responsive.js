$(function() {
		   
	// main menu toggler
	//$('.nav').prepend('<div class="menu-icon"><span>Menu</span></div>');
//	$('.menu-icon').on('click',(function(){						
//		$('ul.dropdown').slideToggle(600);
//		$("ul.dropdown li").click(function() {
//            	$('.dnt3-menu ul.dropdown').remove();
//        	});
//	
//	});	
	$('.nav').prepend('<div class="menu-icon"><span>Menu</span></div>');
	$(document).on('click',function(e) {
        $('ul.dropdown').slideToggle(600);
			$("ul.dropdown li").click(function() {
            	$('.dnt3-menu ul.dropdown').hide();
        	});
    }); 
	

	// sub menu accordion-like toggler 
	var $menuToggler = $('.sub > a');
	$menuToggler.click(function(e) {
		e.preventDefault();
		var $this = $(this);
		$this.toggleClass('current').next('ul').toggleClass('current');
	});	
	
});
