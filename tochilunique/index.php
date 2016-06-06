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
            <?php query_posts('category_name=noticias,talleres,eventos&posts_per_page=4' ); while ( have_posts() ) : the_post(); ?>
            <div class="small-6 medium-3 columns text-center mascara">
              <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
              <h4><span><?php the_title(); ?></span></h4>
              <?php my_excerpt(30); ?>
              <a href="<?php echo get_permalink(); ?>" class="button alert">Más</a>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <?php get_footer(); ?>
          
