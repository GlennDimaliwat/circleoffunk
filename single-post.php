<?php
/*
* Page for each single posts
*/

get_header(); ?>
<br/>
<div class="container pagecontent">
<?php
if (have_posts()) :
    while(have_posts()) : the_post(); ?>

    <article class="post">
  		
    	<br/>
        <div class="post-title"><?php the_title(); ?></a></div>
        <div class="eachpost">
        	<?php the_content(); ?>
        </div>
    </article>
    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;
?>
<br/><a href="events">Back to Events</a>
<br/><br/><br/>
</div>
<br/>
<?php get_footer(); ?>