
$(function() {
	if ($('#nav-wrapper').length) {
		$('#nav-wrapper').height($("#nav").height());
	}
	if ($('#nav').length) {
		$('#nav').affix({
			offset: $('#nav').position()
		});
	}
	if ($('#sidebar-wrapper').length) {
		$('#sidebar-wrapper').height($("#sidebar").height());
	}
	if ($('#sidebar').length) {
		$('#sidebar').affix({
				offset: { top: $('#sidebar').offset().top }
		});
	}


	$('.dropdown-toggle').dropdown();
});
