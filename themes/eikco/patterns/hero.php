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
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.6875rem","textTransform":"uppercase","letterSpacing":"0.22em"},"elements":{"link":{"color":{"text":"var:preset|color|subtle"}}}},"textColor":"subtle","fontFamily":"sans"} -->
	<p class="has-text-align-center has-subtle-color has-text-color has-link-color has-sans-font-family" style="font-size:0.6875rem;letter-spacing:0.22em;text-transform:uppercase">Ciudad Quesada · Costa Blanca · Since 2022</p>
	<!-- /wp:paragraph -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(1.875rem, 2.25vw + 1rem, 2.875rem)","lineHeight":"1.2","fontWeight":"400","letterSpacing":"-0.005em"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|30"}}},"fontFamily":"serif"} -->
	<h1 class="wp-block-heading has-text-align-center has-serif-font-family" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--30);font-size:clamp(1.875rem, 2.25vw + 1rem, 2.875rem);font-weight:400;letter-spacing:-0.005em;line-height:1.2">An independent buyer's agent for Ciudad Quesada and the southern Costa Blanca.</h1>
	<!-- /wp:heading -->

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"640px"}} -->
	<div class="wp-block-group">
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.1875rem","lineHeight":"1.65"}}} -->
		<p class="has-text-align-center" style="font-size:1.1875rem;line-height:1.65">Everyone who works in Spanish real estate is paid by the seller. That means there is almost nobody whose job is to look out for <em>you</em>, the person actually writing the cheque. That's the job I do — independently, locally, and without taking a single euro in commission from the buyer.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
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
