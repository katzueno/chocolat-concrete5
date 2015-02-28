/* ------------------------------------
	navimenu.js
	Mignon Style
	http://mignonstyle.com/
------------------------------------ */
jQuery(function($){
	var replaceWidth = 640;
	var timer = false;

	navi_menu();

	// resize
	$(window).resize(function(){
		if(timer !== false){
			clearTimeout(timer);
		}
		timer = setTimeout(function(){
			navi_menu();
		}, 200);
	});

	function navi_menu(){
		var windowWidth = parseInt($(window).width());

		if(windowWidth > replaceWidth){ // 640
			menu_slide();
		}else if(windowWidth <= replaceWidth){
			$('.globalnav > ul li').unbind('hover');
			$('div.globalnav ul ul').show();
		}
	}

	function menu_slide(){
		$('.globalnav > ul li').hover(function(){
			if($('>ul', this).size()){
				$('>ul:not(:animated)', this).slideDown('fast');
			}
		},function(){
			if($('>ul', this).size()){
				$('>ul', this).slideUp('fast');
			}
		});
	}
});