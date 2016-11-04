<?php
// update_option('siteurl','http://localhost:8888/Sharpe/');
// update_option('home','http://localhost:8888/Sharpe/');
require('aq_resizer.php');
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$GLOBALS['WPCM_id'] = 18; //Change for each website

$sage_includes = [
  'lib/utils.php',                 // Utility functions
  'lib/init.php',                  // Initial theme setup and constants
  'lib/wrapper.php',               // Theme wrapper class
  'lib/conditional-tag-check.php', // ConditionalTagCheck class
  'lib/config.php',                // Configuration
  'lib/assets.php',                // Scripts and stylesheets
  'lib/titles.php',                // Page titles
  'lib/nav.php',                   // Custom nav modifications
  'lib/gallery.php',               // Custom [gallery] modifications
  'lib/extras.php',                // Custom functions
  'lib/function-debug.php',                                 // Debug Values
  'lib/function-content-manger-get-color.php',              // Page Content Manager
  'lib/function-truncate-content.php',                          // Testimonial
  'lib/function-svg-upload-able.php',
  'lib/function-add-option-page.php',
  'lib/function-get-id-from-slug.php',
  // Wp Actions
  'lib/action-post-type-people.php',                          // Mangentment Team
  'lib/action-post-type-downloads.php',                     // Download Area
  'lib/action-post-type-features.php',                     // Features
  'lib/function-getYoutubeId.php',                     // Youtube function
  //'lib/action-post-type-case_study.php',                     // Case Studies
  'lib/action-post-type-testimonial.php',                     // Testimonial
  // 'lib/action-post-type-facilities.php',                          // Facilities
  'lib/action-registor-menu-locations.php',            // Testimonial
  
  // 'lib/shortcode-download.php',            // download shorcode


                                   
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);