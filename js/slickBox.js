$(document).ready(function() {
  $('#slickbox_a').hide();
  $('#slickbox_b').hide();
  $('a#slick-toggle_a').click(function() {
    $('#slickbox_a').toggle(400);
    return false;
  });

	$('a#slick-toggle_b').click(function() {
    $('#slickbox_b').toggle(400);
    return false;
  });
});