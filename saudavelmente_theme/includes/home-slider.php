
<?php $rows = get_field('gal_home_slider'); ?>

<?php if( $rows ): ?>

	<div class="container-fluid container-slider _mobileoff"> <!-- container -->
		<div id="carousel-home" class="carousel slide" data-ride="carousel">
		 	
			<!-- <ol class="carousel-indicators"> -->
				<?php
					
					foreach ($rows as $key => $row) {
						if ( $key == 0 ) {
							//echo '<li data-target="#carousel-home" data-slide-to="'.$key.'" class="active"></li>';
						} else {
							//echo '<li data-target="#carousel-home" data-slide-to="'.$key.'"></li>';
						}
					}
				?>
			<!-- </ol> -->

			<div class="carousel-inner" role="listbox">
				<?php
					foreach ($rows as $key => $row) {
						if ( $key == 0 ) {
							$class="active";
						} else {
							$class="";
						}
						//$gal_home_slider_title = $row['gal_home_slider_title'];
						$gal_home_slider_link = $row['gal_home_slider_link'];
						$gal_home_slider_img = $row['gal_home_slider_img'];

						$params_full = array( 'width' => 1350, 'height' => 640 );
						$gal_home_slider_img_full = bfi_thumb( $gal_home_slider_img['url'], $params_full );

		                //video
		                $gal_home_slider_video = $row['gal_home_slider_video'];
		                if ($images_video_video): ?>
			                <div class="product_content_wrapper images_video_video">
				                <div class="embed-container">
									<?php echo $images_video_video; ?>
								</div>
							</div>
						<?php endif;


					    // <a href="'.$gal_home_slider_link.'">
					    echo '<div class="carousel-item '.$class.'">';
					      echo '<div class="overlay play-ico"></div>';
					      echo '<img class="overlay overlay-img " src="'.$gal_home_slider_img_full.'" alt="'.$gal_home_slider_img['alt'].'">';
					      		
					      		if ($gal_home_slider_video):
						      		echo '<div id="video" class="embed-container">';
										echo $gal_home_slider_video;
									echo '</div>';
								 endif;

					    echo '</div>';

					}
				?>
			</div>	

		</div> <!-- /#carousel-home -->
	</div> <!-- /container -->

<?php endif; ?>