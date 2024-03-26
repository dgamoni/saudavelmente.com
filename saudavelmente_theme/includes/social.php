

<?php 

if( have_rows('gal_social_icon', 'option') ): ?>
	<div id="social_icon-block" class="social_icon-sidebar">
		<h5 class="social_icon-title">Partilhe</h5>
<!-- 		<div class="container">
			<div class="row "> -->
				<ul class="text-md-left">
					<?php 
					global $post;
					$deco_sharing_data = deco_get_data_for_sharing( $post->ID );

				    while ( have_rows('gal_social_icon', 'option') ) : the_row();
						$gal_social_icon_link_fb = get_sub_field('gal_social_icon_link_fb', 'option');
						$gal_social_icon_link_google = get_sub_field('gal_social_icon_link_google', 'option');
						$gal_social_icon_link_email = get_sub_field('gal_social_icon_link_email', 'option');
						$gal_social_icon_link_twitter = get_sub_field('gal_social_icon_link_twitter', 'option');
						$carrent_link = get_permalink( $post->ID );
						$name = get_the_title( $post->ID );
						?>
						<!-- svg -->
						<li><a class="social_icon_s_svg social_icon_link_fb_svg" onclick="deco_soc_sharing_window('https://www.facebook.com/sharer/sharer.php?u=<?php echo $carrent_link;?>', '<?php echo $name; ?>'); return false;" href="#">Share on Facebook</a></li>
						<li><a class="social_icon_s social_icon_link_google" onclick="deco_soc_sharing_window('https://plus.google.com/share?url=<?php echo $carrent_link;?>', '<?php echo $name; ?>'); return false;" href="#">Share on Google+</a></li>
						<li><a class="social_icon_s_svg social_icon_link_email_svg" href="mailto:<?php echo $gal_social_icon_link_email;?>">Send Email</a></li>
						<li><a class="social_icon_s_svg social_icon_link_twitter_svg" onclick="deco_soc_sharing_window('https://twitter.com/home?status=<?php echo $carrent_link;?>', '<?php echo $name; ?>'); return false;" href="#">Share on Twitter</a></li>

						<!-- png -->
						<!-- <li><a class="social_icon_s social_icon_link_fb" onclick="deco_soc_sharing_window('https://www.facebook.com/sharer/sharer.php?u=<?php echo $carrent_link;?>', '<?php echo $name; ?>'); return false;" href="#">Share on Facebook</a></li>
						<li><a class="social_icon_s social_icon_link_google" onclick="deco_soc_sharing_window('https://plus.google.com/share?url=<?php echo $carrent_link;?>', '<?php echo $name; ?>'); return false;" href="#">Share on Google+</a></li>
						<li><a class="social_icon_s social_icon_link_email" href="mailto:<?php echo $gal_social_icon_link_email;?>">Send Email</a></li>
						<li><a class="social_icon_s social_icon_link_twitter" onclick="deco_soc_sharing_window('https://twitter.com/home?status=<?php echo $carrent_link;?>', '<?php echo $name; ?>'); return false;" href="#">Share on Twitter</a></li> -->
						
						<?php
						//echo '<li ><a class="social_icon_s social_icon_link_fb" href="'.$gal_social_icon_link_fb.'">fb</a></li>';
						//echo '<li ><a class="social_icon_s social_icon_link_google" href="'.$gal_social_icon_link_google.'">google</a></li>';
						//echo '<li ><a class="social_icon_s social_icon_link_email" href="mailto:'.$gal_social_icon_link_email.'">email</a></li>';
						//echo '<li ><a class="social_icon_s social_icon_link_twitter" href="'.$gal_social_icon_link_twitter.'">tw</a></li>';
				    endwhile;
				    ?>
				</ul>
<!-- 			</div>
		</div> -->
	</div>

	<script>
		function deco_soc_sharing_window(url, name) {

		var popup_width = 300;
		var popup_height = 400;
		var popup_top = Math.max(0, (window.outerHeight - popup_height) / 2);
		var popup_left = Math.max(0, (window.outerWidth - popup_width) / 2);

		if (window.showModalDialog) {
			window.showModalDialog(url, name, "dialogWidth:500px;dialogHeight:500px");
		} else {
			window.open(url, name, 'height=500,width=500,toolbar=no,directories=no,status=no,linemenubar = no,scrollbars = no,resizable=no,modal=yes,left=' + popup_left + ',top=' + popup_top);
		}
	}
	</script>

<?php endif; 


function deco_get_data_for_sharing( $id ) {

	$title   = urlencode( html_entity_decode( get_the_title( $id ) ) );
	$content = urlencode( html_entity_decode( get_the_excerpt( $id ) ) );
	$image   = wp_get_attachment_url( get_post_thumbnail_id( $id ) );
	$image   = bfi_thumb( $image, array( 'width' => 317, 'crop' => true ) );
	$link    = urlencode( get_permalink( $id ) );


	$result = array(
		'title'   => $title,
		'content' => $content,
		'image'   => $image,
		'link'    => urlencode( get_permalink( $post->ID ) )
	);

	return $result;
}

