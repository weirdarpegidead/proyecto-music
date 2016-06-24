          <?php get_header(); ?>
          <!-- contenido single -->
          <div class="row contenido page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns text-center">
              <h1><span><?php the_title(); ?></span></h1>
            </div>
            <!--<div class="large-12 columns">
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="medium-3 medium-centered columns text-center mascara">
              <?php// if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?>
            </div>-->
            <div class="large-12 columns single">
              <div class="meta">
                <span><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></span> | <span><i class="fi-torso"></i> <?php the_author() ?></span><br>
                <span><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?></span>
              </div>
              <?php the_content(); ?>
            </div>
          <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
          <?php endif; ?>
          </div>
          <?php get_footer(); ?>