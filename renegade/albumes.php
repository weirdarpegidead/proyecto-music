          <?php
          /*
          Template Name: albumes
          */
          ?>
          <?php get_header(); ?>
          <!-- albumes -->
          <div class="row contenido page">
            <?php query_posts('category_name=albumes&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns">
              <h1>albumes</h1>
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
          <!-- albumes anteriores -->
          <div class="row">
            <div class="large-12 columns">
              <h1>ALBUMES ANTERIORES</h1>
            </div>
            <?php 
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $the_query = new WP_Query( array( 'category_name' => 'albumes', 'posts_per_page' => 6, 'paged' => $paged ) ); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <!-- pagination here -->
            <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="large-2 columns text-center">
              <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
              <h5><?php the_title(); ?></h5>
              <?php the_meta(); ?>
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