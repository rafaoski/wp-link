<?php // Theme_mod settings to check.
 if ( true == get_theme_mod( 'on_of_4', true ) ) : 
// Show Global Get Theme Mod from file inc/polylang-translations
global $foot_social_1, $foot_social_2, $foot_social_3;

  //TRANSLATE STRING WITH POLYLANG
  if (function_exists('pll_the_languages')) {

    $foot_social_1 = get_theme_mod($foot_social_1);
    $foot_social_2 = get_theme_mod($foot_social_2);
    $foot_social_3 = get_theme_mod($foot_social_3);

  }
  ?>

<!-- SOCIAL FOOTER -->
<section id="contact"></section>
<div id="sf">
	<div class="container">
		<div class="row">


			<div class="col-lg-4 dg">
				<h4 class="ml"><?= __('FACEBOOK', 'xtra-link')?></h4>
				<p class="centered">
          <a href="<?=$foot_social_1?>" target="_blank">
            <i class="fa fa-facebook ?>"></i>
          </a>
        </p>
				<p class="ml">> <?= __('Become A Friend', 'xtra-link') ?></p>
			</div>

      <div class="col-lg-4 dg">
				<h4 class="ml"><?= __('TWITTER', 'xtra-link')?></h4>
				<p class="centered">
          <a href="<?=$foot_social_2?>" target="_blank">
            <i class="fa fa-twitter ?>"></i>
          </a>
        </p>
				<p class="ml">> <?= __('Follow US', 'xtra-link') ?></p>
			</div>

      <div class="col-lg-4 dg">
				<h4 class="ml"><?= __('GOOGLE +', 'xtra-link')?></h4>
				<p class="centered">
          <a href="<?=$foot_social_3?>" target="_blank">
            <i class="fa fa-google-plus ?>"></i>
          </a>
        </p>
				<p class="ml">> <?= __('Add Us To Your Circle', 'xtra-link') ?></p>
			</div>


		</div><!-- row -->
	</div><!-- container -->
</div><!-- Social Footer -->
<?php endif; ?>
