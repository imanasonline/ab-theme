<?php
/**
 * Homepage — Section 5: Portfolio Preview.
 *
 * Focused live check (2026-10-21) ki naap: centered H2
 * (gradient "built 100s of websites" AUR "business
 * owners" par), neeche bareek divider + centered
 * paragraph, phir 3 browser-frame cards — rangdaar mac
 * dots, grey pill tab, andar website ki lambi screenshot
 * (hover par upar scroll hoti hai), neeche navy bar
 * mein dayein taraf naam + safed gol "»" button.
 * Neeche centered "View More Work" button.
 *
 * Cards abhi sample projects hain — Projects CPT ane
 * par asal projects se badal jayenge.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_plane = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>';

$ab_go = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 17 5-5-5-5"/><path d="m13 17 5-5-5-5"/></svg>';

$ab_works = array(
	array(
		'name' => 'Wellsy Outdoor Services',
		'tab'  => 'Wellsy Outdoor Services',
		'bar'  => '#166534',
	),
	array(
		'name' => 'Tina + Jenna',
		'tab'  => 'https://tinaandjenna.com/',
		'bar'  => '#111827',
	),
	array(
		'name' => 'Alaker Sweets',
		'tab'  => 'Alaker Sweets',
		'bar'  => '#b45309',
	),
);
?>

<section class="section work-preview">
	<div class="container">
		<h2 class="section__title">
			<?php esc_html_e( "For the past six years, I've", 'ab-theme' ); ?>
			<span class="text-gradient"><?php esc_html_e( 'built 100s of websites', 'ab-theme' ); ?></span>
			<?php esc_html_e( 'for', 'ab-theme' ); ?>
			<span class="text-gradient"><?php esc_html_e( 'business owners', 'ab-theme' ); ?></span>
			<?php esc_html_e( 'just like you', 'ab-theme' ); ?>
		</h2>

		<hr class="work__rule" aria-hidden="true">

		<p class="work__lead"><?php esc_html_e( "I understand that a successful website isn't just about great design, it's about clear messaging, strategic structure, and being easy to find when local customers are searching. That's why every website I build combines conversion-focused design, strategic website copy, on-page SEO, and local SEO foundations to help businesses earn trust, generate more inquiries, and support long-term growth.", 'ab-theme' ); ?></p>

		<div class="work-grid">
			<?php foreach ( $ab_works as $ab_work ) : ?>
				<a class="work-card" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">
					<span class="work-card__bar">
						<span class="frame-dot frame-dot--red"></span>
						<span class="frame-dot frame-dot--yellow"></span>
						<span class="frame-dot frame-dot--green"></span>
						<span class="work-card__tab"><?php echo esc_html( $ab_work['tab'] ); ?></span>
					</span>

					<span class="work-card__shot">
						<span class="work-shot" style="--shot: <?php echo esc_attr( $ab_work['bar'] ); ?>">
							<span class="work-shot__topbar"><?php echo esc_html( $ab_work['name'] ); ?></span>
							<span class="work-shot__hero">
								<span class="work-shot__line work-shot__line--lg"></span>
								<span class="work-shot__line work-shot__line--md"></span>
								<span class="work-shot__pill"></span>
							</span>
							<span class="work-shot__row">
								<span class="work-shot__cell"></span>
								<span class="work-shot__cell"></span>
							</span>
							<span class="work-shot__band"></span>
							<span class="work-shot__row">
								<span class="work-shot__cell"></span>
								<span class="work-shot__cell"></span>
							</span>
						</span>
					</span>

					<span class="work-card__foot">
						<span class="work-card__name"><?php echo esc_html( $ab_work['name'] ); ?></span>
						<span class="work-card__go"><?php echo $ab_go; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
					</span>
				</a>
			<?php endforeach; ?>
		</div>

		<div class="work__cta">
			<a class="btn btn-primary btn--icon" href="<?php echo esc_url( home_url( '/portfolio/' ) ); ?>">
				<?php echo $ab_plane; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
				<?php esc_html_e( 'View More Work', 'ab-theme' ); ?>
			</a>
		</div>
	</div>
</section>
