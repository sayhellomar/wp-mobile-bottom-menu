(function($) {
	$(document).ready(function() {
		let position = $(window).scrollTop();
		
		$(window).on("scroll", function () {

			let scroll = $(window).scrollTop();
			if (scroll > position) {
				$('#mobile-bottom-menu').removeClass('show');
				$('#mobile-bottom-menu').addClass('hide');
			} else {
				$('#mobile-bottom-menu').addClass('show');
				$('#mobile-bottom-menu').removeClass('hide');
			}
			position = scroll;
		});
	});
})(jQuery);
