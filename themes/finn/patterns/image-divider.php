<?php
/**
 * Image Divider Pattern
 *
 * @package Finn
 */

?>
<!-- wp:cover {"url":"<?php echo esc_attr( get_template_directory_uri() . '/assets/images/DSC_0929.jpg' ); ?>","dimRatio":0,"minHeight":550,"contentPosition":"bottom left","align":"full"} -->
<div class="wp-block-cover alignfull has-custom-content-position is-position-bottom-left" style="min-height:550px">
	<span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_attr( get_template_directory_uri() . '/assets/images/DSC_0929.jpg' ); ?>" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:paragraph {"align":"center","placeholder":"Write title…","fontSize":"medium"} -->
		<p class="has-text-align-center has-medium-font-size">Tomaten Tunnel</p>
		<!-- /wp:paragraph -->
	</div>
</div>
<!-- /wp:cover -->
