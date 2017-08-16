<?php get_header();?>
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

<select class='well' name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Select Day', 'xtra-link' ) ); ?></option>
  <?php wp_get_archives( array( 'type' => 'daily', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</select>

<select class='well' name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Select Month', 'xtra-link' ) ); ?></option>
  <?php wp_get_archives( array( 'type' => 'monthly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</select>

<select class='well' name="archive-dropdown" onchange="document.location.href=this.options[this.selectedIndex].value;">
  <option value=""><?php echo esc_attr( __( 'Select Year', 'xtra-link' ) ); ?></option>
  <?php wp_get_archives( array( 'type' => 'yearly', 'format' => 'option', 'show_post_count' => 1 ) ); ?>
</select>

          <!-- First Blog Post -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();

                 get_template_part('template-parts/content', 'archive');

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
