<?php if ( true == get_theme_mod( 'on_of_3', true ) ) :
  $stay_1 = get_theme_mod( 'stay_1', esc_attr__( 'Stay Connected', 'xtra-link' ));
  $stay_2 = get_theme_mod( 'stay_2', __( '<p>Join us on our social networks for all the latest updates, product/service announcements and more.</p>', 'xtra-link' ));
?>
	<div class="container">
		<div class="row mt">
			<div class="col-lg-12">
				<h1><?= esc_html($stay_1); ?></h1>
               <?= $stay_2; ?>
				<br>
			</div><!-- col-lg-12 -->
		</div><!-- row -->
	</div><!-- container -->
<?php endif; ?>
