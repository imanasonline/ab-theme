<?php
/**
 * Homepage — Section 8: Review Wall.
 *
 * Focused live checks (2026-10-21) ki naap: centered H2
 * (gradient "More Clients Had To Say") + supporting
 * line, phir 3-column masonry deewar: 1 chhota card,
 * 6 mukammal review cards (avatar photo ya rangdaar
 * initial wala ghaira, naam, flag wala mulk, 5 sitaray,
 * yellow-highlight jumlon wala text, kuch par date) aur
 * darmiyan mein 1 portrait YouTube Shorts tile
 * ("Client Feedback | John Harden"). Neeche koi button
 * NAHI hai.
 *
 * Reviews abhi live site walay samples hain — Reviews
 * CPT ane par Anas ke asal reviews se badal jayenge.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_star = '<svg viewBox="0 0 24 24" aria-hidden="true"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26"/></svg>';

$ab_stars5 = $ab_star . $ab_star . $ab_star . $ab_star . $ab_star;

$ab_person = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21c0-4 3.6-6.5 8-6.5s8 2.5 8 6.5v.5H4z"/></svg>';

// Har review: naam (null ho sakta hai), mulk, date,
// avatar (initial + rang, ya photo), aur text ke hisay —
// 'm' => true walay hisay yellow highlight mein ate hain.
$ab_reviews = array(
	array( // Chhota card — sirf avatar, mulk aur sitaray.
		'name'    => null,
		'country' => __( '🇺🇸 United States', 'ab-theme' ),
		'date'    => null,
		'avatar'  => array( 'type' => 'photo' ),
		'parts'   => array(),
	),
	array(
		'name'    => 'PlayerBased',
		'country' => __( '🇺🇸 United States', 'ab-theme' ),
		'date'    => __( 'Jan 12, 2026', 'ab-theme' ),
		'avatar'  => array( 'type' => 'photo' ),
		'parts'   => array(
			array( 't' => __( "Fantastic value for the price. ", 'ab-theme' ) ),
			array( 't' => __( "You really can't go wrong with Abdul's services.", 'ab-theme' ), 'm' => true ),
			array( 't' => __( " Invest in this service and the results will speak for themselves. Huge increases in reach, engagement, and likes. I will continue to use Abdul's services going forward, as this is the best service I've gotten after trying multiple gigs here on Fiverr.", 'ab-theme' ) ),
		),
	),
	array(
		'name'    => 'Jor Dann',
		'country' => __( '🇪🇹 Ethiopia', 'ab-theme' ),
		'date'    => __( 'Jun 14, 2026', 'ab-theme' ),
		'avatar'  => array( 'type' => 'initial', 'letter' => 'J', 'bg' => '#7b2d43', 'color' => '#ffffff' ),
		'parts'   => array(
			array( 't' => __( 'There was errors in my store, and ', 'ab-theme' ) ),
			array( 't' => __( 'he fixed it well. He is dedicated.', 'ab-theme' ), 'm' => true ),
			array( 't' => __( ' I highly recommend him👍👍👍', 'ab-theme' ) ),
		),
	),
	array( // Video tile isi jagah ata hai (neeche loop mein).
		'video' => true,
	),
	array(
		'name'    => 'Jamesdaniels',
		'country' => null,
		'date'    => __( 'May 28, 2026', 'ab-theme' ),
		'avatar'  => array( 'type' => 'initial', 'letter' => 'J', 'bg' => '#bfe8cf', 'color' => '#14532d' ),
		'parts'   => array(
			array( 't' => __( 'Very patient and professional. ', 'ab-theme' ) ),
			array( 't' => __( 'He worked with me every step of the way until I had something I am 100% satisfied with!', 'ab-theme' ), 'm' => true ),
		),
	),
	array(
		'name'    => 'Rifqi Israfil',
		'country' => __( '🇸🇬 Singapore', 'ab-theme' ),
		'date'    => null,
		'avatar'  => array( 'type' => 'initial', 'letter' => 'R', 'bg' => '#fdf0c0', 'color' => '#7a6210' ),
		'parts'   => array(
			array( 't' => __( "I have worked with Abdul on multiple gigs, and he has delivered on time and as promised ", 'ab-theme' ) ),
			array( 't' => __( "he has given me what I've asked for and some.", 'ab-theme' ), 'm' => true ),
			array( 't' => __( " I highly recommend his services to anyone looking to create their own Shopify store, ", 'ab-theme' ) ),
			array( 't' => __( "he's knowledgeable and easy to communicate with. Once again do consider Abdul.", 'ab-theme' ), 'm' => true ),
		),
	),
	array(
		'name'    => 'Ssmaro',
		'country' => __( '🇲🇦 Morocco', 'ab-theme' ),
		'date'    => null,
		'avatar'  => array( 'type' => 'initial', 'letter' => 'S', 'bg' => '#fdf0c0', 'color' => '#7a6210' ),
		'parts'   => array(
			array( 't' => __( 'I had a good experience working with this seller, ', 'ab-theme' ) ),
			array( 't' => __( 'the work needed to be done in short time frame and the seller delivered.', 'ab-theme' ), 'm' => true ),
			array( 't' => __( ' I would advise anyone to work with him 👍🏻', 'ab-theme' ) ),
		),
	),
	array(
		'name'    => 'Patrykbujalski',
		'country' => __( '🇨🇦 Canada', 'ab-theme' ),
		'date'    => null,
		'avatar'  => array( 'type' => 'photo' ),
		'parts'   => array(
			array( 't' => __( 'very easy to communicate with and ', 'ab-theme' ) ),
			array( 't' => __( 'finished work within timely fashion', 'ab-theme' ), 'm' => true ),
		),
	),
);
?>

<section class="section reviews">
	<div class="container">
		<h2 class="section__title">
			<?php esc_html_e( 'Further, See What', 'ab-theme' ); ?>
			<span class="text-gradient"><?php esc_html_e( 'More Clients Had To Say', 'ab-theme' ); ?></span>
		</h2>

		<p class="section__lead"><?php esc_html_e( "The best proof of my work isn't what I say. It's what my clients experience after project delivery.", 'ab-theme' ); ?></p>

		<div class="reviews-wall">
			<?php foreach ( $ab_reviews as $ab_review ) : ?>
				<?php if ( ! empty( $ab_review['video'] ) ) : ?>
					<div class="video-tile">
						<iframe
							src="https://www.youtube-nocookie.com/embed/4g5_jsyNBOE"
							title="<?php esc_attr_e( 'Client Feedback | John Harden', 'ab-theme' ); ?>"
							loading="lazy"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>
					<?php continue; ?>
				<?php endif; ?>

				<article class="rcard">
					<header class="rcard__head">
						<?php if ( 'photo' === $ab_review['avatar']['type'] ) : ?>
							<span class="rcard__avatar rcard__avatar--photo"><?php echo $ab_person; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
						<?php else : ?>
							<span class="rcard__avatar" style="background: <?php echo esc_attr( $ab_review['avatar']['bg'] ); ?>; color: <?php echo esc_attr( $ab_review['avatar']['color'] ); ?>"><?php echo esc_html( $ab_review['avatar']['letter'] ); ?></span>
						<?php endif; ?>
						<span class="rcard__who">
							<?php if ( $ab_review['name'] ) : ?>
								<span class="rcard__name"><?php echo esc_html( $ab_review['name'] ); ?></span>
							<?php endif; ?>
							<?php if ( $ab_review['country'] ) : ?>
								<span class="rcard__country"><?php echo esc_html( $ab_review['country'] ); ?></span>
							<?php endif; ?>
						</span>
					</header>

					<span class="tstars rcard__stars"><?php echo $ab_stars5; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>

					<?php if ( ! empty( $ab_review['parts'] ) ) : ?>
						<p class="rcard__text"><?php
						foreach ( $ab_review['parts'] as $ab_part ) {
							if ( ! empty( $ab_part['m'] ) ) {
								echo '<mark>' . esc_html( $ab_part['t'] ) . '</mark>'; // phpcs:ignore WordPress.Security.EscapeOutput -- escaped above.
							} else {
								echo esc_html( $ab_part['t'] );
							}
						}
						?></p>
					<?php endif; ?>

					<?php if ( $ab_review['date'] ) : ?>
						<span class="rcard__date"><?php echo esc_html( $ab_review['date'] ); ?></span>
					<?php endif; ?>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>
