          <?php
          /*
          Template Name: noticias
          */
          ?>
          <?php get_header(); ?>
          <!-- noticias -->
          <div class="row contenido page">
            <?php query_posts('category_name=noticias&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns">
              <h1>Noticias</h1>
            </div>
            <div class="large-12 columns">
              <h3><?php the_title(); ?></h3>
              <hr>
            </div>
            <div class="large-7 columns">
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?>
            </div>
            <div class="large-5 columns">
              <?php the_content(); ?>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <!-- noticias anteriores -->
          <div class="row">
            <div class="large-12 columns">
              <h1>NOTICIAS ANTERIORES</h1>
            </div>
            <?php query_posts('category_name=noticias&posts_per_page=6' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-2 columns text-center">
              <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
              <h5><?php the_title(); ?></h5>
              <?php the_meta(); ?>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <?php get_footer(); ?>