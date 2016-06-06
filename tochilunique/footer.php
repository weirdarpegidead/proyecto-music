          <!-- footer -->
          <div class="row footer">
            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('texto-footer') ) : endif; ?>
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
