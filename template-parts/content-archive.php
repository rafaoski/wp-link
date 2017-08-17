<div id="post-<?php the_ID(); ?>" class="archive-content panel panel-default">

<div class="panel-heading">

    <h4> 

      <b><?php _e('Entry Name:', 'xtra-link'); ?></b>
      
      <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>  
      </a> 

      <span class='small'>
          <b> 
            <i class="fa fa-user-secret" aria-hidden="true"></i>  
              <?php the_author(); ?>  
          </b> <b>|</b>

          <b>
                <i class="fa fa-calendar" aria-hidden="true"></i>
                <?php echo the_time('j F, Y'); ?>
            </b> 
<hr />
           <p class="lead">
           <?php if (has_category()) : ?>
            <i class="fa fa-sitemap" aria-hidden="true"></i>
              <?php the_category( ', ' );?>
          <?php endif; ?>
               <?php if(has_tag()) echo " | ";  the_tags( "<i class='fa fa-tags' aria-hidden='true'></i>  ", ', ', '<br />'); ?>
          </p>
      </span>

    </h4>

</div>

    <div class="panel-body">
          <?php the_excerpt(); ?>
    </div>

</div>
