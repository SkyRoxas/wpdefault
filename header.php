<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title><?php the_title();?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <!-- Header content -->
      <h1><?php bloginfo();?></h1>
      <div><?php bloginfo('description') ?></div>
      <?php wp_nav_menu( array( 'theme_location' => 'header-menu','container_class' => 'header-menu' ) ); ?>
    </header>
