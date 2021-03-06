<?php

 if ( true == get_theme_mod( 'on_of_l', true ) ) :

    $log_settings = get_theme_mod( 'logos_setting'); ?>

<!-- CLIENTS LOGOS -->
<div id="lg">
  <div class="container">
    <div class="row  text-center logos-bar">
<?php

 if($log_settings) :
    $i = 0;
    foreach( $log_settings as $setting ) :
    $i++;
    
        $log_img = $setting['logos_img'];
        $img_log = esc_url(wp_get_attachment_url( $setting['logos_img'] ));
?>

<div class="col-lg-2">
    <a href="<?php echo $setting['link_url'] ? $setting['link_url'] : '#'; ?>">
        <img class='img-responsive' src="<?php echo $img_log ? $img_log : $log_img; ?>" alt="<?= __('logo number-') . "$i"; ?>">
    </a>
</div>

<?php endforeach; ?>

<?php endif; ?>

    </div><!-- row -->
  </div><!-- container -->
</div><!-- dg -->

<?php endif; ?>
