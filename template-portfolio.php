<?php get_header();
/*
Template Name: Link Portfolio
*/

  $txt_p_1  = get_post_meta( get_the_ID(), '_port_subtittle_port', true );
  $txt_p_2  = get_post_meta( get_the_ID(), '_port_txt_ar_1', true );
  $txt_p_3  = get_post_meta( get_the_ID(), '_port_txt_ar_2', true );

  $href_1  = get_post_meta( get_the_ID(), '_port_href_1', true );
  $href_2  = get_post_meta( get_the_ID(), '_port_href_2', true );

if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
else { $paged = 1; }

$args = array(
  'post_type'              => 'link_port' ,
  'nopaging'               => false,
  'paged'          => $paged,
  'posts_per_page'         => '9',
  'order'                  => 'DESC',
  'orderby'                => 'date',
);

// The Query
$query = new WP_Query( $args );
?>
<!-- MAIN IMAGE SECTION -->
<div class="parallax-portfolio" id="portwrap">
  <div class="container">

  <h1>
    <a class="text-uppercase" href='<?php echo get_home_url(); ?>'>
      <i class="fa fa-reply-all" aria-hidden="true"></i>
      <?= __('Home', 'xtra-link');?>
    </a>
	     <span class="text-uppercase text-danger "> / <?php the_title();?></span>
  </h1>
  <hr />

    <div class="row">
       <?php while ( have_posts() ) : the_post(); ?>
      <div class="col-lg-8 col-lg-offset-2 port-cont">
          <h2 class='<?php echo get_the_content() ? 'marg-top' : '';?>'>
            <?= $txt_p_1; ?>
          </h2>
            <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
    </div><!-- row -->
  </div><!-- /container -->
</div><!-- /portrwrap -->

<!-- WELCOME SECTION -->
  <div class="container">

    <div class="row mt">

      <div class="<?php echo $href_2 ? 'col-lg-8' : 'col-lg-12';?>">
        <h1><?= $txt_p_2; ?></h1>
        <p><?= $txt_p_3; ?></p>
      </div>

<?php if($href_2) : ?>
      <div class="col-lg-4">
        <p class="pull-right">
          <br>
            <a href='<?= $href_1; ?>' type="button" class="btn btn-green" target='_new'>
              <?= $href_2; ?>
            </a>
          </p>
      </div>
<?php endif; ?>
    </div><!-- /row -->
  </div><!-- /.container -->

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
        </ul>

    <nav aria-label="Page navigation">
      <ul class="pagination">
          <?php  pag_link($query,$paged);?>
      </ul>
    </nav>
          <?php } else {

        	echo __('No Post Found', 'xtra-link');

        }
        // Restore original Post Data
        wp_reset_postdata(); ?>

      </div><!-- row -->
    </div><!-- container -->
  </div><!-- portfolio -->
<?php get_footer(); ?>
