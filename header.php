<!doctype html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>
<?php wp_title( '|', 'true', 'right'); bloginfo('name'); ?>
</title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="row no-max pad main">
  <div class="logo">
    <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
      <?php bloginfo( 'name'); ?>
      </a></h1>
    <h2>
      <?php bloginfo('description', 'display' ); ?>
    </h2>
  </div>
</header>
<div class="overlay"> </div>
<nav class="top-bar" data-topbar role="navigation">
  <section class="top-bar-section"> 
    
    <!-- Right Nav Section -->
    <ul class="center-buttons">
      <?php 
	
	$defaults = array(
		'container' => false,
		'theme_location' => 'primary-menu',
		'menu_class' => 'no-bullet'
		
		);
	
	wp_nav_menu ( $defaults );
	
	?>
    </ul>
  </section>
</nav>
