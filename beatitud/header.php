<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
      <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
      <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
      <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
      <?php if (is_home () ) { echo bloginfo('name'); echo ' | '; bloginfo('description'); }   elseif ( is_category() ) { single_cat_title(); echo ' | ' ; echo bloginfo('name'); }  elseif (is_single() || is_page()) { single_post_title(); echo ' | ' ; echo bloginfo('name'); }  else { wp_title('',true); } ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/app.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/styles.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/foundation-icons.css" />
  </head>
  <body>
    <div class="off-canvas-wrapper">
      <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <!-- contenedor izquierdo fuera de pantalla -->
        <div class="off-canvas position-right" id="offCanvasRight" data-off-canvas data-position="right">
          <!-- Close button -->
          <button class="close-button" aria-label="Close menu" type="button" data-close>
            <span aria-hidden="true">&times;</span>
          </button>
          <!-- Menu -->
          <?php wp_nav_menu(
            array(
            'container' => false,
            'items_wrap' => '<ul class="vertical menu">%3$s</ul>',
            'theme_location' => 'menu_principal'
            )); ?>
        </div>
        <div class="off-canvas-content" data-off-canvas-content>

          <!-- navegacion tablets y smartphones -->
          <div class="row navegacion hide-for-medium">
            <div class="large-12 columns">
              <div class="top-bar">
                <div class="top-bar-right show-for-small-only">
                  <ul class="dropdown menu align-right" data-dropdown-menu>
                    <li><a href="#" data-toggle="offCanvasRight"><i class="fi-align-justify"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- logo -->
          <div class="row logo">
            <div class="large-3 large-centered columns text-center">
              <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
            </div>
          </div>
          <!-- social -->
          <div class="row social">
            <div class="large-12 columns">
              <ul class="menu align-right">
                <li><a href="#"><i class="fi-social-facebook"></i></a></li>
                <li><a href="#"><i class="fi-social-google-plus"></i></a></li>
                <li><a href="#"><i class="fi-social-linkedin"></i></a></li>
                <li><a href="#"><i class="fi-social-twitter"></i></a></li>
                <li><a href="#"><i class="fi-social-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- navegacion -->
          <div class="row navegacion">
            <div class="large-12 columns">
              <div class="menu-centered">
                <?php wp_nav_menu(
                array(
                'container' => false,
                'items_wrap' => '<ul class="menu">%3$s</ul>',
                'theme_location' => 'menu_principal'
                )); ?>
              </div>
            </div>
          </div>
          <!-- slide -->
          <?php if ( is_home( ) ) { ?>
          <div class="row">
            <div class="large-7 columns">
              <div class="orbit hide-for-small-only" role="region" aria-label="Favorite Space Pictures" data-orbit>
                <ul class="orbit-container">
                  <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
                  <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
                  <li class="orbit-slide">
                    <img src="http://placehold.it/1000x655">
                  </li>
                  <li class="orbit-slide">
                    <img src="http://placehold.it/1000x655">
                  </li>
                </ul>
                <!--<nav class="orbit-bullets">
                  <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
                  <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
                </nav>-->
              </div>
            </div>
            <div class="large-5 columns">
              <div class="row">
                <div class="large-6 columns">
                  <div class="">
                    <a href="#"><img src="http://placehold.it/350x350"></a>
                  </div>
                </div>
                <div class="large-6 columns">
                  <div class="">
                    <a href="#"><img src="http://placehold.it/350x350"></a>
                  </div>
                </div>
                <div class="large-6 columns">
                  <div class="">
                    <a href="#"><img src="http://placehold.it/350x350"></a>
                  </div>
                </div>
                <div class="large-6 columns">
                  <div class="">
                    <a href="#"><img src="http://placehold.it/350x350"></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>