<?php get_header(); ?>

  <div class="wrapper">
    <div class="about">
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
       <div class="blog-post">
         <h4 class="blog-post-title">
             <!-- <?php the_title(); ?> -->
         </h4>
         <?php the_content(); ?>
       </div>
        <?php endwhile; ?>
       <?php else : ?>
         <p><?php __('No Page Found'); ?></p>
       <?php endif; ?>

  </div>



<?php get_footer(); ?>
