<?php if ( true == get_theme_mod( 'on_of_4', true ) ) : ?>

  <?php
  // Default values for 'my_setting' theme mod.
  $defaults_footer = array(
    array(
      'icon' => 'fa-facebook',
      'link_text' => esc_attr__( 'FACEBOOK', 'xtra-link' ),
      'link_url'  => 'https://www.facebook.com/',
      'description' => esc_html__( 'Become A Friend', 'xtra-link' )
    ),
    array(
      'icon' => 'fa-twitter',
      'link_text' => esc_attr__( 'TWITTER', 'xtra-link' ),
      'link_url'  => 'https://twitter.com',
      'description' => esc_html__( 'Follow Us', 'xtra-link' )
    ),

    array(
      'icon' => 'fa-google-plus',
      'link_text' => esc_attr__( 'GOOGLE +', 'xtra-link' ),
      'link_url'  => 'https://plus.google.com',
      'description' => esc_html__( 'Add Us To Your Circle', 'xtra-link' )
    ),
  );

  // Theme_mod settings to check.
  $foot_social = get_theme_mod( 'footer_social', $defaults_footer ); ?>

<!-- SOCIAL FOOTER -->
<section id="contact"></section>
<div id="sf">
	<div class="container">
		<div class="row">

  <?php foreach( $foot_social as $setting ) : ?>
			<div class="col-lg-4 dg">
				<h4 class="ml"><?= $setting['link_text']; ?></h4>
				<p class="centered">
          <a href="<?= $setting['link_url']; ?>" target="_new">
            <i class="fa <?= $setting['icon']; ?>"></i>
          </a>
        </p>
				<p class="ml">> <?= $setting['description']; ?></p>
			</div>
  <?php endforeach; ?>

		</div><!-- row -->
	</div><!-- container -->
</div><!-- Social Footer -->
<?php endif; ?>
