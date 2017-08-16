<article id="post-<?php the_ID(); ?>" <?php post_class('tag-page'); ?>>
    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>

        <small>

          <?php _e('Added', 'xtra-link')?>
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
          </a>
           |
          <span class="glyphicon glyphicon-time"></span>
		  <span class='posted-on'> <?= __('Posted on', 'xtra-link'); ?> <?php the_time('j F, Y'); ?></span>
		  
        </small>

    </h2>

  <p class="lead"> <?php _e('Categories: ', 'xtra-link'); the_category( ', ' ); if(has_tag()) echo ' | ';  the_tags(); ?></p>


    <?php if ( has_post_thumbnail() ) { ?>

      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large',array('class'=>'center-block img-responsive')); ?></a>
    <?php } else {
// Obrazek Zastępczy z http://placehold.it
      echo "<hr /><img class='center-block img-responsive' src='http://placehold.it/900x300' alt='add-image'><hr />";
    } ?>

    <?php the_excerpt(); ?>
    <hr>
</article>
