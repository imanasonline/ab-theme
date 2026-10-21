<?php
/**
 * Homepage — Section 12: Final CTA.
 *
 * Focused live check (2026-10-21) ki naap: sirf do
 * cheezein — centered bari heading "Have an
 * [online presence] you can be proud of" (gradient
 * sirf "online presence" par, do lines) aur us ke
 * neeche EK icon-only chokor gradient button (paper
 * plane), jo /contact/ par jata hai. Koi paragraph,
 * photo ya note NAHI hai.
 *
 * Accessibility: icon-only link par aria-label hai
 * taake screen reader use karne walon ko is ka
 * maqsad samajh aye.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_plane = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>';
?>

<section class="section final-cta">
	<div class="container final-cta__inner">
		<h2 class="final-cta__title">
			<?php esc_html_e( 'Have an', 'ab-theme' ); ?>
			<span class="text-gradient"><?php esc_html_e( 'online presence', 'ab-theme' ); ?></span><br>
			<?php esc_html_e( 'you can be proud of', 'ab-theme' ); ?>
		</h2>

		<a class="final-cta__btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" aria-label="<?php esc_attr_e( 'Start your project — contact', 'ab-theme' ); ?>">
			<?php echo $ab_plane; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
		</a>
	</div>
</section>
