<!-- CONTACT FOOTER -->
<div id="cf">
	<div class="container">
		<div class="row">
<?php
$class='foot-cont';
if ( true == get_theme_mod( 'on_of_5', true ) ) :
$class='col-lg-4';

$foot_map = get_theme_mod( 'my_fooot_map' );
if($foot_map != '') {
  $iframe = $foot_map;
} else {
  $iframe = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23985.736920190724!2d16.20386883668067!3d50.8091178956222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470e56ac73618d49%3A0xfed922a43f3db50b!2sWa%C5%82brzych!5e0!3m2!1spl!2spl!4v1501185042188" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>';
} ?>
			<div class="<?php echo get_theme_mod( 'on_of_6', false ) ? 'col-lg-8' : 'col-lg-12 rm-padd'; ?>">
				<div id="mapwrap">
             <?= $iframe; ?>
				</div>
			</div><!--col-lg-8-->

<?php endif; ?>

<?php if ( true == get_theme_mod( 'on_of_6', true ) ) :

  $info_1 = get_theme_mod( 'info_1', esc_attr__( 'Minsk - Head Office', 'xtra-link' ));
  $info_2 = get_theme_mod( 'info_2', __( '<p>Business Center, SomeAve 987,<br/>Minsk, Belarus.</p>', 'xtra-link' ) );
  $info_3 = get_theme_mod( 'info_3', esc_attr__( '+55 4839-4390', 'xtra-link' ));
  $info_4 = get_theme_mod( 'info_4', esc_attr__( '+55 4333-4345', 'xtra-link' ));
  $info_5 = get_theme_mod( 'info_5', esc_attr__( 'hello@linkagency.com', 'xtra-link' ));
  $info_6 = get_theme_mod( 'info_6', __( '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', 'xtra-link' ));
  ?>
  <div class="<?= $class; ?>">

				<h4><?php _e('ADDRESS', 'xtra-link');?><br/><?= $info_1; ?></h4>

				<br>

          <?= $info_2; ?>

				<p>
					<?php _e('P', 'xtra-link');?>: <?= $info_3; ?><br/>
					<?php _e('F', 'xtra-link');?>: <?= $info_4; ?><br/>
					<?php _e('E', 'xtra-link');?>: <a href="mailto:#"><?= $info_5; ?></a>
				</p>

         <?= $info_6; ?>

		</div><!--col-lg-4-->
<?php endif; ?>
