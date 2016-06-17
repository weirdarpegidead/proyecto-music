          <?php get_header(); ?>
          <!-- proximos eventos -->
          <div class="row contenido">
            <div class="large-12 columns">
              <h1>Próximos eventos</h1>
              <?php query_posts('category_name=eventos&posts_per_page=2' ); while ( have_posts() ) : the_post(); ?>
              <div class="row">
                <div class="medium-7 columns">
                  <h5><?php the_title(); ?></h5>
                  <?php the_meta(); ?>
                  <?php my_excerpt(30); ?>
                </div>
                <div class="medium-4 columns">
                  <a href="<?php echo get_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slide' ); } ?>
                  </a>
                </div>
                <div class="medium-1 columns text-center alinear-fondo">
                  <a href="<?php echo get_permalink(); ?>"><span class="badge link">></span></a>
                </div>
                <div class="medium-12 columns"><hr></div>
              </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
          <?php get_footer(); ?>