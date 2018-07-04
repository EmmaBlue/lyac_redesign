// JavaScript Document


jQuery( document ).ready(function() {

  console.log("Hello!");

  //Variables

  var $animation_elements = jQuery('.animation-element');
  var $window = jQuery(window);


  //Functions

  function check_if_in_view() {
    var window_height = $window.height();
    var window_top_position = $window.scrollTop();
    var window_bottom_position = (window_top_position + window_height);

    jQuery.each($animation_elements, function() {
      var $element = jQuery(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = (element_top_position + element_height);
      console.log(element_top_position);

      //check to see if this current container is within viewport
      if ((element_bottom_position >= window_top_position) &&
          (element_top_position <= window_bottom_position)) {
        $element.addClass('in-view');
      } 
    });
  }

  //Listener

  $window.on('scroll', check_if_in_view);
  $window.on('scroll resize', check_if_in_view);
  $window.trigger('scroll');


  //Function to load background image content blocks


});
