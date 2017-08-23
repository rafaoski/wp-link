<?php get_header();?>

<!-- MAIN IMAGE SECTION -->
<div id="headerimg-page" class="parallax-tag-page">
<br />
  <h1><a class="text-uppercase" href='<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>'>
    <i class="fa fa-reply-all" aria-hidden="true"></i>
    <?= __('Blog', 'xtra-link');?>
  </a>
      <span class="text-danger "> / <?php single_tag_title(); ?> </span>
  </h1>

<ul class='tag-cloud'>
   <li><?php wp_tag_cloud(array('number' => 12, 'order' => 'RAND')); ?></li>
</ul>

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

          <!-- First Blog Post -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                 get_template_part('template-parts/content', 'tag');

              endwhile; ?>

              <!-- Pager -->
                <?php the_posts_pagination( array(
                     'mid_size'  => 2,
                     'prev_text' => __( '&larr; Previous', 'xtra-link' ),
                     'next_text' => __( 'Next &rarr;', 'xtra-link' ),
                    ) );

                   else : ?>

            	<h3><?php _e( 'Sorry, no posts matched the criteria.','xtra-link' ); ?></h3>

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
