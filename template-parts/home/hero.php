<?php
/**
 * Homepage — Hero section.
 *
 * Basit ki live site ke hero ka refined version (2026-10-21 ko
 * live dekh kar banaya gaya): badge NAHI hai; headline mein
 * pehle do aur akhri do alfaaz gradient mein; do neele two-line
 * buttons; sath rating wali line; dayein taraf browser frame
 * mein rotating project showcase (Anas ki portfolio wali
 * feature — khud badalta hai, hover par ruk jata hai).
 *
 * Mukammal sections ki tartib ke liye dekho: front-page.php.
 * Showcase ke projects abhi design ke sample hain — Phase 3
 * mein Projects CPT se ayenge.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_slides = array(
	array(
		'theme'    => 'green',
		'name'     => 'GreenScape Outdoor Services',
		'heading'  => 'Transform Your Lawn. Reclaim Your Weekend Freedom',
		'text'     => 'Professional lawn care and landscaping solutions for busy homeowners.',
		'cta'      => 'Get a Quote',
		'services' => array(
			array( 'Lawn Care', 'Regular mowing & clean-ups' ),
			array( 'Landscaping', 'Gardens that stand out' ),
			array( 'Clean-ups', 'Seasonal yard refresh' ),
		),
	),
	array(
		'theme'    => 'blue',
		'name'     => 'BrightSmile Dental Studio',
		'heading'  => 'A Brighter Smile Starts Here',
		'text'     => 'Gentle, modern dental care for the whole family — book in minutes.',
		'cta'      => 'Book a Visit',
		'services' => array(
			array( 'Cleanings', 'Gentle routine care' ),
			array( 'Whitening', 'Brighter in one visit' ),
			array( 'Implants', 'Lasting replacements' ),
		),
	),
	array(
		'theme'    => 'navy',
		'name'     => 'RapidFlow Plumbing Co.',
		'heading'  => 'Fast Plumbing, Done Right',
		'text'     => 'Reliable repairs and installations — done right the first time.',
		'cta'      => 'Get a Quote',
		'services' => array(
			array( 'Repairs', 'Leaks fixed fast' ),
			array( 'Water Heaters', 'Install & replace' ),
			array( 'Drains', 'Cleared same-day' ),
		),
	),
);

$ab_star = '<svg viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"/></svg>';
?>

<section class="hero">
	<div class="container hero__grid">

		<div class="hero__content">
			<h1 class="hero__title">
				<span class="text-gradient"><?php esc_html_e( 'Strategic Website', 'ab-theme' ); ?></span>
				<?php esc_html_e( 'Design That Helps Local Service Businesses', 'ab-theme' ); ?>
				<span class="text-gradient"><?php esc_html_e( 'Grow Online', 'ab-theme' ); ?></span>
			</h1>

			<p class="hero__sub">
				<?php esc_html_e( 'I help local service businesses', 'ab-theme' ); ?>
				<strong><?php esc_html_e( 'turn their websites into tireless sales systems', 'ab-theme' ); ?></strong>
				<?php esc_html_e( 'that clearly convey their value, attract the right audience, generate more leads and sales.', 'ab-theme' ); ?>
			</p>

			<div class="hero__actions">
				<div class="hero__buttons">
					<a class="btn-call" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<span class="btn-call__avatar" aria-hidden="true">MA</span>
						<span class="btn-call__text">
							<span class="btn-call__title"><?php esc_html_e( 'Book an Intro Call', 'ab-theme' ); ?></span>
							<span class="btn-call__note"><?php esc_html_e( '15 Minutes · No-Pressure', 'ab-theme' ); ?></span>
						</span>
					</a>

					<?php // WhatsApp number Phase 3 mein Customizer se ayega — tab tak contact page. ?>
					<a class="btn-call btn-call--wa" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
						<span class="btn-call__text">
							<span class="btn-call__title"><?php esc_html_e( 'Need Fast Response? Message Me on WhatsApp', 'ab-theme' ); ?></span>
							<span class="btn-call__note"><?php esc_html_e( 'Friendly chat · Ask questions · Discuss project', 'ab-theme' ); ?></span>
						</span>
						<svg class="btn-call__icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M17.5 14.4c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.26-.46-2.4-1.48-.88-.79-1.48-1.76-1.65-2.06-.17-.3-.02-.46.13-.61.13-.13.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.08-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.8.37-.27.3-1.04 1.02-1.04 2.5 0 1.47 1.07 2.9 1.22 3.1.15.2 2.1 3.2 5.1 4.49.71.31 1.27.49 1.7.63.72.23 1.37.2 1.88.12.57-.09 1.76-.72 2.01-1.42.25-.7.25-1.29.17-1.42-.07-.13-.27-.2-.57-.35zM12.05 21.79h-.01a9.87 9.87 0 0 1-5.03-1.38l-.36-.21-3.74.98 1-3.65-.24-.37a9.86 9.86 0 0 1-1.51-5.26c0-5.45 4.44-9.88 9.9-9.88a9.83 9.83 0 0 1 6.99 2.9 9.82 9.82 0 0 1 2.9 6.99c0 5.45-4.44 9.88-9.89 9.88zm8.42-18.3A11.82 11.82 0 0 0 12.05 0C5.5 0 .16 5.34.16 11.9c0 2.1.55 4.14 1.59 5.95L.06 24l6.3-1.65a11.9 11.9 0 0 0 5.68 1.45h.01c6.55 0 11.89-5.34 11.89-11.9 0-3.18-1.24-6.16-3.47-8.41z"/></svg>
					</a>
				</div>

				<div class="hero__proof">
					<span class="proof__score">5.0/5.0</span>
					<span class="proof__stars" aria-hidden="true"><?php echo $ab_star . $ab_star . $ab_star . $ab_star . $ab_star; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
					<span class="proof__label"><?php esc_html_e( '100+ Happy Clients', 'ab-theme' ); ?></span>
				</div>
			</div>
		</div>

		<div class="showcase" data-showcase>
			<div class="showcase__track">
				<?php foreach ( $ab_slides as $ab_i => $ab_slide ) : ?>
					<div class="showcase__slide<?php echo 0 === $ab_i ? ' is-active' : ''; ?>" role="group" aria-roledescription="slide" aria-label="<?php echo esc_attr( $ab_slide['name'] ); ?>" <?php echo 0 !== $ab_i ? 'aria-hidden="true"' : ''; ?>>
						<div class="browser-frame">
							<div class="frame-bar">
								<span class="frame-dot frame-dot--red"></span>
								<span class="frame-dot frame-dot--yellow"></span>
								<span class="frame-dot frame-dot--green"></span>
								<span class="frame-tab">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0 1 10 0v4"/></svg>
									<?php echo esc_html( $ab_slide['name'] ); ?>
								</span>
							</div>

							<div class="mini-site mini-site--<?php echo esc_attr( $ab_slide['theme'] ); ?>">
								<div class="mini-topbar">
									<span class="mini-logo"><?php echo esc_html( $ab_slide['name'] ); ?></span>
									<span class="mini-nav" aria-hidden="true">Home&nbsp;&nbsp;About&nbsp;&nbsp;Services&nbsp;&nbsp;Contact</span>
								</div>
								<div class="mini-banner">
									<h4><?php echo esc_html( $ab_slide['heading'] ); ?></h4>
									<p><?php echo esc_html( $ab_slide['text'] ); ?></p>
									<span class="mini-btn"><?php echo esc_html( $ab_slide['cta'] ); ?></span>
								</div>
								<div class="mini-row">
									<?php foreach ( $ab_slide['services'] as $ab_service ) : ?>
										<div class="mini-card"><b><?php echo esc_html( $ab_service[0] ); ?></b><?php echo esc_html( $ab_service[1] ); ?></div>
									<?php endforeach; ?>
								</div>
								<div class="mini-strip"><?php echo esc_html( $ab_slide['name'] ); ?></div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="showcase__dots" role="tablist" aria-label="<?php esc_attr_e( 'Showcase projects', 'ab-theme' ); ?>">
				<?php foreach ( $ab_slides as $ab_i => $ab_slide ) : ?>
					<button type="button" class="showcase__dot<?php echo 0 === $ab_i ? ' is-active' : ''; ?>" data-slide="<?php echo esc_attr( $ab_i ); ?>" aria-label="<?php echo esc_attr( sprintf( /* translators: %s: project name. */ __( 'Show project: %s', 'ab-theme' ), $ab_slide['name'] ) ); ?>"></button>
				<?php endforeach; ?>
			</div>
		</div>

	</div>
</section>
