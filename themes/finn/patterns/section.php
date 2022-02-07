<?php
/**
 * Section Pattern
 *
 * @package Finn
 */

?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"5rem","bottom":"6rem"}}},"backgroundColor":"avocado","textColor":"white","layout":{"inherit":true},"templateLock":"all"} -->
<section class="wp-block-group alignfull has-white-color has-avocado-background-color has-text-color has-background" style="padding-top:5rem;padding-bottom:6rem">
	<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase"}}} -->
	<h2 class="has-text-align-center" id="market-garden-fans" style="text-transform:uppercase">Market Garden Fans</h2>
	<!-- /wp:heading -->

	<!-- wp:image {"align":"center","width":500,"sizeSlug":"full"} -->
	<div class="wp-block-image">
		<figure class="aligncenter size-full is-resized">
			<img src="<?php echo esc_attr( get_template_directory_uri() . '/assets/images/illustration.svg' ); ?>" alt="" width="500"/>
		</figure>
	</div>
	<!-- /wp:image -->

	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">Infos zu unseren Praxiskursen und dem Onlinekurs findet ihr auf unserer Market Garden Website. Auch in diesem Jahr bieten wir wieder Führungen durch unseren Gemüsegarten an.</p>
	<!-- /wp:paragraph -->

	<!-- wp:spacer {"height":35} -->
	<div style="height:35px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"olive"} -->
		<div class="wp-block-button">
			<a class="wp-block-button__link has-olive-background-color has-background">Visit Website</a>
		</div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
