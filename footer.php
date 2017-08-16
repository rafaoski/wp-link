
<?php get_template_part('template-parts/footer-parts/part', 'logos'); ?>
<?php get_template_part('template-parts/footer-parts/part', 'action'); ?>
<?php  get_template_part('template-parts/footer-parts/part', 'connect'); ?>
<?php  get_template_part('template-parts/footer-parts/part', 'social'); ?>
<?php  get_template_part('template-parts/footer-parts/part', 'contact'); ?>

		</div><!-- row -->
	</div><!-- container -->
</div><!-- Contact Footer -->

<?php wp_footer(); 
$img_blog = get_theme_mod( 'img_blog', '' );
 // get_template_part( 'inc/old', 'footer-script'); ?>

<script type="text/javascript">
   $('.parallax-window').parallax({imageSrc: '<?php header_image(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-portfolio').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-single-portfolio').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-about').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-services').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-page').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-page').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-blog-page').parallax({imageSrc: '<?php echo esc_url( $img_blog ); ?>'});
</script>

<script type="text/javascript">
   $('.parallax-post').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>

<script>
	$("#button").click(function() {
    $('html, body').animate({
        scrollTop: $("#welcome").offset().top
    }, 500 );
});
</script>

<script>
new AnimOnScroll( document.getElementById( 'grid' ), {
	minDuration : 0.4,
	maxDuration : 0.7,
	viewportFactor : 0.2
} );
</script>

	<script>
		new AnimOnScroll( document.getElementById( 'process' ), {
			minDuration : 0.4,
			maxDuration : 0.7,
			viewportFactor : 0.2
		} );
</script>

</body>
</html>
