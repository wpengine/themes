<?php
/**
 * Title: Footer with heading, text, button.
 * Slug: frost/footer-stacked-dark
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|small","right":"30px","left":"30px"},"margin":{"top":"0px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--small);padding-left:30px">
	<!-- wp:heading {"textAlign":"center","anchor":"let-s-connect","style":{"spacing":{"margin":{"bottom":"20px"}}},"className":"wp-block-heading","fontSize":"max-48"} -->
	<h2 class="wp-block-heading has-text-align-center has-max-48-font-size" id="let-s-connect" style="margin-bottom:20px"><?php echo esc_html__( 'Let’s Connect', 'frost' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><?php echo esc_html__( 'With its clean, minimal design and powerful feature set, Frost enables agencies to build stylish and sophisticated WordPress websites.', 'frost' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Get in Touch', 'frost' ); ?> →</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html__( 'Your Company LLC', 'frost' ); ?> · <a href="#"><?php echo esc_html__( 'Contact Us', 'frost' ); ?></a></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
