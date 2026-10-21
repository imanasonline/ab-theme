<?php
/**
 * Homepage — Section 6: Featured Testimonial.
 *
 * Focused live check (2026-10-21) ki naap: do column —
 * bayein intro (~40%): H2 (gradient "Website
 * Experience"), grey subtext, 4 chehron ka avatar stack
 * + "5.0/5.0" rating + "100+ HAPPY CLIENTS", neeche
 * gradient wali quote line. Dayein (~60%): Fiverr-style
 * review card — avatar + naam + mulk, star + date wali
 * line, divider, review text (2 jumlay yellow
 * highlighter se numaya), neeche 3 rating rows.
 *
 * Review abhi live site wala sample hai — Reviews CPT
 * ane par Anas ke asal reviews se badal jayega.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_star = '<svg viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"/></svg>';

$ab_stars5 = $ab_star . $ab_star . $ab_star . $ab_star . $ab_star;

$ab_faces = array( 'JD', 'MK', 'AS', 'TP' );

$ab_ratings = array(
	__( 'Communication With Seller', 'ab-theme' ),
	__( 'Service as Described', 'ab-theme' ),
	__( 'Buy Again or Recommend', 'ab-theme' ),
);
?>

<section class="section featured">
	<div class="container featured__grid">

		<div class="featured__intro">
			<h2 class="featured__title">
				<?php esc_html_e( 'A', 'ab-theme' ); ?>
				<span class="text-gradient"><?php esc_html_e( 'Website Experience', 'ab-theme' ); ?></span>
				<?php esc_html_e( 'Worth Talking About', 'ab-theme' ); ?>
			</h2>

			<p class="featured__sub"><?php esc_html_e( "Nothing means more to me than happy clients. Here's what one had to say about working with me.", 'ab-theme' ); ?></p>

			<div class="featured__proof">
				<span class="face-stack" aria-hidden="true">
					<?php foreach ( $ab_faces as $ab_face ) : ?>
						<span><?php echo esc_html( $ab_face ); ?></span>
					<?php endforeach; ?>
				</span>
				<span class="featured__proof-text">
					<span class="featured__score">
						<?php esc_html_e( '5.0/5.0', 'ab-theme' ); ?>
						<span class="tstars"><?php echo $ab_stars5; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
					</span>
					<span class="featured__clients"><strong><?php esc_html_e( '100+', 'ab-theme' ); ?></strong> <?php esc_html_e( 'HAPPY CLIENTS', 'ab-theme' ); ?></span>
				</span>
			</div>

			<p class="featured__quote">
				<?php esc_html_e( "I don't consider a project finished until you're", 'ab-theme' ); ?>
				<span class="text-gradient"><?php esc_html_e( 'genuinely happy with the outcome.', 'ab-theme' ); ?></span>
			</p>
		</div>

		<article class="tcard">
			<header class="tcard__head">
				<span class="tcard__avatar" aria-hidden="true">JD</span>
				<span>
					<span class="tcard__name"><?php esc_html_e( 'James Daniels', 'ab-theme' ); ?></span>
					<span class="tcard__loc"><?php esc_html_e( '🇺🇸 United States', 'ab-theme' ); ?></span>
				</span>
			</header>

			<div class="tcard__meta">
				<span class="tstars tstars--sm"><?php echo $ab_star; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
				<?php esc_html_e( '5 · Dec 3, 2025', 'ab-theme' ); ?>
			</div>

			<div class="tcard__body">
				<p>
					<?php esc_html_e( "Working with Abdul has been the best experience I've had on Fiverr in the 6 entire years I've been on this platform. Even before the order was placed, and all throughout, Abdul delivered a best-in-class customer experience and ensured satisfaction was guaranteed!", 'ab-theme' ); ?>
					<mark><?php esc_html_e( 'Abdul delivered far beyond my wildest expectations for this project and I can tell he really treated my website as if it were his own.', 'ab-theme' ); ?></mark>
					<?php esc_html_e( 'Because of the sheer quality of his work and design, I will use this web design for my business to years to come. It almost feels wrong to have gotten such great work for so cheap but', 'ab-theme' ); ?>
					<mark><?php esc_html_e( 'I hope my review and tip will reflect my gratitude for this service.', 'ab-theme' ); ?></mark>
					<?php esc_html_e( 'Thank you, and I look forward to our future work', 'ab-theme' ); ?>
				</p>
			</div>

			<div class="tcard__ratings">
				<?php foreach ( $ab_ratings as $ab_rating ) : ?>
					<div class="tcard__rating">
						<span><?php echo esc_html( $ab_rating ); ?></span>
						<span class="tstars"><?php echo $ab_stars5; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
					</div>
				<?php endforeach; ?>
			</div>
		</article>

	</div>
</section>
