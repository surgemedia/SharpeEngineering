$( document ).ready(function(){

/*==============================================
=            Image Change Jumbotron            =
==============================================*/
function set_background(bg_image){
  console.log($(bg_image).attr('background'));
  $(bg_image).backstretch($(bg_image).attr('background'),{duration:4000, fade:750});
}
function image_hover_background(bg_image){
  $("#slider_nav li img").hover(function(){
    $(bg_image).backstretch($(this).attr('jumbotron'));
  });

}
function roller_background(){
  console.log('here');
  $("#slider_nav li img").each(function(){
    var url = $(this).attr("jumbotron");
		$('.jumbotron.bg_image').data('backstretch').images.push(url);
  });
}
function image_click_background(bg_image){
  $("#slider_nav li img").click(function(){
    console.log($(this).attr('index'));
    $(bg_image).backstretch("show", parseInt($(this).attr('index')));
  });

}
image_click_background(".jumbotron.bg_image");
set_background(".jumbotron.bg_image");
roller_background();

/*=================================================
=            Add Icon To Submit Button            =
=================================================*/

function add_icon_submit(icon_class){
	
	
	$('.gform_footer').append("<i class='"+icon_class+"'></i>");

}
add_icon_submit("sharpe-icon-bracket-right-small");


});
// (function () {
//     var width = screen.width;
//     setInterval(function () {
//         if (screen.width !== width ) {
//            add_mobile_accordion("#feed");
// 			add_mobile_accordion("#video");
//         }
//     }, 50);
// }());
function add_mobile_accordion(id_tag){
	var window_width= $(window).width();

	if (window_width<=991){
	  $(id_tag).addClass( "collapse" );
	}else{
	  $(id_tag).removeClass( "collapse" );
	}
	
}
add_mobile_accordion("#feed");
add_mobile_accordion("#video");

(function($) {

/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function render_map( $el ) {

	// var
	var $markers = $el.find('.marker');

	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP
	};

	// create map	        	
	var map = new google.maps.Map( $el[0], args);

	// add a markers reference
	map.markers = [];

	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});

	// center map
	center_map( map );

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 16 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/

$(document).ready(function(){

	$('.acf-map').each(function(){

		render_map( $(this) );

	});

});

})(jQuery);


/*=======================================
=            Lightbox images            =
=======================================*/
$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox();
});


/*===================================
=            Resize Text            =
===================================*/
// var size;
// var desired_width = 300px;
// var resizer = $(".resize");



// while(resizer.width() > desired_width) {
//   size = parseInt(resizer.css("font-size"), 10);
//   resizer.css("font-size", size - 1);
// }

// $("#target-location").css("font-size", size).html(resizer.html());

 function getFrameContent(button){
          console.log("a");
          var html;
          var frame;
          var replace;
          frame = jQuery(button).data('contentid');
          replace = jQuery(button).data('replaceid');
          jQuery("#"+replace).empty();
          html = jQuery('[data-frameid="'+frame+'"]').clone();
          jQuery("#"+replace).html(html);
        }

   