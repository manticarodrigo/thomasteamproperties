<?php

// =============================================================================
// FUNCTIONS.PHP
// -----------------------------------------------------------------------------
// Overwrite or add your own custom functions to Pro in this file.
// =============================================================================

// =============================================================================
// TABLE OF CONTENTS
// -----------------------------------------------------------------------------
//   01. Enqueue Parent Stylesheet
//   02. Additional Functions
// =============================================================================

// Enqueue Parent Stylesheet
// =============================================================================

add_filter( 'x_enqueue_parent_stylesheet', '__return_true' );



// Additional Functions
// =============================================================================

// Custom Social Output
//
// Adding Zillow
// =============================================================================

if ( ! function_exists( 'x_social_global' ) ) :
  function x_social_global() {

    $facebook    = x_get_option( 'x_social_facebook', '' );
    $twitter     = x_get_option( 'x_social_twitter', '' );
    $google_plus = x_get_option( 'x_social_googleplus', '' );
    $linkedin    = x_get_option( 'x_social_linkedin', '' );
    $xing        = x_get_option( 'x_social_xing', '' );
    $foursquare  = x_get_option( 'x_social_foursquare', '' );
    $youtube     = x_get_option( 'x_social_youtube', '' );
    $vimeo       = x_get_option( 'x_social_vimeo', '' );
    $instagram   = x_get_option( 'x_social_instagram', '' );
    $pinterest   = x_get_option( 'x_social_pinterest', '' );
    $dribbble    = x_get_option( 'x_social_dribbble', '' );
    $flickr      = x_get_option( 'x_social_flickr', '' );
    $behance     = x_get_option( 'x_social_behance', '' );
    $tumblr      = x_get_option( 'x_social_tumblr', '' );
    $whatsapp    = x_get_option( 'x_social_whatsapp', '' );
    $soundcloud  = x_get_option( 'x_social_soundcloud', '' );
    $rss         = x_get_option( 'x_social_rss', '' );

    $zillow        = 'https://zillow.com/profile/jakethomas26/';

    $output = '<div class="x-social-global">';

      if ( $facebook )    : $output .= '<a href="' . $facebook    . '" class="facebook" title="Facebook" target="_blank"><i class="x-icon-facebook-square" data-x-icon-b=""></i></a>'; endif;
      if ( $twitter )     : $output .= '<a href="' . $twitter     . '" class="twitter" title="Twitter" target="_blank"><i class="x-icon-twitter-square" data-x-icon-b=""></i></a>'; endif;
      if ( $google_plus ) : $output .= '<a href="' . $google_plus . '" class="google-plus" title="Google+" target="_blank"><i class="x-icon-google-plus-square" data-x-icon-b=""></i></a>'; endif;
      if ( $linkedin )    : $output .= '<a href="' . $linkedin    . '" class="linkedin" title="LinkedIn" target="_blank"><i class="x-icon-linkedin-square" data-x-icon-b=""></i></a>'; endif;
      if ( $xing )        : $output .= '<a href="' . $xing        . '" class="xing" title="XING" target="_blank"><i class="x-icon-xing-square" data-x-icon-b=""></i></a>'; endif;
      if ( $foursquare )  : $output .= '<a href="' . $foursquare  . '" class="foursquare" title="Foursquare" target="_blank"><i class="x-icon-foursquare" data-x-icon-b=""></i></a>'; endif;
      if ( $youtube )     : $output .= '<a href="' . $youtube     . '" class="youtube" title="YouTube" target="_blank"><i class="x-icon-youtube-square" data-x-icon-b=""></i></a>'; endif;
      if ( $vimeo )       : $output .= '<a href="' . $vimeo       . '" class="vimeo" title="Vimeo" target="_blank"><i class="x-icon-vimeo-square" data-x-icon-b=""></i></a>'; endif;
      if ( $instagram )   : $output .= '<a href="' . $instagram   . '" class="instagram" title="Instagram" target="_blank"><i class="x-icon-instagram" data-x-icon-b=""></i></a>'; endif;
      if ( $pinterest )   : $output .= '<a href="' . $pinterest   . '" class="pinterest" title="Pinterest" target="_blank"><i class="x-icon-pinterest-square" data-x-icon-b=""></i></a>'; endif;
      if ( $dribbble )    : $output .= '<a href="' . $dribbble    . '" class="dribbble" title="Dribbble" target="_blank"><i class="x-icon-dribbble" data-x-icon-b=""></i></a>'; endif;
      if ( $flickr )      : $output .= '<a href="' . $flickr      . '" class="flickr" title="Flickr" target="_blank"><i class="x-icon-flickr" data-x-icon-b=""></i></a>'; endif;
      if ( $behance )     : $output .= '<a href="' . $behance     . '" class="behance" title="Behance" target="_blank"><i class="x-icon-behance-square" data-x-icon-b=""></i></a>'; endif;
      if ( $tumblr )      : $output .= '<a href="' . $tumblr      . '" class="tumblr" title="Tumblr" target="_blank"><i class="x-icon-tumblr-square" data-x-icon-b=""></i></a>'; endif;
      if ( $whatsapp )    : $output .= '<a href="' . $whatsapp    . '" class="tumblr" title="Whatsapp" target="_blank"><i class="x-icon-whatsapp" data-x-icon-b=""></i></a>'; endif;
      if ( $soundcloud )  : $output .= '<a href="' . $soundcloud  . '" class="soundcloud" title="SoundCloud" target="_blank"><i class="x-icon-soundcloud" data-x-icon-b=""></i></a>'; endif;
      if ( $rss )         : $output .= '<a href="' . $rss . '" class="rss" title="RSS" target="_blank"><i class="x-icon-rss-square" data-x-icon-b=""></i></a>'; endif;

      if ( $zillow )         : $output .= '<a href="' . $zillow         . '" class="zillow" title="Zillow" target="_blank"><i class="x-icon-zillow" data-x-icon-b=""></i></a>'; endif;

    $output .= '</div>';

    echo $output;

  }
endif;
