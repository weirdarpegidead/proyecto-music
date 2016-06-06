          <?php
          /*
          Template Name: eventos
          */
          ?>
          <?php get_header(); ?>
          <!-- eventos -->
          <div class="row contenido page">
            <?php query_posts('category_name=eventos&posts_per_page=1' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-12 columns">
              <h1>Proximos Eventos</h1>
            </div>
            <div class="large-12 columns">
              <h3><?php the_title(); ?></h3>
            </div>
            <div class="large-5 columns">
              <?php the_content(); ?>
              <div class="row">
                <div class="meta">
                  <span><i class="fi-calendar"></i> <?php the_time('F j, Y') ?></span> | <span><i class="fi-torso"></i> <?php the_author() ?></span><br>
                  <span><i class="fi-comments"></i> <?php comments_number( '0 Comentarios', 'Un comentario', '% Comentarios' ); ?></span>
                </div>
              </div>
            </div>
            <div class="large-7 columns">
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?>
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <!-- eventos anteriores -->
          <div class="row contenido">
            <div class="large-12 columns">
              <h1>Eventos Anteriores</h1>
            </div>
            <?php query_posts('category_name=eventos&posts_per_page=6' ); while ( have_posts() ) : the_post(); ?>
            <div class="large-2 columns text-center">
              <a href="<?php echo get_permalink(); ?>"><?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'cuadrada' ); } ?></a>
              <h5><?php the_title(); ?></h5>
              <p>Fecha<br>Lugar</p>        
            </div>
            <?php endwhile; wp_reset_query(); ?>
          </div>
          <?php get_footer(); ?>