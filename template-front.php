<?php
/*
Template Name: Front Page
*/
get_header(); ?>

<!-- MAIN IMAGE SECTION -->
<div id="headerwrap" class="parallax-window">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <h2><?php bloginfo( 'description' ); ?></h2>
        <div class="spacer"></div>
        <a id='button' href='#welcome'><i class="fa fa-angle-down"></i></a>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /headerwrap -->

<?php
  while ( have_posts() ) : the_post();
    $link_text  = get_post_meta( get_the_ID(), '_cmb_front_link_text', true );
    $link_url  = get_post_meta( get_the_ID(), '_cmb_front_link_url', true );
    $entries = get_post_meta( get_the_ID(), '_cmb_front_add_panel', true );
?>
<!-- WELCOME SECTION -->
  <div id='welcome' class="container">
    <div class="row mt">
      <div class="<?php echo $link_url ? 'col-lg-8' : 'col-lg-12'; ?> ">
          <?php the_content(); ?>
      </div>
  <?php if($link_url ) : ?>
      <div class="col-lg-4">
        <p class="pull-right"><br><a href='<?= $link_url; ?>' type="button" class="btn btn-green" target="_new"><?= $link_text; ?></a></p>
      </div>
  <?php endif; ?>
    </div><!-- /row -->
  </div><!-- /.container -->

  <?php

  // https://codex.wordpress.org/Pagination
  // https://codex.wordpress.org/Function_Reference/next_posts_link#Usage_when_querying_the_loop_with_WP_Query
  // https://codex.wordpress.org/Function_Reference/paginate_links

  // IF STATIC FRONT PAGE
  if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
  elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
  else { $paged = 1; }


  // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
  // WP_Query arguments
  $args = array(
  	'post_type'              => 'link_port' ,
  	'nopaging'               => false,
  	'paged'          => $paged,
  	'posts_per_page'         => '15',
  	'order'                  => 'DESC',
  	'orderby'                => 'date',
  );

  // The Query
  $query = new WP_Query( $args ); ?>

  <!-- PORTFOLIO SECTION -->
  <div id="portfolio">
    <div class="container">
      <div class="row mt">
      <ul class="grid effect-2" id="grid">

<?php   // The Loop
          if ( $query->have_posts() ) {
          	while ( $query->have_posts() ) {
          		$query->the_post(); ?>

        <li>
          <a href="<?php the_permalink(); ?>" data-toggle="tooltip" data-html="true" title="<h2 class='text-primary'><?php the_title(); ?></h2>">
              <img src="<?php the_post_thumbnail_url(); ?>">
          </a>
        </li>

<?php } ?>

  <?php } else {

	echo __('No Portfolio Found', 'xtra-link');

}
// Restore original Post Data
wp_reset_postdata(); ?>

      </ul>
      </div><!-- row -->
    </div><!-- container -->
  </div><!-- portfolio -->

  <!-- SERVICES SECTION -->
  <div id="services">
    <div class="container">
      <div class="row mt">
<?php
foreach ( (array) $entries as $key => $entry ) {

$icon = $heading = $desc = '';

	if ( isset( $entry['_cmb_front_icon'] ) ) {
		$icon = esc_html( $entry['_cmb_front_icon'] );
	}

  if ( isset( $entry['_cmb_front_heading'] ) ) {
		$heading = esc_html( $entry['_cmb_front_heading'] );
	}

	if ( isset( $entry['_cmb_front_description'] ) ) {
		$desc = wpautop( $entry['_cmb_front_description'] );
	}
  ?>

      <div class="col-lg-1 centered">
        <i class="fa <?= $icon; ?>"></i>
      </div>
      <div class="col-lg-3">
        <h3><?= $heading; ?></h3>
        <?= $desc; ?>
      </div>

	<?php } ?>

    </div><!-- row -->
  </div><!-- container -->
</div><!-- services section -->


<!-- BLOG POSTS -->
<div class="container">
  <div class="row mt">
    <div class="col-lg-12">
      <h1><?= __('Recent Posts', 'xtra-link');?></h1>
    </div><!-- col-lg-12 -->
    <div class="col-lg-8">
      <p><?= __('latests thoughts about things that only matters to us.', 'xtra-link');?></p>
    </div><!-- col-lg-8-->
    <div class="col-lg-4 goright">
      <p>
          <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
            <i class="fa fa-angle-right"></i> <?php _e('Show All Posts', 'xtra-link'); ?>
          </a>
      </p>
    </div>
  </div><!-- row -->

  <div class="row mt recent-posts">

  <?php
  // WP_Query arguments
$args = array(
	'post_type'              => array( 'post' ),
	'posts_per_page'         => '3',
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
	while ( $query->have_posts() ) {
		$query->the_post(); ?>

    <div class="col-lg-4">
      <a href='<?php the_permalink(); ?>'>
       <img class="img-responsive center-block" src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
     </a>
      <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_excerpt(10); ?>
    </div>

	<?php }
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();
?>

  </div><!-- row -->
</div><!-- container -->

<?php endwhile; ?>
<?php get_footer(); ?>
