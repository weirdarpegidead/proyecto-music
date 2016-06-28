          <?php
          /*
          Template Name: galeria de imagenes
          */
          ?>
          <?php get_header(); ?>
          <!-- galeria de imagenes -->
          <div class="row contenido galima" data-equalizer>
            <div class="large-12 columns">
              <h4><?php the_title(); ?></h4>
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
            <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $the_query = new WP_Query( array( 'category_name' => 'galeria', 'posts_per_page' => 6, 'paged' => $paged ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <!-- pagination here -->
            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="large-4 columns" data-equalizer-watch>
              <div class="row">
                <div class="large-12 columns text-center">
                  <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
                  <h5><?php the_title(); ?></h5>
                  <?php my_excerpt(30); ?>
                </div>
                <div class="large-12 columns"><a href="<?php echo get_permalink(); ?>" class="button alert">Más</a></div>
              </div>
            </div>
            <?php endwhile; ?>
            <!-- end of the loop -->
            <!-- pagination here -->
            <div class="large-12 columns">
              <div class="menu-centered">
                <ul class="menu">
                  <li><a href="#"><?php previous_posts_link( '< Anterior ' ); ?></a></li>
                  <li><a href="#"><?php next_posts_link( ' Siguiente >', $the_query->max_num_pages ); ?></a></li>
                </ul>
              </div>
            </div>
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
              <p><?php _e( 'No hay entradas disponibles en esta categoria.' ); ?></p>
            <?php endif; ?>
          </div>
          <?php get_footer(); ?>