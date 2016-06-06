          <?php get_header(); ?>
          <!-- contenido page -->
          <div class="row contenido page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns text-center">
              <h1><span><?php the_title(); ?></span></h1>
            </div>
            <div class="large-7 columns">
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?>
            </div>
            <div class="large-5 columns">
              <?php the_content(); ?>
            </div>
          <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
          <?php endif; ?>
          </div>

          <?php if ( is_page( 'calendario' ) ) { ?>
          <!-- eventos anteriores -->
          <div class="row">
            <div class="large-12 columns text-center">
              <h1>Eventos <span>anteriores</span></h1>
            </div>
            <?php query_posts('category_name=noticias,eventos,talleres,videos&posts_per_page=6' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-2 columns text-center mascara">
              <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
              <h5><?php the_title(); ?></h5>
              <p>Fecha<br>Lugar</p>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <?php } ?>
          <?php get_footer(); ?>
          