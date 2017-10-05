<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="google-site-verification" content="eTO7yDeEMCnDDq-6PTdWMq_G4TG5b47Dk5zVJODdXdU" />
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="<?php bloginfo('description') ?>">
  <title>
    <?php bloginfo('name') ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title();?>
  </title>
  <!-- normalize css -->
  <link href="<?php bloginfo('template_url'); ?>/css/normalize.css" rel="stylesheet">
  <!-- my style css -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <script src="https://use.fontawesome.com/b0b6a4bf9b.js"></script>
<?php wp_head(); ?>
</head>
<body>


<!-- HEADER -->
<header>
	<div id="logo-container">
    <a href="/home">
      <img src="<?php echo get_theme_mod('showcase_logo', get_bloginfo('template_url').'/img/putte3.png'); ?>" class="logoicon" alt="Patrik Hogler logo">
    </a>
  </div>
  <nav id="nav">
    <?php
      $menuParameters = array(
        'container'       => false,
        'echo'            => false,
        'items_wrap'      => '%3$s',
        'depth'           => 0,
      );

      echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
      ?>
  </nav>

</header>
