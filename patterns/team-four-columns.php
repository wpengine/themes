<?php
/**
 * Title: Team with image, text, link.
 * Slug: frost/team-four-columns
 * Categories: featured
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns -->
	<div class="wp-block-columns">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" width="200" height="200"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","level":3,"anchor":"member-name-1","fontSize":"medium"} -->
			<h3 class="wp-block-heading has-text-align-center has-medium-font-size" id="member-name-1"><?php echo esc_html__( 'Member Name', 'frost' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
			<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'I’m a WordPress developer and enjoy building websites.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'View Profile', 'frost' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" width="200" height="200"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","level":3,"anchor":"member-name-1","fontSize":"medium"} -->
			<h3 class="wp-block-heading has-text-align-center has-medium-font-size" id="member-name-1"><?php echo esc_html__( 'Member Name', 'frost' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
			<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'I’m a WordPress developer and enjoy building websites.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'View Profile', 'frost' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" width="200" height="200"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","level":3,"anchor":"member-name-1","fontSize":"medium"} -->
			<h3 class="wp-block-heading has-text-align-center has-medium-font-size" id="member-name-1"><?php echo esc_html__( 'Member Name', 'frost' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
			<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'I’m a WordPress developer and enjoy building websites.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'View Profile', 'frost' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"align":"center","width":200,"height":200,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_800x800.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" width="200" height="200"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"textAlign":"center","level":3,"anchor":"member-name-1","fontSize":"medium"} -->
			<h3 class="wp-block-heading has-text-align-center has-medium-font-size" id="member-name-1"><?php echo esc_html__( 'Member Name', 'frost' ); ?></h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
			<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'I’m a WordPress developer and enjoy building websites.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="#" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'View Profile', 'frost' ); ?></a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
