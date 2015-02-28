/* ------------------------------------
	globalnav.js
	Mignon Style
	http://mignonstyle.com/
------------------------------------ */
jQuery(function($){
	var replaceWidth = 640;
	var timer = false;
	var nav_control = $('#nav-control');
	var globalnav = $('div.globalnav');
	var search_label = $('.header-links .search-box .icon-search');
	var search_field = $('.header-links .search-box .ccm-search-block-text');

	global_menu();

	// resize
	$(window).resize(function(){
		if(timer !== false){
			clearTimeout(timer);
		}
		timer = setTimeout(function(){
			if(nav_control.attr('class') == 'nav-close'){
				global_menu();
			}
		}, 200);
	});

	// globalnav
	$(nav_control).click(function(){
		search_field.slideUp();

		if($(this).hasClass('nav-close')){
			globalnav.slideDown();
			$(this).removeClass('nav-close').addClass('nav-active');
			$('span', nav_control).removeClass('fa-bars').addClass('fa-times');
		}else{
			globalnav.slideUp();
			$(this).removeClass('nav-active').addClass('nav-close');
			$('span', nav_control).removeClass('fa-times').addClass('fa-bars');
		}
		return false;
	});

	// search
	search_label.click(function(){
		if($(nav_control).not('nav-close')){
			globalnav.slideUp();
			$(nav_control).removeClass('nav-active').addClass('nav-close');
			$('span', nav_control).removeClass('fa-times').addClass('fa-bars');
		}
		search_field.slideToggle();
	});

	// global menu
	function global_menu(){
		var windowWidth = parseInt($(window).width());

		if(windowWidth <= replaceWidth){ // 640
			globalnav.css('display', 'none');
			search_field.css('display', 'none');
		}else if(windowWidth > replaceWidth){ // 641
			globalnav.css('display', 'inline');
			search_field.css('display', 'inline');
		}
	}
});