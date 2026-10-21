<?php
/**
 * Homepage — Section 2: Trust strip.
 *
 * Hero ke bilkul neeche wali patli navy patti: 3 checkmark
 * items ek satar mein. Live naap (2026-10-21): background
 * gehra navy, safed text ~18px semibold, har item se pehle
 * badge-check nishan ~24px, padding ~18px upar/neeche.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_items = array(
	__( 'Website you\'re proud of', 'ab-theme' ),
	__( 'Client-attracting message', 'ab-theme' ),
	__( 'Scalable online presence', 'ab-theme' ),
);

$ab_badge = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z"/><path d="m9 12 2 2 4-4"/></svg>';
?>

<div class="trust-strip">
	<div class="container">
		<ul class="trust-strip__list">
			<?php foreach ( $ab_items as $ab_item ) : ?>
				<li class="trust-strip__item">
					<span class="trust-strip__icon"><?php echo $ab_badge; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
					<?php echo esc_html( $ab_item ); ?>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</div>
