<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
<!--  main css -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url')?>">

<!-- for slider -->
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/liSlidik.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url')?>/css/liSlidik.blackClasic.css">

  



  <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
      filter: none;
    }
  </style>
  <![endif]-->

  <!--[if lte IE 9]>
  <style type="text/css">
    body{
      background: url("<?php bloginfo('template_url')?>/images/body-bg-ie.png" )repeat-x 0 730px;
    }
    .menu, .elastislide-list{
      background: url("<?php bloginfo('template_url')?>/images/opacity.png");
    }
  </style>
  <![endif]-->


  <title><?php bloginfo('name'); wp_title();?></title>
  <?php wp_head();?>
</head>
<body>

<section class="carcass">
  <nav class="header">
    <a href="/">
      <img class="logo" src="<?php bloginfo('template_url')?>/images/logo.png" alt="fashion photographer">
    </a>

    <?php wp_nav_menu(
      array(
        'theme_location'  => 'menu',
        'menu'            => '',
        'container'       => '',
        'container_class' => '',
        'container_id'    => '',
        'menu_class'      => 'menu',
        'menu_id'         => '',
        'echo'            => true,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => 0,
        'walker'          => '',
      )
    ); ?>
  </nav>