/* ------------------------------------
	masonry-widget.js
	Mignon Style
	http://mignonstyle.com/
------------------------------------ */
jQuery(function($){
	var sidebar_flag = false;
	var footer_flag = false;
	var replaceWidth = 800;
	var maxWidth = 1000;
	var timer = false;
	var column;
	var column_size;
	var wrapper_width;

	// The -15px when there is a scroll bar
	if($('#wrapper').outerHeight(true) > $(window).height()){
		maxWidth = maxWidth - 15;
	}

	set_masonry();

	// Reload Once you resize
	$(window).resize(function(){
		if(timer !== false){
			clearTimeout(timer);
		}
		timer = setTimeout(function(){
			set_masonry();
		}, 200);
	});

	function set_masonry(){
		// If the window is smaller than 1000
		if($(window).width() < maxWidth){
			if($(window).width() <= 640){
				// 640 if less than Remove masonry
				if(sidebar_flag){
					$('#sidebar .sidebar-widget').removeClass('widget-masonry');
					$('#sidebar .widget-inner').masonry('destroy');
					sidebar_flag = false;
				}

				if(footer_flag){
					$('#widget-footer .footer-widget').removeClass('widget-masonry');
					$('#widget-footer .widget-inner').masonry('destroy');
					footer_flag = false;
				}
				return;
			}else if(($(window).width() > 640) && ($(window).width() <= replaceWidth)){
				// If the window is smaller than 800
				column = 2;
				column_size = 10;
			}else if(replaceWidth < $(window).width()){
				// If the window is larger than 800
				column = 3;
				column_size = 20;
			}

			if($('#widget-footer-inner').size()){
				// If there is a footer
				wrapper_width = parseInt($('#widget-footer-inner').width());
			}else if($('#sidebar .widget-inner').size()){
				// Footer without, if there is a sidebar
				wrapper_width = parseInt($('#sidebar .widget-inner').width());
			}else{
				return;
			}

			var column_width = parseInt((wrapper_width - column_size) / column);
			set_widget_footer(column_width, 10);
			set_widget_sidebar(column_width, 10);
		}else if(maxWidth <= $(window).width()){
			// If the window is larger than 1000, remove the masonry of sidebar
			if(sidebar_flag){
				$('#sidebar .sidebar-widget').removeClass('widget-masonry');
				$('#sidebar .widget-inner').masonry('destroy');
				sidebar_flag = false;
			}
			set_widget_footer(column_width, 40);
		}
	}

	function set_widget_footer(column_width, gutter_size){
		$('#widget-footer .footer-widget').addClass('widget-masonry');

		$('#widget-footer .widget-inner').imagesLoaded(function(){
			$('#widget-footer .widget-inner').masonry({
				columnWidth: column_width,
				itemSelector: '.footer-widget',
				isAnimated: 'true',
				gutter: gutter_size, // masonry v3
			});
		});
		footer_flag = true;
	}

	function set_widget_sidebar(column_width, gutter_size){
		$('#sidebar .sidebar-widget').addClass('widget-masonry');

		$('#sidebar .widget-inner').imagesLoaded(function(){
			$('#sidebar .widget-inner').masonry({
				columnWidth: column_width,
				itemSelector: '.sidebar-widget',
				isAnimated: 'true',
				gutter: gutter_size, // masonry v3
				gutter: 10,
			});
		});
		sidebar_flag = true;
	}
});