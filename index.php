<?php
/*
* Page for Events
*/
get_header(); ?>
<br/>
<div class="container pagecontent">
	<div class="col-md-12">
		<br/>
		
			<?php
			if (have_posts()) :
		    	while(have_posts()) : the_post(); ?>
		   		 <article class="post allposts">
		    		<a href="<?php the_permalink();?>">
		    			<div class="post-title"><?php the_title(); ?></div>
		    		</a>
		    		<div class="preview">
		    			
			    		<?php
			    			if ( has_post_thumbnail() ) { ?>
			    			<a href="<?php the_permalink();?>">
			    			<?php
								the_post_thumbnail('thumbnail');
							?>
							</a>
							<?php
							}
						?>
							
						<div class="excerpt">
						<?php
							the_excerpt();
			    		?>
			    			<div class="posted_by">
				    			Posted by <a href="<?php get_author_posts_url( get_the_author_meta('ID') ); ?>">
				    			<?php the_author(); ?></a> at <?php the_time('F jS, Y g:i a'); ?>
				    		</div>
			    		</div>
		    		
			    		
		    		</div>
		    		<br/>
		    	</article>
		    <?php
		    	endwhile;
		    else :
		    ?>
	    		<div class="public_msg">There are no events available at the moment</div>
	    	<?php
		    endif;
			?>
			<br/>
		
	</div>
</div>
<br/>
<?php get_footer(); ?>