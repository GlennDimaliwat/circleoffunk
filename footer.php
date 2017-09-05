<div class="container">
	<nav class="site-nav col-md-12" id="bottomlinks">
		<?php
        $args = array(
            'theme_location' => 'footer'
        );
        ?>
        <?php wp_nav_menu( $args ); ?>
    </nav>

	<div class="col-md-6 copyright">
		&copy; <?php echo date('Y'); ?> CIRCLE OF FUNK
	</div>
	<div class="col-md-6" id="social">
		<ul>
			<li><a target="_blank" href="https://www.facebook.com/thecircleoffunk">Facebook</a></li>
			<li><a target="_blank" href="https://www.instagram.com/thecircleoffunk/">Instagram</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a target="_blank" href="https://www.youtube.com/channel/UCpSFXRRfL7btq_D36k6LztQ">YouTube</a></li>
		</ul>
	</div>
</div>

<!-- JQUery -->
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<!-- Boostrap Modal for Gallery: Instagram Photos -->
<script type="text/javascript">
	$(function() {
			$('.pop').on('click', function() {
				$('.imagepreview').attr('src', $(this).find('img').attr('alt'));
				/*$('.videopreview').attr('src', $(this).find('img').attr('alt'));*/
				$('#imagemodal').modal('show');   
			});	
	});
</script>
<?php wp_footer(); ?>
</body>
</html>