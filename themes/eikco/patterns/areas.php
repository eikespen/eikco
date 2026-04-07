<?php
/**
 * Title: Areas grid
 * Slug: eikco/areas
 * Categories: eikco, gallery
 * Description: Three-up grid of neighborhood cards with image, title, and short description.
 * Keywords: areas, neighborhoods, grid, cards
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.18em"}},"textColor":"primary"} -->
		<p class="has-text-align-center has-primary-color has-text-color" style="font-size:0.9rem;letter-spacing:0.18em;text-transform:uppercase">Where we work</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"textAlign":"center","level":2} -->
		<h2 class="wp-block-heading has-text-align-center">The Costa Blanca, properly.</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.7"}}} -->
		<p class="has-text-align-center" style="line-height:1.7">We focus on a handful of neighborhoods we know deeply — so when we recommend a place, it's with firsthand knowledge of the streets, the neighbors, and the market.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image" style="border-radius:12px"><img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=1200&q=80" alt="Ciudad Quesada rooftops" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">Ciudad Quesada</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>An established Norwegian and Scandinavian community with shops, restaurants, and everything walkable. The heart of what we do.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image" style="border-radius:12px"><img src="https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=1200&q=80" alt="La Marquesa greens" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">La Marquesa</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Golf, greenery, and peaceful streets — a favourite among buyers looking for a calmer pace without leaving the area.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"aspectRatio":"4/3","scale":"cover","style":{"border":{"radius":"12px"}}} -->
			<figure class="wp-block-image" style="border-radius:12px"><img src="https://images.unsplash.com/photo-1519046904884-53103b34b206?w=1200&q=80" alt="La Fiesta coastline" style="aspect-ratio:4/3;object-fit:cover;border-radius:12px"/></figure>
			<!-- /wp:image -->
			<!-- wp:heading {"level":3,"fontSize":"large"} -->
			<h3 class="wp-block-heading has-large-font-size">La Fiesta</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Close to Guardamar's beaches and the Segura river — villas and townhouses with easy access to the coast.</p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
