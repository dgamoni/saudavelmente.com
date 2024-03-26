<?php
/**
 * Template Name: fullwidth
 */
 ?>
 <?php get_header(); ?>

        <div class="container page-wrap">
	        <div class="row">
	        	<div class="col-md-1">
	        	</div>
	        	<div class="col-md-10 page-content">
		            <?php while (have_posts()): the_post(); ?>
		                    <h1><?php the_title(); ?></h1>
		                    <?php the_content(); ?>
		            <?php endwhile; ?>
		        </div>
		        <div class="col-md-1">
	        	</div>
	        </div>
        </div>

<?php get_footer(); ?>