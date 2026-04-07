<?php
/**
 * Title: Hero with search card
 * Slug: eikco/hero
 * Categories: eikco, featured
 * Description: Centered serif headline with a search card underneath, matching Cottage Properties' hero layout.
 * Keywords: hero, search, front
 * Block Types: core/post-content
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(1.625rem, 1.25vw + 1rem, 2.3125rem)","lineHeight":"1.25","fontWeight":"400","letterSpacing":"-0.005em"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontFamily":"serif"} -->
	<h1 class="wp-block-heading has-text-align-center has-serif-font-family" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--20);font-size:clamp(1.625rem, 1.25vw + 1rem, 2.3125rem);font-weight:400;letter-spacing:-0.005em;line-height:1.25">An independent buyer's agent<br>for exclusive properties in Ciudad Quesada</h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|40"}}},"textColor":"subtle"} -->
	<p class="has-text-align-center has-subtle-color has-text-color" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--40);font-size:1.0625rem;line-height:1.6">Discover beautiful homes on the southern Costa Blanca</p>
	<!-- /wp:paragraph -->

	<!-- Search card -->
	<!-- wp:html -->
	<form action="/properties/" method="get" class="eikco-search-card" role="search" aria-label="Find a property">
		<style>
			.eikco-search-card {
				max-width: 980px;
				margin: 0 auto;
				background: #ffffff;
				border: 1px solid var(--wp--preset--color--hairline);
				border-radius: 4px;
				padding: 1.25rem 1.5rem;
				display: grid;
				grid-template-columns: 1.4fr 1fr 1fr auto;
				gap: 1rem;
				align-items: end;
				box-shadow: 0 1px 2px rgba(46, 44, 44, 0.04);
			}
			.eikco-search-card label {
				display: block;
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.6875rem;
				font-weight: 600;
				text-transform: uppercase;
				letter-spacing: 0.12em;
				color: var(--wp--preset--color--subtle);
				margin-bottom: 0.35rem;
			}
			.eikco-search-card select,
			.eikco-search-card input[type="text"] {
				width: 100%;
				appearance: none;
				-webkit-appearance: none;
				background: #ffffff;
				border: none;
				border-bottom: 1px solid var(--wp--preset--color--hairline);
				padding: 0.35rem 0;
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.95rem;
				color: var(--wp--preset--color--ink);
				cursor: pointer;
			}
			.eikco-search-card select:focus,
			.eikco-search-card input:focus {
				outline: none;
				border-bottom-color: var(--wp--preset--color--accent);
			}
			.eikco-search-card .field {
				min-width: 0;
			}
			.eikco-search-card .field-select::after {
				content: "▾";
				float: right;
				margin-top: -1.6rem;
				color: var(--wp--preset--color--subtle);
				pointer-events: none;
			}
			.eikco-search-card button {
				background: var(--wp--preset--color--accent);
				color: #ffffff;
				border: none;
				border-radius: 4px;
				padding: 0.95rem 1.75rem;
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.85rem;
				font-weight: 600;
				letter-spacing: 0.02em;
				cursor: pointer;
				white-space: nowrap;
				transition: background 120ms ease;
			}
			.eikco-search-card button:hover {
				background: var(--wp--preset--color--ink);
			}
			@media (max-width: 820px) {
				.eikco-search-card {
					grid-template-columns: 1fr 1fr;
				}
				.eikco-search-card button {
					grid-column: 1 / -1;
				}
			}
			@media (max-width: 520px) {
				.eikco-search-card {
					grid-template-columns: 1fr;
					padding: 1.25rem;
				}
			}
		</style>

		<div class="field field-select">
			<label for="eikco-area">Area</label>
			<select name="area" id="eikco-area">
				<option value="">Any area</option>
				<option value="ciudad-quesada">Ciudad Quesada</option>
				<option value="la-marquesa">La Marquesa</option>
				<option value="la-fiesta">La Fiesta</option>
				<option value="guardamar">Guardamar del Segura</option>
				<option value="torrevieja">Torrevieja</option>
			</select>
		</div>

		<div class="field field-select">
			<label for="eikco-type">Type</label>
			<select name="type" id="eikco-type">
				<option value="">Any type</option>
				<option value="villa">Villa</option>
				<option value="townhouse">Townhouse</option>
				<option value="apartment">Apartment</option>
				<option value="new-build">New build</option>
				<option value="plot">Plot</option>
			</select>
		</div>

		<div class="field field-select">
			<label for="eikco-budget">Budget</label>
			<select name="budget" id="eikco-budget">
				<option value="">Any budget</option>
				<option value="0-300000">Up to €300,000</option>
				<option value="300000-500000">€300,000 – €500,000</option>
				<option value="500000-800000">€500,000 – €800,000</option>
				<option value="800000-1500000">€800,000 – €1,500,000</option>
				<option value="1500000-">€1,500,000 and above</option>
			</select>
		</div>

		<button type="submit">Find properties</button>
	</form>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
