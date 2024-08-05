<?php
/**
 * Title: Section with image, text, buttons.
 * Slug: frost/hero-two-columns
 * Categories: featured
 */
?>
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">
	<!-- wp:columns {"verticalAlignment":"center","className":"is-style-columns-reverse"} -->
	<div class="wp-block-columns are-vertically-aligned-center is-style-columns-reverse">
		<!-- wp:column {"verticalAlignment":"center","width":""} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"layout":{"type":"constrained","wideSize":"480px","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"anchor":"text-on-left-image-on-right","className":"wp-block-heading","fontSize":"x-large"} -->
				<h2 class="wp-block-heading has-x-large-font-size" id="text-on-left-image-on-right"><?php echo esc_html__( 'Welcome to Frost', 'frost' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'With its clean, minimal design and powerful feature set, Frost enables agencies to build stylish and sophisticated WordPress websites.', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
					<div class="wp-block-buttons">
					<!-- wp:button {"className":"is-style-fill"} -->
					<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', 'frost' ); ?></a></div>
					<!-- /wp:button -->
					<!-- wp:button {"className":"is-style-outline"} -->
					<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":""} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_1200x1200.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
