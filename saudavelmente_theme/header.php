<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&subset=latin-ext" rel="stylesheet">

	<?php wp_head(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49069318-15', 'auto');
  ga('send', 'pageview');
</script>
</head>

<body <?php body_class(); ?>>


	<header class="header" id="header">

		<div class="container">


			<div id="mainlogo" class="text-md-center">
				<div id="blog-title" class="blogtitle">
					<a href="<?php echo esc_url(home_url( '/' )); ?>" title="<?php bloginfo('name') ?>">
						<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt=""> --> 
						<img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/saudavelmente_logo.svg" alt="">
					</a>
				</div>
			</div>

			<div id="header-baner" class="mobileoff">
				<a href="https://www.ordemdospsicologos.pt" title="<?php bloginfo('name') ?>" target="_blank">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/img/baner.png" alt=""> -->
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/op_logo.svg" alt="">
				</a>
			</div>

			<div id="header-baner" class="mobileon">
 				<a href="#menu" class="mobil-menu-icon"></a>
			</div>


			<nav id="header-menu-mobil" class="mobileon" role="navigation">
				<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mobil_header_menu') ) : ?>	
    			<?php endif; ?>
			</nav>

		</div> <!-- /container -->

		<div class="container-fluid">
			<nav id="header-menu" class="mobileoff text-md-center yamm" role="navigation">
				<?php 

					$args = array(
						'theme_location' => 'primary',
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
						'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
						'depth' => 0,
						'walker' => ''
					);

			 		$args_ = array(
			          'theme_location' => 'primary',
			          'depth' => 0,
			          'container' => 'false',
			          'menu_class'  => 'nav navbar-nav',
			          'walker'  => new BootstrapNavMenuWalker()
			          );
				
					wp_nav_menu( $args_ );

				 ?>
			</nav>
		</div>
 
		
	</header>

	