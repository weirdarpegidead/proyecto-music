          <?php
          /*
          Template Name: encuesta
          */
          ?>
          <?php get_header(); ?>
          <!-- encuesta -->
          <div class="row contenido page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns">
              <h1 class="encuesta"><?php the_title(); ?></h1>
            </div>
            <div class="large-12 columns">
              <?php the_content(); ?>
            </div>
            <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
            <?php endif; ?>
          </div>
          <?php get_footer(); ?>