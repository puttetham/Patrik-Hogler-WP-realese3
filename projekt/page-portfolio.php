<?php get_header(); ?>

<div class="wrapper">
<p class="textpage">
    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
       <p><?php the_content(); ?></p>
      <?php endwhile; ?>
</p>
<button id='portfolio-posts-btn'>Show portfolio</button>
<div id='portfolio-posts-container'></div>
</div>

<?php else : ?>
  <p><?php __('No Page Found'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>
