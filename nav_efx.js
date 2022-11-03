$(document).ready(function(){
		var scroll_start = 0;
		var startchange = $('#effect');
		var offset = startchange.offset();
		if (startchange.length) {

			$(document).scroll(function(){
				scroll_start = $(this).scrollTop();
					if (scroll_start > offset.top) {
						$(".navbar-fixed-top").css('background-color','#3c3d41');
					}
					else{
						$(".navbar-fixed-top").css('background-color','rgb(0,0,0,0.2)');

					}
			});
		}
	});