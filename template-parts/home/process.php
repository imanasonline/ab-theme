<?php
/**
 * Homepage — Section 10: Process.
 *
 * Focused live check (2026-10-21) ki naap: centered H2
 * (gradient sirf "started") + supporting line, phir 3
 * cards — har card mein upar-bayein BARA halka ghost
 * number (01/02/03, #E8F1F9) jiss par chhota neela icon
 * aya hua, phir title, description, aur neeche
 * full-bleed photo. Photos Basit ki personal
 * screenshots hain — yahan placeholder panels hain,
 * Anas ki apni screenshots ane par badal jayengi.
 * Neeche PURA-WIDTH gradient button "Book Your Free
 * Discovery Call" (calendar-check icon dayein).
 *
 * Live text ki ghaltiyan ("colpeted", "distroying",
 * chhota "i", "proposal ,") refined version mein
 * durust hain — content wohi hai.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_i_video = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><circle cx="12" cy="9.2" r="1.9"/><path d="M8.2 14.4c.7-1.4 2.1-2.1 3.8-2.1s3.1.7 3.8 2.1"/><path d="M12 17v3"/><path d="M8.5 20h7"/></svg>';

$ab_i_layout = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/><path d="M9 9v11"/></svg>';

$ab_i_deliver = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M4 12v7a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-7"/><path d="m16 6-4-4-4 4"/><path d="M12 2v13"/></svg>';

$ab_i_calendar = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M8 2v4"/><path d="M16 2v4"/><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M3 10h18"/><path d="m9 16 2 2 4-4"/></svg>';

$ab_i_image = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="2"/><circle cx="9" cy="9" r="2"/><path d="m21 15-3.1-3.1a2 2 0 0 0-2.8 0L6 21"/></svg>';

$ab_steps = array(
	array(
		'num'   => '01',
		'icon'  => $ab_i_video,
		'title' => __( 'Book a Discovery Call & Foundation setting', 'ab-theme' ),
		'text'  => __( "Book a discovery call to discuss your business, ideas, customers, clients, competitors, goals, and see if we're best fit. Afterward, you'll receive a detailed proposal outlining the scope of work, deliverables, timeline, and pricing.", 'ab-theme' ),
		'media' => __( 'Discovery call screenshot', 'ab-theme' ),
	),
	array(
		'num'   => '02',
		'icon'  => $ab_i_layout,
		'title' => __( 'Copy, Design, Development And Feedback', 'ab-theme' ),
		'text'  => __( 'Once we agree on the scope and you accept the proposal, I start your project from research to a clear messaging strategy, website copy, and build it in WordPress using Elementor and along the way I will update you so you can provide feedback for a seamless process.', 'ab-theme' ),
		'media' => __( 'WordPress editor screenshot', 'ab-theme' ),
	),
	array(
		'num'   => '03',
		'icon'  => $ab_i_deliver,
		'title' => __( 'Deliver The Project To You', 'ab-theme' ),
		'text'  => __( 'Once the project is completed, I test everything from my side and then request approval. Upon approval of the finished website I will be with you on Google Meet to explain everything about how you can publish content and manage yourself further without destroying anything, plus a 30-day free support.', 'ab-theme' ),
		'media' => __( 'Handover screenshot', 'ab-theme' ),
	),
);
?>

<section class="section process">
	<div class="container">
		<h2 class="section__title">
			<?php esc_html_e( 'How to get', 'ab-theme' ); ?>
			<span class="text-gradient"><?php esc_html_e( 'started', 'ab-theme' ); ?></span>
		</h2>

		<p class="section__lead"><?php esc_html_e( 'From our first conversation to your website launch, every step is simple, collaborative, and designed to deliver a website that helps your business grow.', 'ab-theme' ); ?></p>

		<div class="process-grid">
			<?php foreach ( $ab_steps as $ab_step ) : ?>
				<article class="step-card">
					<div class="step-card__body">
						<span class="step-card__num" aria-hidden="true"><?php echo esc_html( $ab_step['num'] ); ?></span>
						<span class="step-card__icon"><?php echo $ab_step['icon']; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
						<h3><?php echo esc_html( $ab_step['title'] ); ?></h3>
						<p><?php echo esc_html( $ab_step['text'] ); ?></p>
					</div>
					<div class="step-card__media" role="img" aria-label="<?php echo esc_attr( $ab_step['media'] ); ?>">
						<?php echo $ab_i_image; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
						<span><?php echo esc_html( $ab_step['media'] ); ?></span>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<a class="btn btn-primary btn--icon process__btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
			<?php esc_html_e( 'Book Your Free Discovery Call', 'ab-theme' ); ?>
			<?php echo $ab_i_calendar; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
		</a>
	</div>
</section>
