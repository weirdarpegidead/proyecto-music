          <?php
          /*
          Template Name: integrantes
          */
          ?>
          <?php get_header(); ?>
          <!-- integrantes -->
          <div class="row contenido page">
            <div class="large-12 columns">
              <h1><?php the_title(); ?></h1>
            </div>
            <?php query_posts('category_name=integrantes&order=ASC' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns integrantes">
              <div class="row">
                <div class="small-3 columns"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></div>
                <div class="small-9 columns">
                  <div class="row">
                    <div class="small-12 columns"><h3><?php the_title(); ?></h3></div>
                    <div class="small-12 columns"><?php the_content(); ?></div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <?php get_footer(); ?>