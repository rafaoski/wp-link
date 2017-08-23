
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
$img_archive = get_theme_mod( 'img_archive', '' );
$img_tag = get_theme_mod( 'img_tag', '' );
 // get_template_part( 'inc/old', 'footer-script'); ?>

<script>

   $('.parallax-window').parallax({imageSrc: '<?php header_image(); ?>'})

   $('.parallax-portfolio').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'})

   $('.parallax-single-portfolio').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'})

   $('.parallax-about').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'})

   $('.parallax-services').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'})

   $('.parallax-page').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'})

	 $('.parallax-post').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'})

	 $('.parallax-blog-page').parallax({imageSrc: '<?php echo esc_url( $img_blog ); ?>'})

   $('.parallax-tag-page').parallax({imageSrc: '<?php echo esc_url( $img_tag ); ?>'})

   $('.parallax-archive-page').parallax({imageSrc: '<?php echo esc_url( $img_archive ); ?>'})


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

	$("#button").click(function() {
    $('html, body').animate({
        scrollTop: $("#welcome").offset().top
    }, 500 );
});

new AnimOnScroll( document.getElementById( 'grid' ), {
	minDuration : 0.4,
	maxDuration : 0.7,
	viewportFactor : 0.2
} );

new AnimOnScroll( document.getElementById( 'process' ), {
    minDuration : 0.4,
    maxDuration : 0.7,
    viewportFactor : 0.2
} );

</script>

</body>
</html>
