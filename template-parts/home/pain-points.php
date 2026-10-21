<?php
/**
 * Homepage — Section 3: Pain Points.
 *
 * Focused live check (2026-10-21) ki naap: centered H2,
 * gradient sirf "website doesn't reflect" par; neeche 3
 * safed cards — har card mein upar neela rosette badge
 * (safed "!" wala, ~45px) aur sirf EK jumla centered,
 * ~17px, regular weight. Koi chevron NAHI hai, koi
 * supporting paragraph NAHI hai.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_points = array(
	__( 'Your website is pushing away potential customers and clients', 'ab-theme' ),
	__( "You're spending money on temporary fixes that never quite work.", 'ab-theme' ),
	__( "You're struggling to scale your business the way you want to.", 'ab-theme' ),
);

$ab_badge = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" fill="currentColor"/><rect x="11.1" y="6.8" width="1.8" height="6.2" rx="0.9" fill="#fff"/><circle cx="12" cy="16.6" r="1.05" fill="#fff"/></svg>';
?>

<section class="section pain-points">
	<div class="container">
		<h2 class="section__title">
			<?php esc_html_e( 'You run a great business, but your', 'ab-theme' ); ?>
			<span class="text-gradient"><?php esc_html_e( "website doesn't reflect", 'ab-theme' ); ?></span>
			<?php esc_html_e( 'that.', 'ab-theme' ); ?>
		</h2>

		<div class="pain-grid">
			<?php foreach ( $ab_points as $ab_point ) : ?>
				<div class="pain-card">
					<span class="pain-card__icon"><?php echo $ab_badge; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
					<p><?php echo esc_html( $ab_point ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
