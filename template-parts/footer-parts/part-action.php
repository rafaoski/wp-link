<?php if ( true == get_theme_mod( 'on_of_2', true ) ) :

// Show Global Get Theme Mod from file inc/polylang-translations
 global $call_1, $call_2, $call_3, $call_4;
	
	//TRANSLATE STRING WITH POLYLANG
		if (function_exists('pll_the_languages')) {
	
			        $call_1 = pll__($call_1);
					$call_2 = pll__($call_2);
					$call_3 = pll__($call_3);
					$call_4 = pll__($call_4);
		} 
	
?>

	<!-- CALL TO ACTION -->
	<div id="call">
		<div class="container">
			<div class="row">

				<h3><?= esc_html($call_1);?></h3>

				<div class="col-lg-8 col-lg-offset-2">

					<?= $call_2;?>

					<p>
            <a href='<?= esc_url($call_4);?>' type="button" class="btn btn-green btn-lg" target='_new'>
              <?= esc_html($call_3);?>
            </a>
          </p>

				</div>
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- Call to action -->
<?php endif; ?>
