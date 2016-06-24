<?php
  if (in_category('videos')) { // Si el post pertenece a la cat 1, redirigir a single-1.php
  include(TEMPLATEPATH . '/single-videos.php');
  } else { // Si el post pertenece a la cat 3, redirigir a single-3.php
  include(TEMPLATEPATH . '/single-normal.php');
  } ?>