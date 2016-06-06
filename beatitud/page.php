    <?php get_header(); ?>
    <!-- contenido page -->
    <div class="row contenido page">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="large-12 columns text-center">
        <h1><?php the_title(); ?></h1>
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
    <?php get_footer(); ?>