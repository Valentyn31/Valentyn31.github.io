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
  <header class="header" style="background: #150D0D url(<?php echo get_template_directory_uri() . '/assets/img/header-bg.png'?>);">
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

        <div class="burger-btn"> <span class="burger-btn__line"></span>          <span class="burger-btn__crest crest1"></span>          <span class="burger-btn__crest crest2"></span>          </div>
      </div>
      <!-- /.site-nav -->
      <!-- ./text -->
      <div class="text">
        <h1 class="text__title">Follow Sport</h1>
        <p class="text__paragraph">Спортивний клуб, заснований Матвіюком
          Віталієм.
          <br> Головна ціль нашого клубу - допомогти
          новачкам увірватись у світ спорту
          і розвиватись у ньому разом з нами.
          На нашому сайті Ви можете знайти
          багато цікавої інформації про тренування,
          здоровий спосіб життя і про спорт
          загалом. Приєднуйтесь до нашого
          клубу, адже нам слід подолати довгий
          шлях, тож зробімо це разом!</p>
      </div>
      <!-- /.text -->
      <div class="header-button">
        <a href="<?php echo get_permalink(9); ?>" class="h-h-button">Дізнатись більше</a>
      </div>
    </div>
    <!-- /.container -->
    <!-- bg -->
    <div class="header__shvarz" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/shvarz.png?'?>) no-repeat;"></div>
    <div class="header__scala" style="background: url(<?php echo get_template_directory_uri() . '/assets/img/scala.png'?>) no-repeat right 0;"></div>
    <!-- bg -->
  </header>