<?php if ( true == get_theme_mod( 'on_of_2', true ) ) :
    $call_1 = get_theme_mod( 'call_1', esc_attr__( 'THIS IS A CALL TO ACTION AREA', 'xtra-link' ));
    $call_2 = get_theme_mod( 'call_2', __( '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', 'xtra-link' ));
    $call_3 = get_theme_mod( 'call_3', __('Button Action', 'xtra-link'));
    $call_4 = get_theme_mod( 'call_4', 'https://xtra-strona.pl/');
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
