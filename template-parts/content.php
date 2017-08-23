<article id="post-<?php the_ID(); ?>" <?php post_class('home-page'); ?>>

    <h2>
        <a href="<?php the_permalink(); ?>"><?php the_title();?></a>

        <small>

          <?php _e('Added', 'xtra-link')?>
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
          </a>
           |
           <i class="fa fa-calendar" aria-hidden="true"></i>
		  <span class='posted-on'> <?php _e('Posted on', 'xtra-link'); ?> <?php the_time('j F, Y'); ?></span>

        </small>

    </h2>

  <p class="lead"> <?php _e('Categories: ', 'xtra-link'); the_category( ', ' ); if(has_tag()) echo ' | ';  the_tags(); ?></p>

    <?php if ( has_post_thumbnail() ) { ?>
	  <a href="<?php the_permalink(); ?>">
    <img class='center-block img-responsive img-post' data-src="<?php the_post_thumbnail_url('large'); ?>" alt="post-<?=the_title();?>">  
    </a>
	  <br>
    <?php } else {
// Obrazek Zastępczy z http://placehold.it
      echo "<hr /><img class='img-responsive' src='http://placehold.it/900x300' alt='add-image'><hr />";
    } ?>

    <?php is_home() ? the_excerpt() : the_content(); ?>

    <hr>
</article>
