<?php get_header(); ?>

	<!-- MAIN IMAGE SECTION -->
<div id="headerimg-page" class="parallax-page">
  <br />
    <h1><a class="text-uppercase" href='<?php echo get_home_url(); ?>'><?= __('Home', 'xtra-link');?></a>
        <span class="text-uppercase text-danger "> / <?php the_title();?></span>
    </h1>
</div><!-- /#headerimg-page -->

<!-- Page Content -->
<div class="container">

<div class="row">
 <br />       
<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <!-- Blog Entries Column -->
        <div class="col-md-8">

        <?php else : ?>

          <div class="col-md-12">

<?php endif ?>

<!-- Loop Page -->
<?php while ( have_posts() ) : the_post();

    get_template_part('template-parts/content','page'); ?>
<!-- Pager -->
<div class="pager">
     <?php previous_post_link('<span class="prev-link">%link</span>', __('&larr; Previos','xtra-link')); ?>
     <?php next_post_link('<span class="next-link">%link</span>', __('Next &rarr;','xtra-link')); ?>
</div>

<?php 	// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif; ?>

  <?php endwhile; ?>

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
