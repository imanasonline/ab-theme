<?php
/**
 * Homepage — Section 9: Pricing.
 *
 * Focused live check (2026-10-21) ki naap: centered H2
 * (gradient sirf "packages") + supporting line, phir EK
 * safed bare container ke andar 3 columns. Darmiyan
 * wala card highlight NAHI hai, koi badge NAHI hai —
 * DAYEIN wala (Authority) column halka neela inset
 * panel hai. Har column: window icon, package naam,
 * bari price, tagline, divider, features (neelay
 * rosette-check ke sath), turnaround line, aur andar
 * hi pura-width gradient button. Neeche koi button
 * NAHI hai.
 *
 * Prices abhi live site walay hain — content phase
 * mein Anas ki apni prices lagengi.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_plane = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>';

$ab_check = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" fill="currentColor"/><path d="m9 12 2 2 4-4" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

$ab_i_rocket = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"/><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"/><path d="M9 12H4s.55-3.03 2-4c1.62-1.08 5 0 5 0"/><path d="M12 15v5s3.03-.55 4-2c1.08-1.62 0-5 0-5"/></svg>';

$ab_i_chart = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3 3v18h18"/><path d="M18 17V9"/><path d="M13 17V5"/><path d="M8 17v-3"/></svg>';

$ab_i_trophy = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.9" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 9H4.5a2.5 2.5 0 0 1 0-5H6"/><path d="M18 9h1.5a2.5 2.5 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M10 14.66V17c0 .55-.47.98-.97 1.21C7.85 18.75 7 20.24 7 22"/><path d="M14 14.66V17c0 .55.47.98.97 1.21C16.15 18.75 17 20.24 17 22"/><path d="M18 2H6v7a6 6 0 0 0 12 0V2Z"/></svg>';

$ab_packages = array(
	array(
		'icon'     => $ab_i_rocket,
		'name'     => __( 'Quick Start Website 🚀', 'ab-theme' ),
		'price'    => '$990',
		'tagline'  => __( 'For businesses who need a fast online presence.', 'ab-theme' ),
		'listhead' => __( 'Includes In', 'ab-theme' ),
		'features' => array(
			__( 'Deep client and business research', 'ab-theme' ),
			__( 'Up to 3 pages', 'ab-theme' ),
			__( 'Color palette & typography', 'ab-theme' ),
			__( 'Story-driven copywriting', 'ab-theme' ),
			__( 'Mobile, tablet, desktop responsive', 'ab-theme' ),
			__( 'Booking app integration', 'ab-theme' ),
			__( 'Basic speed optimization', 'ab-theme' ),
		),
		'turn'     => __( 'Turn around time: up to 6 days', 'ab-theme' ),
		'featured' => false,
	),
	array(
		'icon'     => $ab_i_chart,
		'name'     => __( 'Growth Website 📈', 'ab-theme' ),
		'price'    => '$2,290',
		'tagline'  => __( 'For businesses who want more leads & grow their online presence', 'ab-theme' ),
		'listhead' => __( 'Everything in Quick start, plus', 'ab-theme' ),
		'features' => array(
			__( 'Up to 7 pages', 'ab-theme' ),
			__( 'Strategy and positioning', 'ab-theme' ),
			__( 'Strategic page structure', 'ab-theme' ),
			__( 'All pages copywriting', 'ab-theme' ),
			__( 'Better internal linking', 'ab-theme' ),
			__( 'Custom built contact form', 'ab-theme' ),
			__( 'Blog setup for SEO purpose', 'ab-theme' ),
			__( 'FAQ page', 'ab-theme' ),
			__( '3 rounds of revisions', 'ab-theme' ),
		),
		'turn'     => __( 'Turn around time: up to 10 days', 'ab-theme' ),
		'featured' => false,
	),
	array(
		'icon'     => $ab_i_trophy,
		'name'     => __( 'Authority Website 🏆', 'ab-theme' ),
		'price'    => '$4,490',
		'tagline'  => __( 'For businesses who want a custom solution to stand out in their market', 'ab-theme' ),
		'listhead' => __( 'Everything in Growth, Plus', 'ab-theme' ),
		'features' => array(
			__( 'Up to 10 pages', 'ab-theme' ),
			__( 'Complete custom layout and design', 'ab-theme' ),
			__( 'Custom styles and engaging interactions', 'ab-theme' ),
			__( 'Strategic lead magnet page', 'ab-theme' ),
			__( 'Complete website copywriting', 'ab-theme' ),
			__( 'Foundational on-page SEO', 'ab-theme' ),
			__( 'Google Map integration', 'ab-theme' ),
			__( 'Local keyword optimization', 'ab-theme' ),
			__( '3 months free support', 'ab-theme' ),
		),
		'turn'     => __( 'Turn around time: 20 to 30 days', 'ab-theme' ),
		'featured' => true,
	),
);
?>

<section class="section pricing">
	<div class="container">
		<h2 class="section__title">
			<?php esc_html_e( 'Website design', 'ab-theme' ); ?>
			<span class="text-gradient"><?php esc_html_e( 'packages', 'ab-theme' ); ?></span>
		</h2>

		<p class="section__lead"><?php esc_html_e( "Every local service business has different needs. That's why I offer three packages designed to meet you where you are.", 'ab-theme' ); ?></p>

		<div class="pricing-box">
			<?php foreach ( $ab_packages as $ab_pkg ) : ?>
				<div class="price-col<?php echo $ab_pkg['featured'] ? ' price-col--featured' : ''; ?>">
					<span class="price-col__icon">
						<span class="price-col__iconbar"></span>
						<?php echo $ab_pkg['icon']; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
					</span>

					<h3 class="price-col__name"><?php echo esc_html( $ab_pkg['name'] ); ?></h3>
					<p class="price-col__price"><?php echo esc_html( $ab_pkg['price'] ); ?></p>
					<p class="price-col__tagline"><?php echo esc_html( $ab_pkg['tagline'] ); ?></p>

					<hr class="price-col__rule" aria-hidden="true">

					<p class="price-col__listhead"><?php echo esc_html( $ab_pkg['listhead'] ); ?></p>
					<ul class="price-col__list">
						<?php foreach ( $ab_pkg['features'] as $ab_feature ) : ?>
							<li>
								<span class="price-col__check"><?php echo $ab_check; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
								<?php echo esc_html( $ab_feature ); ?>
							</li>
						<?php endforeach; ?>
					</ul>

					<p class="price-col__turn"><?php echo esc_html( $ab_pkg['turn'] ); ?></p>

					<a class="btn btn-primary btn--icon price-col__btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<?php echo $ab_plane; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
						<?php esc_html_e( "Let's Discuss Your Project", 'ab-theme' ); ?>
					</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
