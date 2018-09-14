<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/css/animate.css">
  <script src="<?php echo get_template_directory_uri() ?>/js/wow.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.1.1.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/index.js"></script>
  <script>
    new WOW().init();
  </script>
  <title><?php bloginfo('name');
    wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body>
<header class="header-wrapper">
  <nav class="header">
    <p class="menu-trigger">Меню</p>
    <?php wp_nav_menu(
      array(
        'theme_location' => 'menu',
        'menu' => '',
        'container' => '',
        'container_class' => '',
        'container_id' => '',
        'menu_class' => 'menu',
        'menu_id' => '',
        'echo' => true,
        'fallback_cb' => 'wp_page_menu',
        'before' => '',
        'after' => '',
        'link_before' => '',
        'link_after' => '',
        'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth' => 0,
        'walker' => '',
      )
    ); ?>
</header>

