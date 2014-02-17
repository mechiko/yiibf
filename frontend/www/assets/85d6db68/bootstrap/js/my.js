
$('#nav-wrapper').height($("#nav").height());

$('#nav').affix({
	offset: { top: $('#nav').offset().top }
});
$('#sidebar-wrapper').height($("#sidebar").height());

$('#sidebar').affix({
	offset: { top: $('#sidebar').offset().top }
});

$('#nav-old').affix({
      offset: {
        top: $('header').height()
      }
});


$('.dropdown-toggle').dropdown();

