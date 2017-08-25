<?php if ( true == get_theme_mod( 'on_of_3', true ) ) :
// Get Global Get Theme Mod from file inc/polylang-translations.php
   global $stay_1, $stay_2;

//TRANSLATE STRING WITH POLYLANG
if (function_exists('pll_the_languages')) {
    $stay_1 = pll__($stay_1);
	$stay_2 = pll__($stay_2);
} 
?>

<div id='connect' class="connect-content container mt text-center">

    <h1 class='text-light'><?= esc_html($stay_1); ?></h1>
         <?= $stay_2; ?>
    <br>
    
</div><!-- container -->

<?php endif; ?>
