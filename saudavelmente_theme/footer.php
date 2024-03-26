
	

	<footer class="footer" id="footer">

		<div id="footer-social-wrap" class="container-fluid">
		 	<?php get_template_part( 'includes/social-footer' ); ?>
		</div>
		
		<div id="footer-menu-wrap" class="container-fluid">
			<div class="container">
		        <div class="row mobileoff">
		            <div class="col-md-3 col-footer-menu">
		            	<nav id="" class="footer-menu" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_1', 'container' => '', 'menu_class' => '' ) ); ?>
						</nav>
		            </div>
		            <div class="col-md-3 col-footer-menu">
		            	<nav id="" class="footer-menu" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_2', 'container' => '','menu_class' => '' ) ); ?>
						</nav>
		            </div>
		            <div class="col-md-3 col-footer-menu">
		            	<nav id="" class="footer-menu" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_3',  'container' => '','menu_class' => '' ) ); ?>
						</nav>
		            </div>
		            <div class="col-md-3 col-footer-menu">
		            	<nav id="" class="footer-menu" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_4',  'container' => '','menu_class' => '' ) ); ?>
						</nav>
		            </div>
		        <!--<div class="col-md-3 col-footer-menu">
		            	<nav id="" class="footer-menu" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_5',  'menu_id' => 'footer_5', 'container' => '','menu_class' => '' ) ); ?>
						</nav>
		            </div>
		            <div class="col-md-3 col-footer-menu">
		            	<nav id="" class="footer-menu" role="navigation">
							<?php wp_nav_menu( array( 'theme_location' => 'footer_6',  'menu_id' => 'footer_6', 'container' => '','menu_class' => '' ) ); ?>
						</nav>
		            </div>
				-->
		        </div><!--  end row -->

			    <nav id="footer-menu-mobil" class="row mobileon" role="navigation">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('mobil_footer_menu') ) : ?>	
	    			<?php endif; ?>
				</nav>

		    </div> <!-- end container -->
		</div><!--  end container-fluid -->

		<div  id="under-footer" class="container-fluid">
			<div class="container">
		        <div class="row">
		        	<div class="col-md-2"></div>
		        	<div class="col-md-5 text-md-left">Ordem dos Psicólogos Portugueses © <?php echo date("Y"); ?> Todos os direitos reservados</div>
		        	<div class="col-md-2 col-xs-6 text-uppercase">
		        		<a href="<?php echo get_post_permalink(342); ?>"><?php echo get_the_title(342); ?></a>
		        	</div>
		        	<div class="col-md-2 col-xs-6 text-uppercase">
		        		<a href="<?php echo get_post_permalink(344); ?>"><?php echo get_the_title(344); ?></a>
		        	</div>
		        	<div class="col-md-1"></div>
		        </div>
		    </div>
	    </div>

	</footer>



<?php wp_footer(); ?>

</body>
</html> 