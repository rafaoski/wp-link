<?php get_header();
        global $wp_query;
        $total_results = $wp_query->found_posts; ?>

<!-- MAIN IMAGE SECTION -->
<div id="headerimg-page" class="parallax-search-page">
<br />
  <h1>
    <a class="text-uppercase" href='<?php echo get_home_url() . '/' . date('Y'); ?>'>
        <i class="fa fa-reply-all" aria-hidden="true"></i>
        <?= __('Archive', 'xtra-link');?>
    </a>
      <span class="text-danger "> / <b><?php _e( 'Search', 'xtra-link' ) ?></b></span>
  </h1>
</div><!-- /#headerimg-page -->

<br />


<br>
<!-- Page Content -->
<div class="container">

    <div class="row">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <!-- Blog Entries Column -->
        <div class="col-md-8">

        <?php else : ?>

          <div class="col-md-12">

<?php endif ?>

<h2 class='text-red'><?php echo __('Amount of Items Found: ' ,'xtra-link') . $total_results; ?></h2>
<!-- First Blog Post -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <ul>
                      <?php get_template_part('template-parts/content', 'search'); ?>
                    </ul>
            <?php endwhile; ?>

              <!-- Pager -->
                <?php the_posts_pagination( array(
                     'mid_size'  => 2,
                     'prev_text' => __( '&larr; Previous', 'xtra-link' ),
                     'next_text' => __( 'Next &rarr;', 'xtra-link' ),
                    ) );

                   else : ?>

                   <h3><?php _e( 'No Word Search: ', 'xtra-link' ) . the_search_query(); ?></h3>
                            <h4><?php echo __('Search Again: ', 'xtra-link'); ?></h4>
                                     <?php get_search_form(); ?>
            <?php endif; ?>

        </div>

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-4">
                 <?php get_sidebar(); ?>
        </div>
    <?php } ?>

    </div><!-- /.row -->
 </div><!-- /.container -->

<?php get_footer(); ?>
