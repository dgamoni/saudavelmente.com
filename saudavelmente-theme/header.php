<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&subset=latin-ext" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="header" id="header">

		<div class="container">

			<div id="mainlogo" class="pull-md-left ">
				<div id="blog-title" class="blogtitle">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo('name') ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
					</a>
				</div>
			</div>

			<nav id="header-menu-mobil" class="mobileon" role="navigation">
						
			</nav>

	        <nav id="header-menu" class="pull-lg-right pull-md-left mobileoff" role="navigation">
				<?php //wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => '' ) ); ?>
			</nav>
		</div>
 
		
	</header>

	<div class="container"> 