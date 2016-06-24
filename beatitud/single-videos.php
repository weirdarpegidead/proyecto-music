          <?php get_header(); ?>
          <!-- contenido single -->
          <div class="row contenido page">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="large-12 columns single">
              <div class="row">
                <div class="large-5 columns">
                  <?php the_content(); ?>
                  <div class="meta">
                    <span><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></span> | <span><i class="fi-torso"></i> <?php the_author() ?></span><br>
                    <span><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?></span>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; else: ?><p>Lo sentimos, no se han encontrado entradas.</p>
          <?php endif; ?>
          </div>
          <?php get_footer(); ?>