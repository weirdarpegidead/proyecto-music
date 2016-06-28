          <?php get_header(); ?>
          <!-- bienvenidos -->
          <div class="row contenido home">
            <?php query_posts('category_name=home&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns text-center">
              <h1><?php the_title(); ?></h1>
              <?php my_excerpt(30); ?>
              <a href="<?php echo get_permalink(); ?>" class="button alert">Más</a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <!-- noticias -->
          <div class="row">
            <div class="small-6 medium-3 columns text-center mascara">
              <a href="<?php echo site_url(); ?>/videos-2">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2016/05/videos-700x700.jpg">
              </a>
              <h4><span>Videos</span></h4>
              <p></p>
              <a href="<?php echo site_url(); ?>/videos-2" class="button alert">Más</a>
            </div>
            <div class="small-6 medium-3 columns text-center mascara">
              <a href="<?php echo site_url(); ?>/talleres-2">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2016/05/talleres-700x700.jpg">
              </a>
              <h4><span>Talleres</span></h4>
              <p></p>
              <a href="<?php echo site_url(); ?>/talleres-2" class="button alert">Más</a>
            </div>
            <div class="small-6 medium-3 columns text-center mascara">
              <a href="<?php echo site_url(); ?>/eventos-2">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2016/05/eventos.jpg">
              </a>
              <h4><span>Eventos</span></h4>
              <p></p>
              <a href="<?php echo site_url(); ?>/eventos-2" class="button alert">Más</a>
            </div>
            <div class="small-6 medium-3 columns text-center mascara">
              <a href="<?php echo site_url(); ?>/noticias">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/2016/05/ima5-700x700.jpg">
              </a>
              <h4><span>Noticias</span></h4>
              <p></p>
              <a href="<?php echo site_url(); ?>/noticias" class="button alert">Más</a>
            </div>
          </div>
          <?php get_footer(); ?>
          
