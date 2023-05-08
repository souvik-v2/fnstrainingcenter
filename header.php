<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="navbar-wrapper">
		<div class="container">
			<div class="navbar-wrapper__content">
				<a href="<?php bloginfo('url'); ?>" class="navbar-wrapper__logo-wrap"><img class="navbar-wrapper__logo-img" src="<?php do_action('fns_logo_uri'); ?>" alt="fns_logo"></a>
				<?php
				if (has_nav_menu('primary')) {
					fns_header_menu("primary");
				}
				?>
				<a href="<?php bloginfo('url'); ?>/login" class="cta cta-primary">MEMBER LOG-IN</a>
			</div>
		</div>
	</header>
	<!-- Main -->
	<main>