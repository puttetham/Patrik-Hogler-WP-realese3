<?php get_header(); ?>


<div class="wrapper">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        <?php get_template_part('content'); ?>
      <?php endwhile; ?>
    <?php else : ?>
      <p><?php __('No Posts Found'); ?></p>
    <?php endif; ?>
</div>


<!-- sidebar search & archives -->
  <div class="wrapper">
    <?php if(is_active_sidebar('sidebar')): ?>
      <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
  </div>



<?php get_footer(); ?>
