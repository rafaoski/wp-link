<?php get_header(); ?>

<div class='container-fluid'>
	<h2 class="alert alert-danger">
		<?php _e('Error 404 No specified page !!!', 'xtra-link'); ?>
	</h2>
</div>

<!-- Page Content -->
<div class="container">

    <div class="row">

<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
        <!-- Blog Entries Column -->
        <div class="col-md-8">

        <?php else : ?>

          <div class="col-md-12">

<?php endif ?>

  <h2><?php _e('Maybe Here Something You Will Find:', 'xtra-link'); ?></h2>

<?php get_search_form(); ?>

<h2><?php _e('Or look in the Pages Archives:', 'xtra-link'); ?></h2>

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
