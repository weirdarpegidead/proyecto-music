          <!-- footer -->
          <div class="large-12 columns footer">
            <div class="row">
              <div class="large-4 columns">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo.png"></a>
              </div>
              <div class="large-4 columns end menu-centered">
                <?php wp_nav_menu(
                array(
                'container' => false,
                'items_wrap' => '<ul class="menu vertical">%3$s</ul>',
                'theme_location' => 'menu_footer'
                )); ?>
              </div>
              <div class="large-12 columns text-center">
                <span class="badge blanco">1</span>
                <span class="badge azul">1</span>
                <span class="badge rojo">1</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- scripts -->
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/jquery.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/what-input.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/foundation.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
    <!-- elementos wordpress -->
    <?php wp_footer(); ?>
  </body>
</html>