<?php
/**
 * Title: Featured properties
 * Slug: eikco/featured-properties
 * Categories: eikco, featured
 * Description: Curated row of featured properties with photo, badge, reference, price, and specs. Hardcoded placeholders until the property custom post type ships.
 * Keywords: properties, featured, listings
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">

	<!-- Section header -->
	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(1.625rem, 2vw + 1rem, 2.375rem)","lineHeight":"1.2","fontWeight":"400","letterSpacing":"-0.005em"}},"fontFamily":"serif"} -->
		<h2 class="wp-block-heading has-text-align-center has-serif-font-family" style="font-size:clamp(1.625rem, 2vw + 1rem, 2.375rem);font-weight:400;letter-spacing:-0.005em;line-height:1.2">A selection of properties I'm working with</h2>
		<!-- /wp:heading -->
		<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.0625rem","lineHeight":"1.7"}},"textColor":"subtle"} -->
		<p class="has-text-align-center has-subtle-color has-text-color" style="font-size:1.0625rem;line-height:1.7">A small, curated set of homes from my current search. Most of these are off-market — you won't see them listed on the usual portals.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

	<!-- Property cards -->
	<!-- wp:html -->
	<div class="eikco-properties alignwide">
		<style>
			.eikco-properties {
				display: grid;
				grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
				gap: 1.5rem;
				max-width: 1160px;
				margin: 0 auto;
			}
			.eikco-property {
				background: #ffffff;
				border: 1px solid var(--wp--preset--color--hairline);
				border-radius: 4px;
				overflow: hidden;
				display: flex;
				flex-direction: column;
				text-decoration: none;
				color: inherit;
				transition: transform 180ms ease, box-shadow 180ms ease;
			}
			.eikco-property:hover {
				transform: translateY(-2px);
				box-shadow: 0 8px 24px rgba(46, 44, 44, 0.08);
			}
			.eikco-property__media {
				position: relative;
				aspect-ratio: 4 / 3;
				background-size: cover;
				background-position: center;
				background-repeat: no-repeat;
			}
			.eikco-property__badge {
				position: absolute;
				top: 1rem;
				left: 1rem;
				background: #ffffff;
				color: var(--wp--preset--color--accent);
				border: 1px solid var(--wp--preset--color--accent-2);
				border-radius: 2px;
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.625rem;
				font-weight: 700;
				letter-spacing: 0.18em;
				text-transform: uppercase;
				padding: 0.35rem 0.7rem;
			}
			.eikco-property__body {
				padding: 1.1rem 1.25rem 1.35rem;
				display: flex;
				flex-direction: column;
				gap: 0.5rem;
				flex: 1;
			}
			.eikco-property__ref {
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.6875rem;
				text-transform: uppercase;
				letter-spacing: 0.14em;
				color: var(--wp--preset--color--subtle);
			}
			.eikco-property__title {
				font-family: "Libre Baskerville", Georgia, serif;
				font-size: 1.375rem;
				font-weight: 400;
				line-height: 1.25;
				color: var(--wp--preset--color--ink);
				margin: 0;
			}
			.eikco-property__area {
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.875rem;
				color: var(--wp--preset--color--subtle);
			}
			.eikco-property__price {
				font-family: "Libre Baskerville", Georgia, serif;
				font-size: 1.25rem;
				color: var(--wp--preset--color--accent);
				margin-top: 0.25rem;
			}
			.eikco-property__specs {
				display: flex;
				gap: 1rem;
				padding-top: 0.9rem;
				margin-top: auto;
				border-top: 1px solid var(--wp--preset--color--hairline);
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.8125rem;
				color: var(--wp--preset--color--subtle);
			}
			.eikco-property__specs span {
				display: inline-flex;
				align-items: center;
				gap: 0.35rem;
			}
			.eikco-properties__more {
				grid-column: 1 / -1;
				text-align: center;
				margin-top: 1rem;
			}
			.eikco-properties__more a {
				font-family: "Nunito Sans", -apple-system, sans-serif;
				font-size: 0.9375rem;
				letter-spacing: 0.02em;
				color: var(--wp--preset--color--accent);
			}
		</style>

		<a class="eikco-property" href="/properties/villa-la-marquesa-01">
			<div class="eikco-property__media" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Campo_de_Golf_La_Marquesa.jpg/1280px-Campo_de_Golf_La_Marquesa.jpg');">
				<span class="eikco-property__badge">Off-market</span>
			</div>
			<div class="eikco-property__body">
				<div class="eikco-property__ref">Ref EK-2405</div>
				<h3 class="eikco-property__title">Four-bedroom villa on the golf course</h3>
				<div class="eikco-property__area">La Marquesa, Ciudad Quesada</div>
				<div class="eikco-property__price">€695,000</div>
				<div class="eikco-property__specs">
					<span>4 bed</span>
					<span>3 bath</span>
					<span>220 m²</span>
					<span>Plot 600 m²</span>
				</div>
			</div>
		</a>

		<a class="eikco-property" href="/properties/quesada-townhouse-02">
			<div class="eikco-property__media" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Ciudad_Quesada_01.jpg/1280px-Ciudad_Quesada_01.jpg');">
				<span class="eikco-property__badge">Selected</span>
			</div>
			<div class="eikco-property__body">
				<div class="eikco-property__ref">Ref EK-2402</div>
				<h3 class="eikco-property__title">Renovated townhouse with private terrace</h3>
				<div class="eikco-property__area">Central Ciudad Quesada</div>
				<div class="eikco-property__price">€289,000</div>
				<div class="eikco-property__specs">
					<span>3 bed</span>
					<span>2 bath</span>
					<span>140 m²</span>
				</div>
			</div>
		</a>

		<a class="eikco-property" href="/properties/new-build-quesada-03">
			<div class="eikco-property__media" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/0/0d/Ciudad_Quesada_03.jpg/1280px-Ciudad_Quesada_03.jpg');">
				<span class="eikco-property__badge">New build</span>
			</div>
			<div class="eikco-property__body">
				<div class="eikco-property__ref">Ref EK-2411</div>
				<h3 class="eikco-property__title">Modern key-ready villa with private pool</h3>
				<div class="eikco-property__area">Ciudad Quesada, Rojales</div>
				<div class="eikco-property__price">€479,000</div>
				<div class="eikco-property__specs">
					<span>3 bed</span>
					<span>3 bath</span>
					<span>180 m²</span>
					<span>Plot 450 m²</span>
				</div>
			</div>
		</a>

		<a class="eikco-property" href="/properties/la-fiesta-villa-04">
			<div class="eikco-property__media" style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/ArchesCiudadQuesada.jpg/1280px-ArchesCiudadQuesada.jpg');">
				<span class="eikco-property__badge">Off-market</span>
			</div>
			<div class="eikco-property__body">
				<div class="eikco-property__ref">Ref EK-2408</div>
				<h3 class="eikco-property__title">Coastal villa close to Guardamar beach</h3>
				<div class="eikco-property__area">La Fiesta, near Guardamar del Segura</div>
				<div class="eikco-property__price">€545,000</div>
				<div class="eikco-property__specs">
					<span>4 bed</span>
					<span>2 bath</span>
					<span>195 m²</span>
					<span>Plot 520 m²</span>
				</div>
			</div>
		</a>

		<div class="eikco-properties__more">
			<a href="/properties">See all properties →</a>
		</div>
	</div>
	<!-- /wp:html -->

</section>
<!-- /wp:group -->
