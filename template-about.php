<?php get_header();
/*
Template Name: Link About
*/
while ( have_posts() ) : the_post();

    $about_1  = get_post_meta( get_the_ID(), '_ab_txt_1', true );
    $about_2  = get_post_meta( get_the_ID(), '_ab_txt_2', true );
    $about_3  = get_post_meta( get_the_ID(), '_ab_img_3', true );
    $about_4  = get_post_meta( get_the_ID(), '_ab_txt_4', true );
    $about_5  = wpautop( get_post_meta( get_the_ID(), '_ab_txt_5', true ) );

$entr_ab  = get_post_meta( get_the_ID(), '_ab_about_group', true );

$about_6  = get_post_meta( get_the_ID(), '_ab_txt_6', true );
$about_7  = wpautop( get_post_meta( get_the_ID(), '_ab_txt_7', true ) );

$about_8  = get_post_meta( get_the_ID(), '_ab_txt_8', true );
$about_9  = wpautop( get_post_meta( get_the_ID(), '_ab_txt_9', true ) );

$ab_pdf  = get_post_meta( get_the_ID(), '_ab_pdf', true );

$team_ab  = get_post_meta( get_the_ID(), '_ab_about_team', true );
 ?>

	<!-- MAIN IMAGE SECTION -->
	<div id="aboutwrap" class="parallax-about">
		<div class="container">

    <h1>
      <a class="text-uppercase" href='<?php echo get_home_url(); ?>'>
        <i class="fa fa-reply-all" aria-hidden="true"></i>
        <?= __('Home', 'xtra-link');?>
      </a>
	     <span class="text-uppercase text-danger "> / <?php the_title();?></span>
    </h1>
       <hr />
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 about-cont">
					<h2 class='<?php echo get_the_content() ? 'marg-top' : '';?>'>
					   <?=$about_1 ? "$about_1<br/>" : '';?>
						<?=$about_2 ? $about_2 : '';?>
                    </h2>
                    <?php the_content();?>

				</div>
			</div><!-- row -->
		</div><!-- /container -->
	</div><!-- /aboutwrap -->

	<!-- CHART IMAGE SECTION -->
    <div id="chartwrap">
	    <div class="container">
	      <div class="row mt">
			  <div class="col-lg-8 chart hidden-sm hidden-xs">

			  	<?= $about_3 ? "<img class='img-responsive' src='$about_3' alt='ab-3-img'>" : ''; ?>

			  </div><!-- col-lg-8 -->

			  <div class="col-lg-4">

			  	<?= $about_4 ? "<h1>$about_4</h1>" : ''; ?>

	                  <?= $about_5 ? $about_5 : ''; ?>

			  </div><!-- col-lg-4 -->
	      </div><!-- /row -->
	    </div><!-- /.container -->
    </div><!-- chartwrap -->

	<!-- SERVICES SECTION -->
	<div id="services">
		<div class="container">
			<div class="row mt">

<?php
foreach ( (array) $entr_ab as $key => $entry ) {

$icon = $heading = $desc = '';

	if ( isset( $entry['_ab_icon'] ) ) {
		$icon = esc_html( $entry['_ab_icon'] );
	}

  if ( isset( $entry['_ab_heading'] ) ) {
		$heading = esc_html( $entry['_ab_heading'] );
	}

	if ( isset( $entry['_ab_desc'] ) ) {
		$desc = wpautop( $entry['_ab_desc'] );
	}
  ?>

      <div class="col-lg-1 centered">
        <?= $icon ? "<i class='fa $icon'></i>" : ''; ?>
      </div>
      <div class="col-lg-3">
        <?= $heading ? "<h3>$heading</h3>" : ''; ?>
        <?= $desc ? $desc : ''; ?>
      </div>

	<?php } ?>

			</div><!-- row -->
		</div><!-- container -->
	</div><!-- services section -->


	<!-- TEAM INTRODUCTION -->
	<div class="container">

		<div class="row mt">
			<div class="col-lg-8">
				<h1><?= $about_6 ? $about_6 : ''; ?></h1>
			</div>
			<div class="col-lg-4"></div>
		</div><!-- row -->

		<div class="row">

			<div class="col-lg-8">
				<?= $about_7 ? $about_7 : ''; ?>
			</div>

			<div class="col-lg-3 col-lg-offset-1">

				<?= $about_8 ? "<p><b>$about_8</b></p>" : ''; ?>

				   <?= $about_9 ? $about_9 : ''; ?>

			<?php if($ab_pdf) : ?>
				<p class="tm">
					<a href="<?=$ab_pdf;?>" download>
						<i class="fa fa-link"></i>
						<b><?php _e('Download PDF', 'xtra-link'); ?></b>
					</a>
				</p>
			<?php endif; ?>

			</div>
		</div>

	</div><!-- container -->

	<!-- TEAM MEMBERS -->
	<div class="container">
		<div class="row mt centered">

<?php
foreach ( (array) $team_ab as $key => $entry ) {

$img = $heading_1 = $heading_2 = $textarea = $twitter = $facebook = $e_mail = '';

	if ( isset( $entry['_ab_img'] ) ) {
		$img = esc_html( $entry['_ab_img'] );
	}

  if ( isset( $entry['_ab_1_heading'] ) ) {
		$heading_1 = esc_html( $entry['_ab_1_heading'] );
	}

  if ( isset( $entry['_ab_2_heading'] ) ) {
		$heading_2 = esc_html( $entry['_ab_2_heading'] );
	}

	if ( isset( $entry['_ab_textarea'] ) ) {
		$textarea = wpautop( $entry['_ab_textarea'] );
	}

	if ( isset( $entry['_ab_facebook'] ) ) {
		$facebook = esc_url( $entry['_ab_facebook'] );
	}

	if ( isset( $entry['_ab_twitter'] ) ) {
		$twitter = esc_url( $entry['_ab_twitter'] );
	}

		if ( isset( $entry['_ab_e_mail'] ) ) {
		$e_mail = esc_html( $entry['_ab_e_mail'] );
	}

?>
		<div class="col-lg-4 col-sm-6">

			<div class="cardinfo">

			  <?= $img ? "<img class='img-responsive center-block' src='$img' alt='Gianni'>" : __('ADD IMAGE', 'xtra-link'); ?>

				<?= $heading_1 ? "<h4><b>$heading_1</b></h4>" : ''; ?>

                 <?= $heading_2 ? "<h6>$heading_2</h6>" : ''; ?>

                 <?= $textarea ? "$textarea" : ''; ?>

				<p>

					<?= $facebook ? "<a href='$facebook' target='_new'><i class='fa fa-facebook'></i></a>" : ''; ?>

					<?= $twitter ? "<a href='$twitter' target='_new'><i class='fa fa-twitter'></i></a>" : ''; ?>

                 <?php if($e_mail) : ?>
					<a href="mailto:<?=$e_mail;?>" data-toggle="tooltip" title="<?=$e_mail;?>" target='_new'>
				     	<i class="fa fa-envelope"></i>
					</a>
                 <?php endif; ?>

				</p>

			</div>

		</div>

<?php } ?>

		</div><!-- row -->

    </div><!-- container -->

<br>

<?php endwhile;
         get_footer(); ?>
