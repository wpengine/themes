<?php
/**
 * Title: Header with site title, navigation.
 * Slug: frost/header-default-dark
 * Categories: header
 * Block Types: core/template-part/header
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"30px","bottom":"30px"},"margin":{"top":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:30px;padding-bottom:30px">
	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} /-->
		<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true}} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
