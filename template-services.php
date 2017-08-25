<?php get_header();
/*
Template Name: Link Services
*/
while ( have_posts() ) : the_post();

    $service_1  = get_post_meta( get_the_ID(), '_services_1_txt', true );
    $service_2  = get_post_meta( get_the_ID(), '_services_2_txt', true );
    $service_3  = get_post_meta( get_the_ID(), '_services_3_txt', true );

$service_4_img = get_post_meta( get_the_ID(), '_services_4_img', 1 );

$process  = get_post_meta( get_the_ID(), '_services_5_add_process', true );

$panel  = get_post_meta( get_the_ID(), '_services_6_add_panel', true );

?>

<!-- MAIN IMAGE SECTION -->
<div id="serviceswrap" class="parallax-services">
    <div class="container">
        <h1>
            <a class="text-uppercase" href='<?php echo get_home_url(); ?>'>
              <i class="fa fa-reply-all" aria-hidden="true"></i>
              <?= __('Home', 'xtra-link');?>
            </a>
	     <span class="text-uppercase text-danger "> / <?php the_title();?></span>
        </h1>
        
       <hr />

        <div class="row">
            
            <div class="service-cont col-lg-8 col-lg-offset-2">
                
                <h2 class='<?php echo get_the_content() ? 'marg-top' : '';?>'><?=$service_1;?><br/>
                        <?=$service_2;?>
                </h2>

                <?php the_content();?>
                
            </div><!-- /.service-cont -->
            
        </div><!-- row -->
        
    </div><!-- /container -->
</div><!-- /headerwrap -->

<!-- PROCESS SECTION -->
<div class="container">
    <div class="cont-proc mt">
        
	<h1><?=$service_3;?></h1>
        
	    <hr>

<ul class='process effect-2' id="process">

<?php
	foreach ( (array) $process  as $key => $entry ) {

	$heading = $content = $img = '';

		if ( isset( $entry['_services_heading'] ) ) {
			$heading = esc_html( $entry['_services_heading'] );
		}

	if ( isset( $entry['_services_content'] ) ) {
			$content  = esc_html( $entry['_services_content'] );
		}

		if ( isset( $entry['_services_img'] ) ) {
			$img = $entry['_services_img'];
	} ?>

	<li>

		<div class='row'>

			<div class='col-lg-8'>
                            <h3><b><?=$heading;?></b></h3>
                                <p><?=$content;?></p>
                                    <br>
			</div>

			<div class='col-lg-4'>
                            <img class="img-responsive"  src="<?=$img;?>" alt="">
			</div>

		</div>

	</li>

<?php } ?>

</ul>
                          
     </div><!-- cont-proc mt -->
</div><!-- /.container -->

<!-- SERVICES SECTION -->
<div id="services">
    <div class="container">
        <div class="row mt">
<?php
	foreach ( (array) $panel as $key => $entry ) {

	$icon = $heading = $description = '';

		if ( isset( $entry['_services_icon'] ) ) {
			$icon = esc_html( $entry['_services_icon'] );
		}

	if ( isset( $entry['_services_heading'] ) ) {
			$heading  = esc_html( $entry['_services_heading'] );
		}

		if ( isset( $entry['_services_description'] ) ) {
			$description  = esc_html( $entry['_services_description'] );
	} ?>
                    <!-- Srvice 1 -->
                <div class="col-lg-1 centered">
                        <i class="fa <?=$icon;?>"></i>
                </div>
                        
                <div class="col-lg-3">
                        <h3><?=$heading;?></h3>
                        <p><?=$description;?></p>
                </div>
<?php } ?>

        </div><!-- row -->
    </div><!-- container -->
</div><!-- services section -->
<?php endwhile;
         get_footer(); ?>
