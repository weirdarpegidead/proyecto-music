    <?php get_header(); ?>
    <!-- contenido page -->
    <div class="row contenido page">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-12 columns">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="large-7 columns thum">
        <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?>
      </div>
      <div class="large-5 columns">
        <?php the_content(); ?>
      </div>
      <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
      <?php endif; ?>
    </div>
    <?php if ( is_page( 'nuestro-sello' ) ) { ?>
    <!-- eventos anteriores -->
    <div class="row contenido page">
      <div class="large-12 columns">
        <h1>Producciones</h1>
      </div>
      <?php query_posts('category_name=sello&posts_per_page=6' ); while ( have_posts() ) : the_post(); ?>
      <div class="large-2 columns text-center">
        <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
        <h5><?php the_title(); ?></h5>
        <?php the_meta(); ?>
      </div>
      <?php endwhile; wp_reset_query(); ?>
    </div>
    <?php } ?>
    <?php get_footer(); ?>