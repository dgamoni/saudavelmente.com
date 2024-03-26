

<?php 

if( have_rows('gal_social_icon', 'option') ): ?>
	<div id="social_icon-block">

<!-- 		<div class="container">
			<div class="row "> -->
				<ul class="text-md-center">
					<?php 
				    while ( have_rows('gal_social_icon', 'option') ) : the_row();
						$gal_social_icon_link_fb = get_sub_field('gal_social_icon_link_fb', 'option');
						$gal_social_icon_link_google = get_sub_field('gal_social_icon_link_google', 'option');
						$gal_social_icon_link_email = get_sub_field('gal_social_icon_link_email', 'option');
						$gal_social_icon_link_twitter = get_sub_field('gal_social_icon_link_twitter', 'option');
						$gal_social_icon_link_linkedin = get_sub_field('gal_social_icon_link_linkedin', 'option');
						$gal_social_icon_link_instagram = get_sub_field('gal_social_icon_link_instagram', 'option');

						//echo '<li ><a class="social_icon_b social_icon_link_fb" href="'.$gal_social_icon_link_fb.'">fb</a></li>';
//						echo '<li ><a class="social_icon_b social_icon_link_google" href="'.$gal_social_icon_link_google.'">google</a></li>';
//						echo '<li ><a class="social_icon_b social_icon_link_email" href="mailto:'.$gal_social_icon_link_email.'">email</a></li>';
						//echo '<li ><a class="social_icon_b social_icon_link_twitter" href="'.$gal_social_icon_link_twitter.'">tw</a></li>';
				    
						// add svg
						echo '<li ><a class="social_icon_b_svg social_icon_link_fb_svg" href="'.$gal_social_icon_link_fb.'">fb</a></li>';
						//echo '<li ><a class="social_icon_b social_icon_link_google" href="'.$gal_social_icon_link_google.'">google</a></li>';
						//echo '<li ><a class="social_icon_b_svg social_icon_link_email_svg" href="mailto:'.$gal_social_icon_link_email.'">email</a></li>';
						echo '<li ><a class="social_icon_b_svg social_icon_link_twitter_svg" href="'.$gal_social_icon_link_twitter.'">tw</a></li>';
						echo '<li ><a class="social_icon_b2_svg social_icon_link_linked_svg" href="'.$gal_social_icon_link_linkedin.'">lin</a></li>';
						echo '<li ><a class="social_icon_b2_svg social_icon_link_instagram_svg" href="'.$gal_social_icon_link_instagram.'">in</a></li>';

				    endwhile;
				    ?>
				</ul>
<!-- 			</div>
		</div> -->
	</div>
<?php endif; 