<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Meta Settings -->
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Viewport Settings -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">-->


		<!-- Bootstrap core CSS -->
		<!--link href="css/bootstrap-theme.min.css" rel="stylesheet"/-->
		<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/bootstrap.min.css">
		
		<!-- Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,200,300,400" rel="stylesheet">

		<!-- Main CSS inside functions.php -->
		<!-- Load functions.php -->
		<?php wp_head(); ?>
		

		<title><?php bloginfo('name'); ?></title>
	</head>
	<body <?php body_class(); ?>>
		<div class="container">
			<a href="home"><div class="col-md-12" id="logo"></div></a>

			<div class="col-md-12" id="tagline"><?php bloginfo('description'); ?></div>

			<nav class="site-nav col-md-12" id="menu">
				<?php
	            $args = array(
	                'theme_location' => 'primary'
	            );
	            ?>
	            <?php wp_nav_menu( $args ); ?>
	        </nav>
	    </div>