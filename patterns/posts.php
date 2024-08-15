<?php
/**
 * Title: List of posts in one column.
 * Slug: frost/posts
 * Categories: posts
 * Block Types: core/query
 */
?>
<!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template -->
		<!-- wp:group {"tagName":"article","layout":{"type":"default"}} -->
		<article class="wp-block-group">
			<!-- wp:group {"tagName":"header","style":{"spacing":{"blockGap":"10px"}},"className":"entry-header"} -->
			<header class="wp-block-group entry-header">
				<!-- wp:post-title {"isLink":true} /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"5px","margin":{"bottom":"30px"}},"typography":{"fontSize":"18px"}},"className":"post-meta","layout":{"type":"flex"}} -->
				<div class="wp-block-group post-meta" style="margin-bottom:30px;font-size:18px">
					<!-- wp:post-date /-->
					<!-- wp:paragraph -->
					<p>·</p>
					<!-- /wp:paragraph -->
					<!-- wp:post-author-name {"isLink":true} /-->
				</div>
				<!-- /wp:group -->
			</header>
			<!-- /wp:group -->
			<!-- wp:post-excerpt {"moreText":"Read More"} /-->
		</article>
		<!-- /wp:group -->
	<!-- /wp:post-template -->
	<!-- wp:query-pagination -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->
