          <?php get_header(); ?>
          <!-- reproductor -->
          <div class="row reproductor">
            <div class="large-6 large-centered columns">
              <iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/218242707&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
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
              <?php query_posts('category_name=proximamente&posts_per_page=3' ); while ( have_posts() ) : the_post(); ?>
              <div class="row">
                <div class="large-12 columns">
                  <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'slide' ); } ?></a>
                </div>
                <div class="large-2 columns text-center"><span><?php the_time('F j') ?></span></div>
                <div class="large-10 columns">
                  <h6><?php the_title(); ?></h6>
                  <?php my_excerpt(10); ?>
                </div>
                <div class="large-12 columns">
                  <a href="<?php echo get_permalink(); ?>">Más info</a>
                </div>
              </div>
              <?php endwhile; wp_reset_query(); ?>
            </div>
          </div>
          <?php get_footer(); ?>
          
