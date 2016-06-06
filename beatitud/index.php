          <?php get_header(); ?>
          <!-- proximos eventos -->
          <div class="row contenido">
            <div class="large-12 columns">
              <h1>Próximos eventos</h1>
              <?php query_posts('category_name=publicacion&posts_per_page=2' ); while ( have_posts() ) : the_post(); ?>
              <div class="row">
                <div class="large-7 columns">
                  <h5><?php the_title(); ?></h5>
                  <h5><small>Fecha</small></h5>
                  <h5><small>direccion</small></h5>
                  <h5><small>precio</small></h5>
                  <?php my_excerpt(30); ?>
                </div>
                <div class="large-4 columns">
                  <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slide' ); } ?>
                </div>
                <div class="large-1 columns text-center alinear-fondo">
                  <a href="<?php echo get_permalink(); ?>"><span class="badge link">></span></a>
                </div>
                <div class="large-12 columns"><hr></div>
              </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
          <?php get_footer(); ?>