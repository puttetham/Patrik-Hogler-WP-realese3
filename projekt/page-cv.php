<?php get_header(); ?>


<section>
  <div class="wrapper">
    <p class="textpage">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
           <?php the_content(); ?>
          <?php endwhile; ?>
    </p>
      <div class="cvfields">
        <p class="cvjobs"><?php the_field('jobb1'); ?></p>
        <p class="cvjobs"><?php the_field('jobb2'); ?></p>
        <p class="cvjobs"><?php the_field('jobb3'); ?></p>
        <p class="cvjobs"><?php the_field('jobb4'); ?></p>
        <p class="cvjobs"><?php the_field('jobb5'); ?></p>
      </div>
    </div>
  </div>
</section>

<?php else : ?>
  <p><?php __('No Page Found'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>
