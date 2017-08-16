<div id="post-<?php the_ID(); ?>" class="archive-content panel panel-default">
  <div class="panel-heading">
    <b><?php _e('Entry Name:', 'xtra-link'); ?></b> <a href="<?php the_permalink(); ?>">
      <?php the_title(); ?>
    </a>
  </div>
    <div class="panel-body">
      <b><?php _e('Added: ', 'xtra-link'); ?></b> <?php echo the_time('j F, Y'); ?>
    </div>
</div>
