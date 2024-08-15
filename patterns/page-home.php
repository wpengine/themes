<?php
/**
 * Title: Sample home page.
 * Slug: frost/page-home
 * Categories: frost-page
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"30px","bottom":"var:preset|spacing|x-large","left":"30px","top":"70px"},"margin":{"top":"0px"},"blockGap":"10px"}},"className":"welcome","layout":{"type":"constrained","wideSize":"800px"}} -->
<div class="wp-block-group alignfull welcome" style="margin-top:0px;padding-top:70px;padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:heading {"textAlign":"center","anchor":"we-reimagine-how-to-build-wordpress-websites","style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"bottom":"0px"}}},"className":"wp-block-heading","fontSize":"max-72"} -->
	<h2 class="wp-block-heading has-text-align-center has-max-72-font-size" style="margin-bottom:0px;letter-spacing:-1px"><?php echo esc_html__( 'Experience the next generation of WordPress.', 'frost' ); ?></h2>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size"><?php echo esc_html__( 'Frost is the ultimate WordPress theme for website builders.', 'frost' ); ?></p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"30px"}}}} -->
	<div class="wp-block-buttons" style="margin-top:30px">
		<!-- wp:button {"fontSize":"small"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Get Started', 'frost' ); ?></a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline-background is-style-outline","fontSize":"small"} -->
		<div class="wp-block-button has-custom-font-size is-style-outline-background is-style-outline has-small-font-size"><a class="wp-block-button__link wp-element-button" href="#"><?php echo esc_html__( 'Learn More', 'frost' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"30px","left":"30px"},"margin":{"top":"0"}}},"backgroundColor":"contrast","textColor":"base","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-base-color has-contrast-background-color has-text-color has-background" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:columns {"verticalAlignment":"center","align":"wide","className":"is-style-columns-reverse"} -->
	<div class="wp-block-columns alignwide are-vertically-aligned-center is-style-columns-reverse">
		<!-- wp:column {"verticalAlignment":"center","width":""} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:group {"layout":{"type":"constrained","wideSize":"480px","justifyContent":"left"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"anchor":"text-on-left-image-on-right","className":"wp-block-heading","fontSize":"max-36"} -->
				<h2 class="wp-block-heading has-max-36-font-size" id="text-on-left-image-on-right"><?php echo esc_html__( 'Build with Frost', 'frost' ); ?></h2>
				<!-- /wp:heading -->
				<!-- wp:paragraph -->
				<p><?php echo esc_html__( 'Frost is a powerful WordPress theme created for agencies and professional website builders. With its clean, minimal design, Frost provides the perfect canvas for stylish and sophisticated websites.', 'frost' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textColor":"base"} -->
					<div class="wp-block-button"><a class="wp-block-button__link has-base-color has-text-color wp-element-button"><?php echo esc_html__( 'Get Started', 'frost' ); ?> →</a></div>
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
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_white_1200x1200.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
<!-- wp:group {"align":"full","anchor":"features","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","right":"30px","left":"30px"},"margin":{"top":"0"},"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"960px"}} -->
<div class="wp-block-group alignfull" id="features" style="margin-top:0;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
	<!-- wp:group {"style":{"spacing":{"blockGap":"10px","padding":{"bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained","wideSize":"720px"}} -->
	<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:heading {"textAlign":"center","anchor":"text-on-left-image-on-right","style":{"typography":{"letterSpacing":"-1px"}},"className":"wp-block-heading","fontSize":"max-60"} -->
		<h2 class="wp-block-heading has-text-align-center has-max-60-font-size" id="text-on-left-image-on-right" style="letter-spacing:-1px"><?php echo esc_html__( 'Experience the next generation of WordPress.', 'frost' ); ?></h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.5"}}} -->
		<p class="has-text-align-center" style="line-height:1.5"><?php echo esc_html__( 'Frost is the ultimate WordPress theme for website builders.', 'frost' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns are-vertically-aligned-center" style="margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_1200x1200.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Fresh patterns. Endless Layouts.', 'frost' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Frost is a masterpiece of design and functionality. It features a range of valuable elements, including hero and portfolio sections, prominent call-to-action buttons, and customer testimonials.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Get Started', 'frost' ); ?> →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"},"margin":{"bottom":"var:preset|spacing|large"}}},"className":"is-style-columns-reverse"} -->
	<div class="wp-block-columns is-style-columns-reverse" style="margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'One theme. Infinite designs.', 'frost' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Frost utilizes the potential of the editor to create link pages, serve as a powerful tool for building relationships with clients, sharing valuable content, and boosting social media engagement.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Get Started', 'frost' ); ?> →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_1200x1200.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/sample_1200x1200.jpg'; ?>" alt="<?php echo esc_attr__( 'Sample Image', 'frost' ); ?>"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading {"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html__( 'Stylish websites. Simply made.', 'frost' ); ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p><?php echo esc_html__( 'Whether you’re building a website for your business, personal brand, or creative project, Frost is the perfect solution for anyone looking to launch a website quickly and efficiently.', 'frost' ); ?></p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"backgroundColor":"primary","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}}}} -->
				<div class="wp-block-button"><a class="wp-block-button__link has-primary-background-color has-background wp-element-button" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--medium)"><?php echo esc_html__( 'Get Started', 'frost' ); ?> →</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
