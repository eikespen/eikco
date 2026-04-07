<?php
/**
 * Title: Hero
 * Slug: eikco/hero
 * Categories: eikco, featured
 * Description: Centered editorial hero with serif display and small sans-caps label. Paragraph-led, no background image, no button grid.
 * Keywords: hero, header, front
 * Block Types: core/post-content
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(1.625rem, 1.25vw + 1rem, 2.3125rem)","lineHeight":"1.25","fontWeight":"400","letterSpacing":"-0.005em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"fontFamily":"serif"} -->
	<h1 class="wp-block-heading has-text-align-center has-serif-font-family" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:clamp(1.625rem, 1.25vw + 1rem, 2.3125rem);font-weight:400;letter-spacing:-0.005em;line-height:1.25">An independent buyer's agent<br>for exclusive properties in Ciudad Quesada</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.6"}},"textColor":"subtle"} -->
	<p class="has-text-align-center has-subtle-color has-text-color" style="font-size:1.0625rem;line-height:1.6">Independent buyer's representation for property purchases on the southern Costa Blanca.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|20"}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--30)">
		<!-- wp:button -->
		<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/viewing-request">Request a viewing</a></div>
		<!-- /wp:button -->

		<!-- wp:button {"className":"is-style-outline","style":{"border":{"radius":"4px","width":"1px","color":"var:preset|color|hairline"},"color":{"text":"var:preset|color|ink","background":"transparent"},"elements":{"link":{"color":{"text":"var:preset|color|ink"}}}}} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-color has-background has-link-color wp-element-button" style="border-color:var(--wp--preset--color--hairline);border-width:1px;border-radius:4px;color:var(--wp--preset--color--ink);background:transparent" href="/how-it-works">How it works</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

</section>
<!-- /wp:group -->
