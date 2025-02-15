<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

global $wp_embed;

$iframe = $wp_embed->run_shortcode( '[embed  width="560" height="315"]' . trim( $atts['url'] ) . '[/embed]' );
if ( $atts['image'] != '' ) {
?>
<div id="namaste-video-image" style="border: <?php echo wp_kses_post($atts['border']); ?>;">
	<div class="video-image-holder" style="background-image: url(<?php echo esc_url($atts['image']['url']); ?>);"></div>
	<div class="clearfix"></div>
</div>
<div id="the-namaste-video" style="border: <?php echo wp_kses_post($atts['border']); ?>; display: none;">
<?php } else { ?>
<div id="the-namaste-video" style="border: <?php echo wp_kses_post($atts['border']); ?>;">
<?php } ?>
	<?php echo do_shortcode( $iframe ); ?>
    <div class="clearfix"></div>
</div>