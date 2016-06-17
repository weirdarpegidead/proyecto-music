          <?php get_header(); ?>
          <!-- reproductor -->
          <div class="row reproductor">
            <div class="large-12 columns text-center">
              <img src="http://placehold.it/600x100">
            </div>
          </div>
          <!-- proyectos -->
          <div class="row secciones">
            <div class="small-6 medium-3 columns text-center">
              <a href="<?php echo site_url(); ?>/noticias"><img src="<?php bloginfo('template_directory'); ?>/img/botonnoticias.png"></a>
            </div>
            <div class="small-6 medium-3 columns text-center">
              <a href="<?php echo site_url(); ?>/shows"><img src="<?php bloginfo('template_directory'); ?>/img/botonshows.png"></a>
            </div>
            <div class="small-6 medium-3 columns text-center">
              <a href="<?php echo site_url(); ?>/videos"><img src="<?php bloginfo('template_directory'); ?>/img/botonvideos.png"></a>
            </div>
            <div class="small-6 medium-3 columns text-center">
              <a href="<?php echo site_url(); ?>/musica"><img src="<?php bloginfo('template_directory'); ?>/img/botondiscografias.png"></a>
            </div>
          </div>
          <!-- seccion -->
          <div class="row home">
            <?php query_posts('category_name=noticias&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="medium-4 columns">
              <h4>Noticias</h4>
              <p class="lead"><?php the_title(); ?></p>
              <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
              <?php my_excerpt(30); ?>
              <a href="<?php echo get_permalink(); ?>">Info</a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
            <div class="medium-4 columns">
              <h4>Entrevistas</h4>
              <p class="lead">What are your cats <em>really</em> dreaming about while they sleep?</p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
              tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
              quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
              consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
              cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
              proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <img src="http://placehold.it/400x150">
            </div>
            <div class="medium-4 columns">
              <h4>Proximamente</h4>
              <div class="row">
                <div class="large-12 columns">
                  <a href="#"><img src="http://placehold.it/400x150"></a>
                </div>
                <div class="large-2 columns text-center"><span>Mayo</span><br><span>23</span></div>
                <div class="large-10 columns">
                  <h6>Titulo</h6>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="large-12 columns">
                  <a href="#">Más info</a>
                </div>
              </div>
            </div>
          </div>
          <?php get_footer(); ?>
          
