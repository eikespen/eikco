<?php
/**
 * Title: Editorial rows
 * Slug: eikco/editorial-rows
 * Categories: eikco
 * Description: Three alternating image/text rows matching Cottage Properties' "largest portfolio / restoration team / free consultation" layout.
 * Keywords: rows, editorial, alternating
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|60"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:html -->
	<div class="eikco-rows alignwide">
		<style>
			.eikco-rows {
				max-width: 1160px;
				margin: 0 auto;
				display: flex;
				flex-direction: column;
				gap: 5rem;
			}
			.eikco-row {
				display: grid;
				grid-template-columns: 1fr 1fr;
				gap: 4rem;
				align-items: center;
			}
			.eikco-row--reverse .eikco-row__text {
				order: 2;
			}
			.eikco-row--reverse .eikco-row__media {
				order: 1;
			}
			.eikco-row__text {
				max-width: 460px;
			}
			.eikco-row__text h2 {
				font-family: "Libre Baskerville", Georgia, serif;
				font-size: clamp(1.625rem, 2vw + 1rem, 2.375rem);
				font-weight: 400;
				line-height: 1.2;
				letter-spacing: -0.005em;
				color: var(--wp--preset--color--ink);
				margin: 0 0 1.4rem 0;
			}
			.eikco-row__text p {
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 1.0625rem;
				line-height: 1.75;
				color: var(--wp--preset--color--ink);
				margin: 0 0 1.1rem 0;
			}
			.eikco-row__text p a {
				color: var(--wp--preset--color--accent);
				text-decoration: underline;
				text-underline-offset: 0.15em;
			}
			.eikco-row__text .eikco-row__cta {
				display: inline-block;
				margin-top: 1.6rem;
				background: var(--wp--preset--color--accent);
				color: #ffffff;
				text-decoration: none;
				padding: 0.9rem 1.6rem;
				border-radius: 4px;
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.85rem;
				font-weight: 600;
				letter-spacing: 0.02em;
				transition: background 120ms ease;
			}
			.eikco-row__text .eikco-row__cta:hover {
				background: var(--wp--preset--color--ink);
			}
			.eikco-row__media {
				aspect-ratio: 4 / 3;
				border-radius: 4px;
				background-color: var(--wp--preset--color--base-2);
				background-size: cover;
				background-position: center;
				display: flex;
				align-items: center;
				justify-content: center;
				position: relative;
				overflow: hidden;
			}
			.eikco-row__media::before {
				content: "";
				position: absolute;
				inset: 0;
				background: linear-gradient(135deg, #e5e1db 0%, #f0ece4 50%, #d9d4cb 100%);
			}
			.eikco-row__media span {
				position: relative;
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.625rem;
				text-transform: uppercase;
				letter-spacing: 0.22em;
				color: var(--wp--preset--color--subtle);
			}
			@media (max-width: 820px) {
				.eikco-rows { gap: 3.5rem; }
				.eikco-row {
					grid-template-columns: 1fr;
					gap: 1.5rem;
				}
				.eikco-row--reverse .eikco-row__text,
				.eikco-row--reverse .eikco-row__media {
					order: initial;
				}
			}
		</style>

		<!-- Row 1: Curated portfolio (text left, image right) -->
		<div class="eikco-row">
			<div class="eikco-row__text">
				<h2>A small,<br>carefully curated&nbsp;portfolio</h2>
				<p>Unlike a traditional agency, I don't list hundreds of properties. I work with a small, carefully vetted set — most of them off-market or pre-market — because knowing each home in depth is the only way I can represent it honestly to you.</p>
				<p>Every property I present has been inspected by me personally, legally checked by my lawyers, and priced against what's actually being paid in the area.</p>
				<a class="eikco-row__cta" href="/properties">See the current selection</a>
			</div>
			<div class="eikco-row__media">
				<span>Photo: curated portfolio</span>
			</div>
		</div>

		<!-- Row 2: Independent representation (image left, text right) -->
		<div class="eikco-row eikco-row--reverse">
			<div class="eikco-row__text">
				<h2>Independent, on your<br>side of the table</h2>
				<p>Almost every real-estate agent in Spain is paid by the seller. Their job is to get the highest price — which is the opposite of what a buyer needs. I work the other side: my only client is you.</p>
				<p>I find the property, I negotiate the price, I coordinate with lawyers and banks, and I stay involved all the way to the notary. The seller still pays the commission, so there is no bill for you at the end.</p>
				<a class="eikco-row__cta" href="/how-it-works">How it works</a>
			</div>
			<div class="eikco-row__media">
				<span>Photo: independent representation</span>
			</div>
		</div>

		<!-- Row 3: Free conversation (text left, image right) -->
		<div class="eikco-row">
			<div class="eikco-row__text">
				<h2>A free first<br>conversation, no pressure</h2>
				<p>If you're thinking about buying property in Ciudad Quesada or the surrounding Costa Blanca, start with a thirty-minute conversation. We talk about what you're actually looking for, what's realistic for your budget, and whether I'm the right person to help you at all.</p>
				<p>No forms to fill out beyond a name and a good way to reach you. No commitment. Just a straightforward chat.</p>
				<a class="eikco-row__cta" href="/contact">Request a conversation</a>
			</div>
			<div class="eikco-row__media">
				<span>Photo: portrait of Espen</span>
			</div>
		</div>

	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
