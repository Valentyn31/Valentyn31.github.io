<?php
/*
Plugin Name: Follow Sport - location with leaflet
Plugin URI: 
Description: Adds leaflet map
Author: Validol
Version: 1.0.0
Author URI: 
*/

if(!defined('ABSPATH')) die();

function followsport_location_shortcode() {
  $location = get_field('location'); ?>

  <div class="location">
    <input type="hidden" id="lat" value="<?php echo $location['lat']; ?>" />
    <input type="hidden" id="lng" value="<?php echo $location['lng']; ?>" /> 
    <input type="hidden" id="address" value="<?php echo $location['address']; ?>" />  

    <div id="map"></div>
  </div> 

  <?php 
}

add_shortcode('followsport_location', 'followsport_location_shortcode'); //[followsport_location]

function followsport_location_scripts() {

  if(is_page('home')) {
    wp_enqueue_style('leafletCss', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.css', array(), '1.0.0');
    wp_enqueue_script('leafletJs', 'https://unpkg.com/leaflet@1.7.1/dist/leaflet.js', array(), '1.0.0', true);
    wp_enqueue_script('followsport-leaflet', plugins_url('/js/followsport-leaflet.js', __FILE__), array(), '1.0.0', true);
  }
}

add_action( 'wp_enqueue_scripts', 'followsport_location_scripts' );