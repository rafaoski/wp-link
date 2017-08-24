<?php

// KIRKI CUSTOMIZER FRONT SECTION

	// FOOTER template-parts/part-action.php
		$call_1 = get_theme_mod( 'call_1');
		$call_2 = get_theme_mod( 'call_2');
	    $call_3 = get_theme_mod( 'call_3');
        $call_4 = get_theme_mod( 'call_4');

    // FOOTER template-parts/part-action.php
        $stay_1 = get_theme_mod( 'stay_1');
        $stay_2 = get_theme_mod( 'stay_2'); 

    // FOOTER template-parts/part-social.php
        $foot_social_1 = get_theme_mod( 'footer_social_1');
        $foot_social_2 = get_theme_mod( 'footer_social_2');
        $foot_social_3 = get_theme_mod( 'footer_social_3');

    // FOOTER template-parts/part-contact.php
    $foot_map = get_theme_mod( 'my_fooot_map' );
    
        $info_1 = get_theme_mod( 'info_1');
        $info_2 = get_theme_mod( 'info_2');
        $info_3 = get_theme_mod( 'info_3');
        $info_4 = get_theme_mod( 'info_4');
        $info_5 = get_theme_mod( 'info_5');
        $info_6 = get_theme_mod( 'info_6');


//TRANSLATE STRING WITH POLYLANG
if (function_exists('pll_the_languages')) {

// FOOTER template-parts/part-action.php
    pll_register_string('call-1', $call_1,  'Call To Action 1');
    pll_register_string('call-2', $call_2, 'Call To Action 2');
    pll_register_string('call-3', $call_3, 'Call To Action 3');
    pll_register_string('call-4', $call_4, 'Call To Action 4');

 // FOOTER template-parts/part-connect.php
    pll_register_string('stay-1', $stay_1, 'Stay Connected 1');
    pll_register_string('stay-2', $stay_2, 'Stay Connected 2');

// FOOTER template-parts/part-social.php
    pll_register_string('foot-social-1', $foot_social_1, 'URL FACEBOOK');
    pll_register_string('foot-social-1', $foot_social_2, 'URL TWITTER');
    pll_register_string('foot-social-1', $foot_social_3, 'URL GOOGLE +');

// FOOTER template-parts/part-contact.php
pll_register_string('info-1', $foot_map,  'Iframe Google Map');

    pll_register_string('info-1', $info_1,  'Info 1');
    pll_register_string('info-2', $info_2,  'Info 2');
    pll_register_string('info-3', $info_3,  'Info 3');
    pll_register_string('info-4', $info_4,  'Info 4');
    pll_register_string('info-5', $info_5,  'Info 5');
    pll_register_string('info-6', $info_6,  'Info 6');

}




