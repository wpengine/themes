<?php
/**
 * Title: Box with image, text, social icons.
 * Slug: frost/author-box-dark
 * Categories: call-to-action
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|small","right":"var:preset|spacing|small","bottom":"var:preset|spacing|small","left":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--small);padding-right:var(--wp--preset--spacing--small);padding-bottom:var(--wp--preset--spacing--small);padding-left:var(--wp--preset--spacing--small)">
	<!-- wp:avatar {"size":100,"align":"center","style":{"border":{"radius":"50px"}}} /-->
	<!-- wp:post-author-name {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"10px"}}},"fontSize":"large"} /-->
	<!-- wp:post-author-biography {"textAlign":"center","style":{"spacing":{"margin":{"top":"0px"}},"typography":{"lineHeight":"1.5"}}} /-->
	<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","iconBackgroundColor":"base","iconBackgroundColorValue":"#ffffff","align":"center"} -->
	<ul class="wp-block-social-links aligncenter has-icon-color has-icon-background-color">
		<!-- wp:social-link {"url":"#","service":"x"} /-->
		<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
		<!-- wp:social-link {"url":"#","service":"instagram"} /-->
	</ul>
	<!-- /wp:social-links -->
</div>
<!-- /wp:group -->
