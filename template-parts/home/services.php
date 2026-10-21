<?php
/**
 * Homepage — Section 7: Services.
 *
 * Focused live check (2026-10-21) ki naap: centered H2
 * (gradient "work includes...") + centered supporting
 * paragraph, phir 2 column × 3 rows ka grid. Har card:
 * bayein halka-neela tinted square (~55px) mein neela
 * icon, dayein title + description. Cards mein koi
 * link ya arrow NAHI hai. Neeche centered do gradient
 * buttons (Start Your Project / Discuss On WhatsApp).
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_plane = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m22 2-7 20-4-9-9-4Z"/><path d="M22 2 11 13"/></svg>';

$ab_chat = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/></svg>';

$ab_i_layout = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18"/><path d="M9 9v11"/></svg>';

$ab_i_monitor = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2" y="4" width="20" height="13" rx="2"/><path d="M8 21h8"/><path d="M12 17v4"/><path d="M7 8h6"/><path d="M7 11.5h10"/></svg>';

$ab_i_edit = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M17 3a2.83 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"/></svg>';

$ab_i_tools = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>';

$ab_i_search = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><circle cx="11.5" cy="14.5" r="2.6"/><path d="m13.3 16.3 1.7 1.7"/></svg>';

$ab_i_pin = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6"/><path d="M12 17.2s-2.7-2.3-2.7-4.2a2.7 2.7 0 0 1 5.4 0c0 1.9-2.7 4.2-2.7 4.2z"/></svg>';

// Live text ki 2 chhoti spacing ghaltiyan (dohra space,
// chipka hua jumla) refined version mein durust hain.
$ab_services = array(
	array(
		'icon'  => $ab_i_layout,
		'title' => __( 'WordPress Websites for Businesses', 'ab-theme' ),
		'text'  => __( "A custom website that's carefully crafted to present your business the way it deserves, achieve your goals, and convert clients.", 'ab-theme' ),
	),
	array(
		'icon'  => $ab_i_monitor,
		'title' => __( 'Story-Based Copywriting', 'ab-theme' ),
		'text'  => __( "I'll write proven Story-Based copy for your website that clearly conveys your message to your ideal clients and moves them to take action.", 'ab-theme' ),
	),
	array(
		'icon'  => $ab_i_edit,
		'title' => __( 'Website Redesign', 'ab-theme' ),
		'text'  => __( 'A complete website redesign that transforms your outdated site into a modern, high-performing online presence with an improved user experience.', 'ab-theme' ),
	),
	array(
		'icon'  => $ab_i_tools,
		'title' => __( 'Website Maintenance', 'ab-theme' ),
		'text'  => __( 'I provide ongoing website maintenance to keep your website updated, secure, and running smoothly. So you can avoid technical headaches, and focus on serving your customers.', 'ab-theme' ),
	),
	array(
		'icon'  => $ab_i_search,
		'title' => __( 'On-page SEO Foundation', 'ab-theme' ),
		'text'  => __( 'I optimize your website with a solid SEO foundation, including search-friendly structure and on-page best practices. Setting your website up for better visibility while supporting your long-term marketing efforts.', 'ab-theme' ),
	),
	array(
		'icon'  => $ab_i_pin,
		'title' => __( 'Local SEO Setup', 'ab-theme' ),
		'text'  => __( 'I optimize your website for local search by setting up your Google Business Profile and implementing location-focused optimization. Giving your business a stronger foundation to increase local visibility and attract more nearby customers.', 'ab-theme' ),
	),
);
?>

<section class="section services">
	<div class="container">
		<h2 class="section__title">
			<?php esc_html_e( 'My web design', 'ab-theme' ); ?>
			<span class="text-gradient"><?php esc_html_e( 'work includes...', 'ab-theme' ); ?></span>
		</h2>

		<p class="section__lead"><?php esc_html_e( 'From Messaging strategy and copywriting to design, development, and SEO, every detail is thoughtfully crafted to turn your website into a tireless sales system', 'ab-theme' ); ?></p>

		<div class="services-grid">
			<?php foreach ( $ab_services as $ab_service ) : ?>
				<article class="service-card">
					<span class="service-card__icon"><?php echo $ab_service['icon']; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
					<div class="service-card__body">
						<h3><?php echo esc_html( $ab_service['title'] ); ?></h3>
						<p><?php echo esc_html( $ab_service['text'] ); ?></p>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="services__actions">
			<a class="btn btn-primary btn--icon" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
				<?php echo $ab_plane; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
				<?php esc_html_e( 'Start Your Project', 'ab-theme' ); ?>
			</a>
			<a class="btn btn-primary btn--icon" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
				<?php esc_html_e( 'Discuss On WhatsApp', 'ab-theme' ); ?>
				<?php echo $ab_chat; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
			</a>
		</div>
	</div>
</section>
