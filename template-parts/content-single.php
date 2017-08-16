<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
    <h2>
 
        <small>

          <?php _e('Added', 'xtra-link')?>
          <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
            <?php the_author(); ?>
          </a>
           |
          <span class="glyphicon glyphicon-time"></span>
		  <span class='posted-on'> <?php _e('Posted on: ', 'xtra-link');?>  <?php the_time('j F, Y'); ?></span>
		  
        </small>

    </h2>

  <p class="lead"> <?php _e('Categories: ', 'xtra-link'); the_category( ', ' ); if(has_tag()) echo ' | ';  the_tags(); ?></p>

        <?php if ( has_post_thumbnail() ) :?>
                   <a href="<?php the_post_thumbnail_url(); ?>">
                         <?php the_post_thumbnail('full',array('class'=>'center-block img-responsive')); ?>
                  </a>
       <?php endif; ?>

        <?php the_content(); ?>
        <hr>
    </article>
<?php edit_post_link(); ?>
