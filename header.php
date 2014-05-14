<!DOCTYPE html <?php language_attributes(); ?> >
<html>
<head>
  <?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="initial-scale=1.0">
  <?php if (is_front_page()) { ?>
     <title><?php bloginfo('name'); ?></title>
  <?php } else { ?>
	  <title><?php bloginfo('name'); echo ' - '; wp_title(''); ?></title>
  <?php } ?>
	<link href='http://fonts.googleapis.com/css?family=Oxygen|Roboto:100' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/vendor/normalize.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/grid.css">
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/common.css">

  <?php if (is_front_page()) { ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/index.css">
  <?php } ?>
  <?php if (is_single()) { ?>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/stylesheets/single.css">
  <?php } ?>
</head>
<body>
	<header>
		<div class="grid clearfix">
			<div class="column-6"><h1 class="siteHeading"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1></div>
			<div class="column-6">
				<nav class="headerNav clearfix">
              <?php wp_nav_menu(array('container' => '')); ?>
							
						</nav>
				</div>
		</div>
	</header>