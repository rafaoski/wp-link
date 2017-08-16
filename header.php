<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<!-- Menu -->
	<nav class="menu" id="theMenu">
		<div class="menu-wrap">
			<h1 class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>
			<i class="fa fa-arrow-right menu-close"></i>

			<div class="logo">
				<?php the_custom_logo(); ?>
			</div>

<form role="search" method="get" class="my-form" action="<?php echo home_url( '/' ); ?>">

    <input type="text" class="form-control"
       placeholder="<?php _e( 'Search …', 'xtra-link' ) ?>"
       value="<?php echo get_search_query() ?>" name="s"
       title="<?php _e( 'Search for:', 'xtra-link' ) ?>" required/>
	   
</form>

        <?php echo strip_tags(xtra_nav(), '<a>'); ?>

<?php
 if ( true == get_theme_mod( 'on_of_menu', true ) ) :
// Default values for 'my_setting' theme mod.
$defaults = array(
		array(
			'icon' => esc_attr__( 'fa-facebook', 'xtra-link' ),
			'link_url'  => 'https://pl-pl.facebook.com/'
		),
		array(
			'icon' => esc_attr__( 'fa-twitter', 'xtra-link' ),
			'link_url'  => 'https://twitter.com/?lang=pl'
		),
        array(
			'icon' => esc_attr__( 'fa-dribbble', 'xtra-link' ),
			'link_url'  => 'https://dribbble.com/'
		),
		array(
			'icon' => esc_attr__( 'fa-envelope', 'xtra-link' ),
			'link_url'  => 'yourmail@gmail.com'
		),
);

// Theme_mod settings to check.
$settings = get_theme_mod( 'rep_social', $defaults ); ?>

	<div class="menu-links">
		<?php foreach( $settings as $setting ) : ?>

			<?php if (strpos($setting['link_url'], '@') !== false)  : ?>
				<a href="mailto:<?= $setting['link_url']; ?>" data-toggle="tooltip" title="<?= $setting['link_url']; ?>">
			<?php else : ?>
				<a href="<?= $setting['link_url']; ?>" target="_new">
			<?php endif; ?>
				<i class="fa <?= $setting['icon']; ?>"></i>
				</a>

		<?php endforeach; ?>
	</div>

<?php endif; ?>

</div>
		<!-- Menu button -->
		<div id="menuToggle"><i class="fa fa-bars"></i></div>
	</nav>
