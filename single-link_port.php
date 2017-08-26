<?php get_header();

  while ( have_posts() ) : the_post();

  $subtitl  = get_post_meta( get_the_ID(), '_cmb_port_subtittle', true );

  $im_f = get_post_meta( get_the_ID(), '_cmb_port_f_img_port_id', 1 );
  $img_port = wp_get_attachment_image( $im_f, 'full', array( "class" => "img-responsive" ) );

    $txt_area_1  = get_post_meta( get_the_ID(), '_cmb_port_txt_area_1', true );
    $txt_area_2  = get_post_meta( get_the_ID(), '_cmb_port_txt_area_2', true );

        $im_n = get_post_meta( get_the_ID(), '_cmb_port_img_port_n_id', 1 );
  		$img_port_2 = wp_get_attachment_image_url( $im_n, 'full', array( "class" => "img-responsive" ) );

  		$txt_url   = get_post_meta( get_the_ID(), '_cmb_port_text_url', true );
  		$heading_txt   = get_post_meta( get_the_ID(), '_cmb_port_heading_txt_1', true );

        $files = get_post_meta( get_the_ID(), 'img_port_3', 1 );
?>

	<!-- MAIN PROJECT SECTION -->
	<div id="sp" class='parallax-single-portfolio'>
		<div class="container">
			<div class="row">
			  	<h1><a class="text-uppercase" href='<?php echo get_home_url(); ?>'><?= __('Home', 'xtra-link');?></a>
				   <span class="text-uppercase text-danger ">/<?php the_title(); ?></span>
				</h1>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /portrwrap -->

	<!-- WELCOME SECTION -->
    <div class="container">
      <div class="row mt centered">
      	<div class="col-lg-8 col-lg-offset-2">

	        <h1><b><?php the_title(); ?></b></h1>
			
            <?php the_content(); ?>

      	</div>
      </div><!-- /row -->
    </div><!-- /.container -->

<?php if( !empty($im_f) ) : ?>
    <!-- MAC IMAGE -->
	<div class="container">
		<div class="row centered">
			<?php echo $img_port; ?>
		</div>
	</div>
<?php endif; ?>

<br>

<?php if($txt_area_1 || $txt_area_2 ) : ?>
	<!-- CLIENT INFORMATION -->
	<div id="lg">
		<div class="container">
			<div class="row">

              <?php if($txt_area_1) : ?>
				<div class="col-lg-5 col-lg-offset-1 desc">
			     	<?= $txt_area_1; ?>
				</div>
              <?php endif; ?>

              <?php if($txt_area_2) : ?>
				<div class="col-lg-4 col-lg-offset-1 desc">
					<?= $txt_area_2; ?>
				</div>
              <?php endif; ?>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- dg -->
<?php endif; ?>

	<!-- SINGLE PROJECT STANDOUT IMAGE -->
<?php if( !empty($im_n) ) : ?>
<br>
  <img class='img-responsive center-block' src="<?= $img_port_2; ?>" alt="">
<?php endif; ?>

<?php  if($files) { ?>
	<div class="container">
		<div class="row mt centered">
			<div class="col-lg-8 col-lg-offset-2">
				<h1><?= $heading_txt; ?></h1>
				<ul class="process effect-2" id="process">
                            <?php
                                  foreach ( $files as $file ) {
                                           echo "<li><img class='img-responsive center-block' src='$file'></li>";
                                  } 
                            ?>
				</ul>
			</div><!-- col-lg-8 -->
		</div><!-- row -->
    </div><!-- container -->
<?php } else {
	echo '<br/>';
} ?>

       <?php endwhile; ?>

<?php get_footer(); ?>
