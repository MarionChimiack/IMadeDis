var $animation = jQuery('.visual img');
var $site = jQuery(window);

function startAnimation(){

  var site_height = $site.height();
  var site_top_position = $site.scrollTop();
  var site_bottom_position = (site_top_position + site_height);

  jQuery.each($animation, function(){
    var element = jQuery(this);
    var element_height = element.outerHeight();
    var element_top_position = element.offset().top;
    var element_bottom_position = (element_top_position + element_height);

    if ((element_bottom_position >= site_top_position) &&
        (element_top_position <= site_bottom_position)){
      element.addClass('animate');
    }
  });
}

jQuery(window).scroll(function(){
  if (jQuery(this).scrollTop() > 68) {
    jQuery('#nav-full').addClass('navScroll');
  } else {
    jQuery('#nav-full').removeClass('navScroll');
  }
  startAnimation();
});
