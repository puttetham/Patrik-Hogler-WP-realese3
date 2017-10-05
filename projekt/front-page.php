<?php get_header(); ?>

<!-- BANNER -->
<div class="banner">
    <img class="banner-img" src="<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/road2.jpg'); ?>" alt="banner road photo">
</div>

<!-- ############### SECTION ############### -->

<div class="wrapper">
	<section class="mainheading">
		<!-- <h1><?php bloginfo('name'); ?></h1> -->
    <h1><?php echo get_theme_mod('showcase_heading', 'Patrik Hogler'); ?></h1>
     <!-- <h2><?php bloginfo('description'); ?></h2> -->
     <h1><?php echo get_theme_mod('showcase_heading2', 'Front End Developer'); ?></h1>
     <hr></hr>
     <p><?php echo get_theme_mod('showcase_text', 'Front End Developer'); ?><br>


  </section>
</div>

<!-- ############### FOOTER ############### -->
<?php get_footer(); ?>
