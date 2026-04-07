<?php
/**
 * Title: Hero
 * Slug: eikco/hero
 * Categories: eikco, featured
 * Description: Full-width hero with headline, subhead, CTAs.
 * Keywords: hero, header, front
 * Block Types: core/post-content
 */
?>
<!-- wp:cover {"overlayColor":"contrast","isUserOverlayColor":true,"dimRatio":35,"minHeight":82,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40);min-height:82vh">
	<span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-40 has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="https://images.unsplash.com/photo-1533638717811-3aa30dec2f89?w=2000&q=80" data-object-fit="cover"/>
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"900px"}} -->
		<div class="wp-block-group">

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","textTransform":"uppercase","letterSpacing":"0.18em"},"color":{"text":"#e7e1d1"}}} -->
			<p class="has-text-color" style="color:#e7e1d1;font-size:0.9rem;letter-spacing:0.18em;text-transform:uppercase">Ciudad Quesada · Costa Blanca</p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"clamp(2.75rem, 5vw + 1rem, 5rem)","lineHeight":"1.05"},"color":{"text":"#faf8f3"}},"fontFamily":"serif"} -->
			<h1 class="wp-block-heading has-text-color has-serif-font-family" style="color:#faf8f3;font-size:clamp(2.75rem, 5vw + 1rem, 5rem);line-height:1.05">Buying a home in Spain, without the guesswork.</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.2rem","lineHeight":"1.6"},"color":{"text":"#f1ece0"}}} -->
			<p class="has-text-color" style="color:#f1ece0;font-size:1.2rem;line-height:1.6">Independent, local expertise on your side. We represent you, the buyer — not the seller. No commission from you, ever.</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
			<div class="wp-block-buttons">
				<!-- wp:button -->
				<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/viewing-request">Request a viewing</a></div>
				<!-- /wp:button -->
				<!-- wp:button {"className":"is-style-outline","style":{"color":{"text":"#faf8f3"},"border":{"color":"#faf8f3"}}} -->
				<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-border-color wp-element-button" style="border-color:#faf8f3;color:#faf8f3" href="/how-it-works">How it works</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
