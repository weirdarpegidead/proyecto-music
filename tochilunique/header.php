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
          <!-- header -->
          <div class="row header">
            <div class="large-12 columns cortina hide-for-small-only"></div>
            <div class="large-5 columns">
              <a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/logo.jpg"></a>
            </div>
            <div class="large-7 columns social">
              <ul class="menu align-right">
                <li><a href="https://www.facebook.com/teatrotochilunique/?fref=ts"><i class="fi-social-facebook"></i></a></li>
                <li><a href="#"><i class="fi-social-google-plus"></i></a></li>
                <li><a href="#"><i class="fi-social-linkedin"></i></a></li>
                <li><a href="#"><i class="fi-social-twitter"></i></a></li>
                <li><a href="#"><i class="fi-social-youtube"></i></a></li>
              </ul>
            </div>
          </div>
          <!-- navegacion pc -->
          <div class="row navegacion show-for-medium">
            <div class="large-12 columns">
              <?php wp_nav_menu(
              array(
              'container' => false,
              'items_wrap' => '<ul class="menu">%3$s</ul>',
              'theme_location' => 'menu_principal'
              )); ?>
            </div>
          </div>
          <!-- slide -->
          <?php if ( is_home( ) ) { ?>
          <div class="row show-for-medium slide">
            <div class="large-12 columns">
              <div class="testimonios orbit" role="region" aria-label="Favorite Space Pictures" data-orbit data-orbit>
                <ul class="orbit-container">
                  <?php query_posts('category_name=slide&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
                  <li class="orbit-slide">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slide' ); } ?>
                  </li>
                  <?php endwhile; wp_reset_query(); ?>
                </ul>
              </div>
            </div>
          </div>
          <?php } ?>