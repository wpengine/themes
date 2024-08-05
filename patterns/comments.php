<?php
/**
 * Title: Comments section and form
 * Slug: frost/comments
 * Inserter: no
 */
?>
<!-- wp:group {"tagName":"section","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"className":"entry-comments","layout":{"type":"constrained"}} -->
<section class="wp-block-group entry-comments" style="margin-top:var(--wp--preset--spacing--medium)">
	<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
	<div class="wp-block-comments wp-block-comments-query-loop">
		<!-- wp:heading --><h2><?php echo esc_html__( 'Comments', 'frost' ); ?></h2><!-- /wp:heading -->
		<!-- wp:comments-title {"level":3} /-->
		<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
		<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--medium)">
			<!-- wp:comment-template -->
			<!-- wp:group {"tagName":"article","style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"default"}} -->
			<article class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--small)">
				<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<header class="wp-block-group">
					<!-- wp:avatar {"size":48,"style":{"border":{"radius":"24px"}}} /-->
					<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-author-name /-->
						<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex"}} -->
						<div class="wp-block-group">
							<!-- wp:comment-date /-->
							<!-- wp:comment-edit-link /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
				</header>
				<!-- /wp:group -->
				<!-- wp:comment-content /-->
				<!-- wp:comment-reply-link /-->
			</article>
			<!-- /wp:group -->
			<!-- /wp:comment-template -->
		</div>
		<!-- /wp:group -->
		<!-- wp:comments-pagination -->
		<!-- wp:comments-pagination-previous /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next /-->
		<!-- /wp:comments-pagination -->
		<!-- wp:post-comments-form /-->
	</div>
	<!-- /wp:comments -->
</section>
<!-- /wp:group -->
