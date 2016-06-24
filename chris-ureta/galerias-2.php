          <?php
          /*
          Template Name: galerias-año-presente
          */
          ?>
          <?php get_header(); ?>
          <!-- contenido galerias -->
          <div class="row contenido page">
            <div class="large-12 columns">
              <h1><?php the_title(); ?></h1>
              <div class="row">
                <div class="large-12 columns sub-navegacion">
                  <?php wp_nav_menu(
                  array(
                  'container' => false,
                  'items_wrap' => '<ul class="menu align-right">%3$s</ul>',
                  'theme_location' => 'menu_galerias'
                  )); ?>
                </div>
              </div>
            </div>
            <?php query_posts('category_name=galeria&posts_per_page=6&year=2016' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-4 columns">
              <div class="row">
                <div class="large-12 columns text-center">
                  <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
                  <h5><?php the_title(); ?></h5>
                  <?php my_excerpt(30); ?>
                </div>
                <div class="large-12 columns"><a href="<?php echo get_permalink(); ?>" class="button alert">Más</a></div>
              </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <?php get_footer(); ?>