          <?php get_header(); ?>
          <!-- proyectos -->
          <div class="row">
            <div class="small-6 medium-3 columns">
              <h4>Albumes</h4>
              <a href="<?php echo site_url(); ?>/albumes/">
                <img src="<?php bloginfo('template_directory'); ?>/img/botondiscos.jpg">
              </a>
            </div>
            <div class="small-6 medium-3 columns">
              <h4>Videos</h4>
              <a href="<?php echo site_url(); ?>/videos/">
                <img src="<?php bloginfo('template_directory'); ?>/img/botonplay.jpg">
              </a>
            </div>
            <div class="small-6 medium-3 columns">
              <h4>Noticias</h4>
              <a href="<?php echo site_url(); ?>/noticias/">
                <img src="<?php bloginfo('template_directory'); ?>/img/botontracks.jpg">
              </a>
            </div>
            <div class="small-6 medium-3 columns">
              <h4>Eventos</h4>
              <a href="<?php echo site_url(); ?>/eventos/">
                <img src="<?php bloginfo('template_directory'); ?>/img/botoneventos.jpg">
              </a>
            </div>
          </div>
          <!-- seccion -->
          <div class="row seccion" data-equalizer>
            <?php query_posts('category_name=home&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="medium-6 large-4 columns separador-lateral" data-equalizer-watch>
              <h4><?php the_title(); ?></h4>
              <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
              <?php my_excerpt(30); ?>
              <a href="<?php echo get_permalink(); ?>">Más info</a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
            <?php query_posts('category_name=reciente&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="medium-6 large-4 columns separador-lateral" data-equalizer-watch>
              <h4>Recientes</h4>
              <p class="lead"><?php the_title(); ?></p>
              <?php my_excerpt(10); ?>
              <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
            </div>
            <?php endwhile; wp_reset_query(); ?>

            <div class="large-4 columns eventos">
              <h4>Próximos Eventos</h4>
              <?php query_posts('category_name=eventos&posts_per_page=3' ); while ( have_posts() ) : the_post(); ?>
              <div class="row item">
                <div class="small-2 columns meta text-center"><span><?php the_time('F j, Y') ?></span><br><span>23</span></div>
                <div class="small-3 columns"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></div>
                <div class="small-7 columns contenido">
                  <h6><?php the_title(); ?></h6>
                  <?php my_excerpt(10); ?>
                  <a href="<?php echo get_permalink(); ?>">Más info</a>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); ?>


            </div>
          </div>
          <?php get_footer(); ?>