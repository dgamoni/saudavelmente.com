<?php
$post_objects = get_field('gal_stared_posts');
$params_news_img = array( 'width' => 686, 'height' => 321 );

if( $post_objects ): ?>

    <div id="stared_posts-block">
		<div class="container">

			<div class="row ">
			    <?php foreach( $post_objects as $post): ?>
			        <?php setup_postdata($post); ?>
			        
			        <div class="col-md-6 stared_posts-block-col">
				       <?php $thumb_url =  wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>

				        	<!-- <div class="flex-xl-middle stared_posts-content" style="background-image: url(<?php echo bfi_thumb( $thumb_url, $params_news_img  ); ?>);"> -->
				        	<div class="flex-xl-middle stared_posts-content">
				        		


				        		<?php if ($post->post_parent): ?>
				        			<h3><?php echo get_the_title( $post->post_parent ).' > '. get_the_title(); ?></h3>
				        		<?php else : ?>
					            	<h3><?php the_title(); ?></h3>
					        	<?php endif; ?>
					            <p><?php kama_excerpt("maxchar=70"); ?></p>
					        	<a href="<?php the_permalink(); ?>" class="btn btn-link">[ ler ]</a>

					        	<img class="stared_posts-image w-100" src="<?php echo bfi_thumb( $thumb_url, $params_news_img  ); ?>">

					        </div>

			        </div>
			            
			        
			    <?php endforeach; ?>
			</div>
		</div>
	</div>
    
    <?php wp_reset_postdata(); ?>
<?php endif;  