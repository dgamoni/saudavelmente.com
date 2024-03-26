 <?php

$params_news_img = array( 'width' => 686, 'height' => 321 );

if( have_rows('gal_started_posts_options') ): ?>
	<!-- strated post plus -->
	<div id="stared_posts-block">
		<div class="container">
			<div class="row ">

			<?php while( have_rows('gal_started_posts_options') ): the_row(); 
				$gal_started_posts_options_image = get_sub_field('gal_started_posts_options_image');
				$gal_started_posts_options_title = get_sub_field('gal_started_posts_options_title');
				$gal_started_posts_options_summary = get_sub_field('gal_started_posts_options_summary');
				$gal_started_posts_options_linktext = get_sub_field('gal_started_posts_options_linktext');
				$gal_started_posts_options_url = get_sub_field('gal_started_posts_options_url');
				?>
				<div class="col-md-6 stared_posts-block-col">
					<div class="flex-xl-middle stared_posts-content">
						<!-- <div class="flex-xl-middle stared_posts-content-ie-fix"> -->
				            <h3><?php echo $gal_started_posts_options_title; ?></h3>
				            <p><?php echo $gal_started_posts_options_summary; ?></p>
				            <?php if ($gal_started_posts_options_linktext) : ?>
				        		<a href="<?php echo $gal_started_posts_options_url; ?>" class="btn btn-link">[ <?php echo $gal_started_posts_options_linktext; ?> ]</a>
				        	<?php endif; ?>
				        	<img class="stared_posts-image w-100" src="<?php echo bfi_thumb( $gal_started_posts_options_image, $params_news_img  ); ?>">
			        	<!-- </div> -->
			        </div>
				</div>
			<?php endwhile; ?>

			</div>
		</div>
	</div>
<?php endif; ?>