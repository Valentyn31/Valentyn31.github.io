<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FollowSport
 */

?>
<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  
  <?php wp_head(); ?>
</head>

<body>
  <header class="header default-header" style="background: #150D0D url(<?php echo get_template_directory_uri() . '/assets/img/header-bg.png'?>);">
    <div class="container">
      <!-- ./site-nav -->
      <div class="site-nav">
        <!-- ./logo -->
          <div class="logo-block">
            <?php the_custom_logo(); ?>
            <span class="logo__text">Follow Sport</span>
          </div>     
        <!-- /.logo -->

        <!-- ./header-nav -->
        <?php wp_nav_menu([
          'theme_location'  => 'header_menu',
          'menu'            => 'Меню в шапке', 
          'container'       => 'nav', 
          'container_class' => 'header-nav nav', 
          'menu_class'      => 'menu', 
          'echo'            => true,
        ]); ?>
        <!-- /.header-nav -->

        <div class="burger-btn"> 
          <span class="burger-btn__line"></span>          
          <span class="burger-btn__crest crest1"></span>          
          <span class="burger-btn__crest crest2"></span>          
        </div>
      </div>
      <!-- /.site-nav -->
    </div>
    <!-- /.container -->
  </header>