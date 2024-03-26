 <?php get_header(); ?>

        <div class="container page-wrap">
	        <div class="row">
	        	<div class="col-md-1">
	        	</div>
	        	<div class="col-md-3 mobileoff">
	        		<?php get_sidebar('left'); ?>
	        	</div>
	        	<div class="col-md-7 page-content">
		            <?php while (have_posts()): the_post(); ?>
		                    <h1><?php the_title(); ?></h1>
		                    <?php the_content(); ?>
		            <?php endwhile; ?>
		            <?php 
						$adjacent_post = get_adjacent_post( false, '', true );
						$prev_post_id  = $adjacent_post->ID;
						$adjacent_post = get_adjacent_post( false, '', false );
						$next_post_id  = $adjacent_post->ID;
		            ?>
		            <div class="row button-wrap">
		            	<div class="col-xs-6">
		            		<a href="<?php echo get_permalink( $prev_post_id ); ?>">
		            			<button type="button" class="btn btn-secondary w-100">artigo anterior</button>
		            		</a>
		            	</div>
		            	<div class="col-xs-6">
		            		<a href="<?php echo get_permalink( $next_post_id ); ?>">
		            			<button type="button" class="btn btn-secondary w-100">próximo artigo</button>
		            		</a>
		            	</div>
		            </div>



		        </div>
		        <div class="col-md-1">
	        	</div>
	        </div>
        </div>

<?php get_footer(); ?>