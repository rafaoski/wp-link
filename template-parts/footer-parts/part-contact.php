<?php
$class='foot-cont';
if ( true == get_theme_mod( 'on_of_5', true ) ) :
// Show Global Get Theme Mod from file inc/polylang-translations
global $foot_map;

$class='col-lg-4';

//TRANSLATE STRING WITH POLYLANG
if (function_exists('pll_the_languages')) {
	$foot_map = pll__($foot_map);	
}

if($foot_map != '') {
  $iframe = $foot_map;
} else {
  $iframe = '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23985.736920190724!2d16.20386883668067!3d50.8091178956222!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470e56ac73618d49%3A0xfed922a43f3db50b!2sWa%C5%82brzych!5e0!3m2!1spl!2spl!4v1501185042188" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>';
} ?>
        <div class="<?php echo get_theme_mod( 'on_of_6', false ) ? 'col-lg-8' : 'col-lg-12 rm-padd'; ?>">
                <div id="mapwrap">
                    <?= $iframe; ?>
                </div>
        </div><!--col-lg-8-->

<?php endif; ?>

<?php if ( true == get_theme_mod( 'on_of_6', true ) ) :
// Show Global Get Theme Mod from file inc/polylang-translations
global $info_1, $info_2, $info_3, $info_4, $info_5, $info_6;

//TRANSLATE STRING WITH POLYLANG
if (function_exists('pll_the_languages')) {

  $info_1 = pll__($info_1);
  $info_2 = pll__($info_2);
  $info_3 = pll__($info_3);
  $info_4 = pll__($info_4);
  $info_5 = pll__($info_5);
  $info_6 = pll__($info_6);

} ?>

<div class="<?= $class; ?>">
    <h4><?php _e('ADDRESS', 'xtra-link');?><br/><?= $info_1; ?></h4>

    <br>

        <?= $info_2; ?>

            <p>
                <?php _e('P', 'xtra-link');?>: <?= $info_3; ?><br/>
                <?php _e('F', 'xtra-link');?>: <?= $info_4; ?><br/>
                <?php _e('E', 'xtra-link');?>: <a href="mailto:#"><?= $info_5; ?></a>
            </p>

                 <?= $info_6; ?>
</div><!--col-lg-4-->
<?php endif; ?>
