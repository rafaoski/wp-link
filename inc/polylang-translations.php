<?php

// KIRKI CUSTOMIZER FRONT SECTION

	// FOOTER template-parts/part-action.php
    $call_1 = get_theme_mod( 'call_1', esc_attr__( 'THIS IS A CALL TO ACTION AREA', 'xtra-link' ));
    $call_2 = get_theme_mod( 'call_2', __( '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>', 'xtra-link' ));
    $call_3 = get_theme_mod( 'call_3', __('Button Action', 'xtra-link'));
    $call_4 = get_theme_mod( 'call_4', 'https://xtra-strona.pl/');

    // FOOTER template-parts/part-action.php
    $stay_1 = get_theme_mod( 'stay_1', esc_attr__( 'Stay Connected', 'xtra-link' ));
	$stay_2 = get_theme_mod( 'stay_2', __( '<p>Join us on our social networks for all the latest updates, product/service announcements and more.</p>', 'xtra-link' ));

    // FOOTER template-parts/part-social.php
    $foot_social_1 = get_theme_mod( 'footer_social_1', 'https://www.facebook.com/');
    $foot_social_2 = get_theme_mod( 'footer_social_2', 'https://twitter.com');
    $foot_social_3 = get_theme_mod( 'footer_social_3', 'https://plus.google.com');

    // FOOTER template-parts/part-contact.php
    $foot_map = get_theme_mod( 'my_fooot_map' );
    
	$info_1 = get_theme_mod( 'info_1', esc_attr__( 'Minsk - Head Office', 'xtra-link' ));
	$info_2 = get_theme_mod( 'info_2', __( '<p>Business Center, SomeAve 987,<br/>Minsk, Belarus.</p>', 'xtra-link' ));
	$info_3 = get_theme_mod( 'info_3', esc_attr__( '+55 4839-4390', 'xtra-link' ));
	$info_4 = get_theme_mod( 'info_4', esc_attr__( '+55 4333-4345', 'xtra-link' ));
	$info_5 = get_theme_mod( 'info_5', esc_attr__( 'hello@linkagency.com', 'xtra-link' ));
	$info_6 = get_theme_mod( 'info_6', __( '<p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English.</p>', 'xtra-link' ));

// KIRKI BLOG HEADING index.php
$txt_blog_1 = get_theme_mod( 'img_blog_txt', __('Welcome To My Blog','xtra-link'));
$txt_blog_2 = get_theme_mod( 'img_blog_txtarea', __('See My Latest Posts','xtra-link'));


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

    // KIRKI BLOG HEADING index.php
    pll_register_string('blog-1', $txt_blog_1,  'Heading Blog 1');
    pll_register_string('blog-2', $txt_blog_2,  'Heading Blog 2');
}


