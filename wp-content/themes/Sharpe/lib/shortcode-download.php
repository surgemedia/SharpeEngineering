<?php  
function download_button( $atts , $content = null ) {

  // Code
  echo "<a id='quote' type='button' class='btn download' data-toggle='modal' data-target='#modalItem'>REQUEST A QUOTE ONLINE</a>";
  
}
add_shortcode( 'button', 'download_button' );