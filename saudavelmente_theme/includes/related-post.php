<?php
//$post_objects = get_field('gal_stared_posts');
$params_news_img = array( 'width' => 470, 'height' => 210 );

global $post;



$args=array(
	'post__not_in' => array($post->ID),
	'posts_per_page'=>2, 
	'orderby'=>'rand' 
	);


$tags = wp_get_post_terms($post->ID, 'post_tag', array("fields" => "all"));

if ($tags) :
	$tag_ids = array();
	foreach($tags as $individual_tag) {
		$tag_ids[] = $individual_tag->term_id;
	}
	$args['tag__in'] = $tag_ids;
endif;


//var_dump($args);

$related = new wp_query( $args );
//var_dump($related);
$posts = $related->get_posts();

if( $posts ): ?>

    <div id="related_posts">
		<div class="container">
			<div class="row">
	            <div class="col-md-1">
                </div>
				<div class="col-md-10 related_title">
	            	<h2>Artigos relacionados</h2>
	            </div>
	            <div class="col-md-1">
                </div>

	            <div class="col-md-1">
                </div>
			    <?php foreach( $posts as $post): ?>
			        <?php setup_postdata($post); ?>
			        
			        <div class="col-md-5">
				       <?php $thumb_url =  wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>

				        	<!-- <div class="flex-xl-middle stared_posts-content" style="background-image: url(<?php echo bfi_thumb( $thumb_url, $params_news_img  ); ?>);"> -->
				        	<div class="flex-xl-middle related_posts-wrap">
				        		

				        		<div class="stared_posts-content">
					        		<?php if ($post->post_parent): ?>
					        			<h3><?php echo get_the_title( $post->post_parent ).' > '. get_the_title(); ?></h3>
					        		<?php else : ?>
						            	<h3><?php the_title(); ?></h3>
						        	<?php endif; ?>
						            <p><?php kama_excerpt("maxchar=40"); ?></p>
						        	<a href="<?php the_permalink(); ?>" class="btn btn-link">[ ler ]</a>
						        </div>

					        	<img class="related_posts-image w-100" src="<?php echo bfi_thumb( $thumb_url, $params_news_img  ); ?>">

					        </div>

			        </div>
			            
			        
			    <?php endforeach; ?>
			    <div class="col-md-1">
                </div>
			</div>
		</div>
	</div>
    
    <?php wp_reset_postdata(); ?>
<?php endif;   