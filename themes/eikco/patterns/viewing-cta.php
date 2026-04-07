<?php
/**
 * Title: Viewing CTA promo banner
 * Slug: eikco/viewing-cta
 * Categories: eikco, call-to-action
 * Description: Full-width deep-teal promo banner with headline, short copy, outline CTA button, and a decorative image placeholder on the right.
 * Keywords: cta, promo, viewing, contact, banner
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"accent","textColor":"base","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-color has-accent-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:html -->
	<div class="eikco-promo alignwide">
		<style>
			.eikco-promo {
				max-width: 1160px;
				margin: 0 auto;
				display: grid;
				grid-template-columns: 1fr 1fr;
				gap: 4rem;
				align-items: center;
			}
			.eikco-promo__text {
				max-width: 460px;
				color: #ffffff;
			}
			.eikco-promo__text h2 {
				font-family: "Libre Baskerville", Georgia, serif;
				font-size: clamp(1.75rem, 2.5vw + 1rem, 2.625rem);
				font-weight: 400;
				line-height: 1.2;
				letter-spacing: -0.005em;
				color: #ffffff;
				margin: 0 0 1.1rem 0;
			}
			.eikco-promo__text p {
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 1.0625rem;
				line-height: 1.75;
				color: rgba(255,255,255,0.82);
				margin: 0 0 1.6rem 0;
			}
			.eikco-promo__text a.cta {
				display: inline-block;
				padding: 0.9rem 1.75rem;
				border: 1px solid rgba(255,255,255,0.6);
				border-radius: 4px;
				color: #ffffff;
				text-decoration: none;
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.85rem;
				font-weight: 600;
				letter-spacing: 0.02em;
				transition: background 140ms ease, border-color 140ms ease;
			}
			.eikco-promo__text a.cta:hover {
				background: #ffffff;
				color: var(--wp--preset--color--accent);
				border-color: #ffffff;
			}
			.eikco-promo__media {
				aspect-ratio: 5 / 4;
				border-radius: 4px;
				background: linear-gradient(135deg, rgba(255,255,255,0.06) 0%, rgba(255,255,255,0.02) 100%);
				border: 1px solid rgba(255,255,255,0.12);
				display: flex;
				align-items: center;
				justify-content: center;
				position: relative;
				overflow: hidden;
			}
			.eikco-promo__media svg {
				width: 140px;
				height: 140px;
				color: rgba(255,255,255,0.22);
			}
			.eikco-promo__media .label {
				position: absolute;
				bottom: 1rem;
				left: 1rem;
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.625rem;
				text-transform: uppercase;
				letter-spacing: 0.22em;
				color: rgba(255,255,255,0.45);
			}
			@media (max-width: 820px) {
				.eikco-promo {
					grid-template-columns: 1fr;
					gap: 2rem;
				}
			}
		</style>

		<div class="eikco-promo__text">
			<h2>A free first<br>conversation with&nbsp;me</h2>
			<p>Tell me what you're looking for. I'll tell you honestly whether I can help, which neighbourhoods fit, and what's realistic for your budget. Thirty minutes, no commitment.</p>
			<a class="cta" href="/contact">Request a conversation</a>
		</div>

		<div class="eikco-promo__media" aria-hidden="true">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64">
				<circle cx="32" cy="32" r="30.5" fill="none" stroke="currentColor" stroke-width="1.25"/>
				<g fill="currentColor">
					<path d="M31.55 12 L31.55 52 L32.45 52 L32.45 12 Z"/>
					<path d="M32 14 C 27 17, 22 17, 20 21 C 18 18, 14 18, 13 22 C 15 24, 18 25, 21 24 C 19 27, 16 29, 15 32 C 18 32, 22 31, 24 28 C 23 32, 20 35, 19 38 C 23 37, 27 34, 28 30 C 28 34, 27 38, 25 42 C 29 40, 32 36, 32 32 Z"/>
					<path d="M32 14 C 37 17, 42 17, 44 21 C 46 18, 50 18, 51 22 C 49 24, 46 25, 43 24 C 45 27, 48 29, 49 32 C 46 32, 42 31, 40 28 C 41 32, 44 35, 45 38 C 41 37, 37 34, 36 30 C 36 34, 37 38, 39 42 C 35 40, 32 36, 32 32 Z"/>
					<path d="M32 46 C 30 48, 30 50, 32 52 C 34 50, 34 48, 32 46 Z"/>
				</g>
			</svg>
			<span class="label">Photo placeholder</span>
		</div>
	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
