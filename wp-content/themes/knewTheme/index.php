<?php get_header(); ?>
  <div class='row'>
    <div class='col-sm-8 blog-main'>
      <?php get_template_pate('content', get_post_format()); ?>
    </div>
    <?php get_sidebar(); ?>
  </div>
  <?php get_footer(); ?>
