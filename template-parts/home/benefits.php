<?php
/**
 * Homepage — Section 4: Benefits.
 *
 * Focused live check (2026-10-21) ki naap: do column —
 * bayein photo (~40%, portrait, radius ~9px, koi overlay
 * NAHI), dayein (~60%) heading + 3 checklist rows + 2
 * buttons. Heading ka gradient sirf "website that
 * works!" par. Har row: neela rosette badge (safed
 * check wala, ~30px) + bold lead-in + paragraph.
 * Buttons dono neelay: "Start Your Project" (plane icon
 * bayein) aur "Discuss On WhatsApp" (chat icon dayein).
 *
 * Photo abhi placeholder hai — Anas ki apni photo aane
 * par <img> se badal jayegi (size/ratio wohi rahega).
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_check = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3.85 8.62a4 4 0 0 1 4.78-4.77 4 4 0 0 1 6.74 0 4 4 0 0 1 4.78 4.78 4 4 0 0 1 0 6.74 4 4 0 0 1-4.77 4.78 4 4 0 0 1-6.75 0 4 4 0 0 1-4.78-4.77 4 4 0 0 1 0-6.76Z" fill="currentColor"/><path d="m9 12 2 2 4-4" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

$ab_plane = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>';

$ab_chat = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>';

// Live text mein do chhoti grammar ghaltiyan thin
// ("that attract", "Spent your time") — refined version
// mein durust kar di gayi hain, content wohi hai.
$ab_benefits = array(
	array(
		'title' => __( 'A website that attracts customers and clients', 'ab-theme' ),
		'text'  => __( 'Your website becomes a powerful tool that attracts new clients, generate more enquiries, and book more clients and customers.', 'ab-theme' ),
	),
	array(
		'title' => __( 'More time to focus on your business', 'ab-theme' ),
		'text'  => __( 'Spend your time on your business instead of wrestling with tech and website issues.', 'ab-theme' ),
	),
	array(
		'title' => __( 'More Confidence to sell your services', 'ab-theme' ),
		'text'  => __( 'Be confident that your website reflects the quality of your business and conveys your message clearly to the potential customers and clients.', 'ab-theme' ),
	),
);
?>

<section class="section benefits">
	<div class="container benefits__grid">

		<div class="benefits__media" role="img" aria-label="<?php esc_attr_e( 'Your photo will be placed here', 'ab-theme' ); ?>">
			<span class="benefits__media-initials" aria-hidden="true">MA</span>
			<span class="benefits__media-note"><?php esc_html_e( 'Your photo here', 'ab-theme' ); ?></span>
		</div>

		<div class="benefits__body">
			<h2 class="benefits__title">
				<?php esc_html_e( 'Every local service business deserves a', 'ab-theme' ); ?>
				<span class="text-gradient"><?php esc_html_e( 'website that works!', 'ab-theme' ); ?></span>
			</h2>

			<div class="benefits__list">
				<?php foreach ( $ab_benefits as $ab_benefit ) : ?>
					<div class="benefit">
						<span class="benefit__icon"><?php echo $ab_check; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
						<div class="benefit__text">
							<h3><?php echo esc_html( $ab_benefit['title'] ); ?></h3>
							<p><?php echo esc_html( $ab_benefit['text'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="benefits__actions">
				<a class="btn btn-primary btn--icon" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
					<?php echo $ab_plane; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
					<?php esc_html_e( 'Start Your Project', 'ab-theme' ); ?>
				</a>
				<a class="btn btn-primary btn--icon" href="#">
					<?php esc_html_e( 'Discuss On WhatsApp', 'ab-theme' ); ?>
					<?php echo $ab_chat; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
				</a>
			</div>
		</div>

	</div>
</section>
