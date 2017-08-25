<?php
// GET ALL IMAGES FROM ( KIRKI CUSTOMIZER ) FILE  => inc/kirki-project/controls/header-img.php
$img_blog = get_theme_mod( 'img_blog', '' );
$img_archive = get_theme_mod( 'img_archive', '' );
$img_tag = get_theme_mod( 'img_tag', '' );
$img_search = get_theme_mod( 'img_search', '' );
?>
<!-- CONTACT FOOTER -->
<div id="cf">
    <div class="container">
        <div class="row">
<?php
// GET ALL SECTION FOOTER
      get_template_part('template-parts/footer-parts/part', 'logos'); 
      get_template_part('template-parts/footer-parts/part', 'action'); 
      get_template_part('template-parts/footer-parts/part', 'connect');
      get_template_part('template-parts/footer-parts/part', 'social'); 
      get_template_part('template-parts/footer-parts/part', 'contact'); 
?>
       </div><!-- row -->

        <a href='#' class='scrollup'><i class='fa fa-arrow-circle-o-up fa-3x' aria-hidden='true'></i></a>

    </div><!-- container -->
</div><!-- Contact Footer -->

<?php 
wp_footer();
 // get_template_part( 'inc/old', 'footer-script');?>

<script>

$(document).ready(function () {

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.scrollup').fadeIn();
        } else {
            $('.scrollup').fadeOut();
        }
    });

    $('.scrollup').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 600);
        return false;
    });

});

   $('.parallax-window').parallax({imageSrc: '<?php header_image(); ?>'});

   $('.parallax-portfolio').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});

   $('.parallax-single-portfolio').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});

   $('.parallax-about').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});

   $('.parallax-services').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});

   $('.parallax-page').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});

   $('.parallax-post').parallax({imageSrc: '<?php the_post_thumbnail_url(); ?>'});

   $('.parallax-blog-page').parallax({imageSrc: '<?php echo esc_url( $img_blog ); ?>'});

   $('.parallax-tag-page').parallax({imageSrc: '<?php echo esc_url( $img_tag ); ?>'});

   $('.parallax-archive-page').parallax({imageSrc: '<?php echo esc_url( $img_archive ); ?>'});

   $('.parallax-search-page').parallax({imageSrc: '<?php echo esc_url( $img_search ); ?>'});

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
