<?php get_header(); ?>
<br/>
<div class="container pagecontent">
	<div class="col-md-12">
		<br/>
		<div class="public_msg"><?php the_title(); ?> page is still under construction</div>
		
		<div id="instagram">
		
		<?php

			$json = file_get_contents('https://www.instagram.com/thecircleoffunk/media/');

			$array = json_decode($json, true); // Get JSON and convert to Array
			$array['items'] = array_reverse($array['items']); // Reverse the Array to get the latest photosfirst
			foreach ($array['items'] as $item) {
				$low_resolution = $item['images']['low_resolution']['url'];
				$high_resolution = $item['images']['standard_resolution']['url'];
				/*$video_url = $item['alt_media_url'];
				if( $item['type']=="video" ) {
					$high_resolution = $video_url;
				}*/
				?>
					<div class="pop">
						<img src="<?php echo $low_resolution; ?>" alt="<?php echo $high_resolution; ?>"
						customlink="<?php echo $instagram_link; ?>"/>
					</div>
			   <?php
			}
			
		?>

			<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">              
			      <div class="modal-body">
			      	<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
			        <img src="" class="imagepreview" style="width: 100%;" >
			        <!--video controls id="video1" style="width: 100%; height: auto; margin:0 auto; frameborder:0;">
			          <source src="" class="videopreview" type="video/mp4">
			          Your browser doesn't support HTML5 video tag.
			        </video-->
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<br/>
		<br/>
	</div>
</div>

<br/>
<?php get_footer(); ?>