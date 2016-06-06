          <?php get_header(); ?>
          <!-- proyectos -->
          <div class="row">
            <div class="large-3 columns">
              <h4>Titulo</h4>
              <img src="http://placehold.it/300x300">
              <div class="callout renegade">
                <p>Pequeño resumen excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#">Más</a>
              </div>
            </div>
            <div class="large-3 columns">
              <h4>Titulo</h4>
              <img src="http://placehold.it/300x300">
              <div class="callout renegade">
                <p>Pequeño resumen excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#">Más</a>
              </div>
            </div>
            <div class="large-3 columns">
              <h4>Titulo</h4>
              <img src="http://placehold.it/300x300">
              <div class="callout renegade">
                <p>Pequeño resumen excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#">Más</a>
              </div>
            </div>
            <div class="large-3 columns">
              <h4>Titulo</h4>
              <img src="http://placehold.it/300x300">
              <div class="callout renegade">
                <p>Pequeño resumen excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a href="#">Más</a>
              </div>
            </div>
          </div>
          <!-- seccion -->
          <div class="row seccion">
            <?php query_posts('category_name=home&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-4 columns separador-lateral">
              <h4><?php the_title(); ?></h4>
              <p class="lead">What are your cats <em>really</em> dreaming about while they sleep?</p>
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?>
              <?php my_excerpt(30); ?>
              <a href="#">Info</a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
            <?php query_posts('category_name=home&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-4 columns separador-lateral">
              <h4><?php the_title(); ?></h4>
              <?php the_content(); ?>
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?>
            </div>
            <?php endwhile; wp_reset_query(); ?>

            <div class="large-4 columns eventos">
              <h4>Titulo</h4>
              <?php query_posts('category_name=eventos&posts_per_page=2' ); while ( have_posts() ) : the_post(); ?>
              <div class="row item">
                <div class="large-2 columns meta text-center"><span><?php the_time('F j, Y') ?></span><br><span>23</span></div>
                <div class="large-3 columns"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></div>
                <div class="large-7 columns contenido">
                  <h6><?php the_title(); ?></h6>
                  <?php my_excerpt(10); ?>
                  <a href="<?php echo get_permalink(); ?>">Más info</a>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); ?>


            </div>
          </div>
          <?php get_footer(); ?>