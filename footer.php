<?php
/**
 * AB Custom Theme — footer template.
 *
 * Focused live check (2026-10-21) ki naap par dobara
 * bana hua footer: upar centered tagline band, phir
 * 3 columns (photo avatar + bio + hara availability
 * link / "Help Businesses With" links / "Explore
 * More" links), neeche divider ke baad bottom bar —
 * copyright bayein, TERMS / PRIVACY / DISCLAIMER
 * darmiyan, social buttons dayein.
 *
 * Live par legal alfaaz plain text hain (pages 404
 * hain) — yahan woh asal links hain; pages content
 * phase mein banengi. Social URLs aur photo abhi
 * placeholders hain — Anas ke apne links/photo
 * content phase mein lagengi (Customizer se
 * editable hoga, plan ke mutabiq).
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_i_linkedin = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20.45 20.45h-3.55v-5.57c0-1.33-.03-3.04-1.85-3.04-1.86 0-2.14 1.45-2.14 2.94v5.67H9.35V9h3.41v1.56h.05c.47-.9 1.63-1.85 3.36-1.85 3.6 0 4.27 2.37 4.27 5.45v6.29zM5.34 7.43a2.06 2.06 0 1 1 0-4.12 2.06 2.06 0 0 1 0 4.12zM7.12 20.45H3.56V9h3.56v11.45z"/></svg>';

$ab_i_facebook = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M13.5 21.9v-7.2h2.42l.36-2.8H13.5V10.1c0-.81.23-1.36 1.4-1.36h1.5V6.24c-.26-.03-1.15-.11-2.19-.11-2.17 0-3.65 1.32-3.65 3.75v2.02H8.13v2.8h2.43v7.2a10 10 0 0 0 2.94 0z"/></svg>';

$ab_i_instagram = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><rect x="2.5" y="2.5" width="19" height="19" rx="5.5"/><circle cx="12" cy="12" r="4.2"/><circle cx="17.4" cy="6.6" r="0.6" fill="currentColor" stroke="none"/></svg>';

$ab_i_youtube = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.95-2C18.88 4 12 4 12 4s-6.88 0-8.59.46a2.78 2.78 0 0 0-1.95 1.96A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33 2.78 2.78 0 0 0 1.95 2c1.71.46 8.59.46 8.59.46s6.88 0 8.59-.46a2.78 2.78 0 0 0 1.95-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33zM9.75 15.02V8.48l5.75 3.27-5.75 3.27z"/></svg>';

$ab_person = '<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4.5 20.5c1.3-3.3 4.1-5 7.5-5s6.2 1.7 7.5 5"/></svg>';

$ab_services_links = array(
	array( __( 'web design for local service businesses', 'ab-theme' ), '/web-design-for-local-service-businesses/' ),
	array( __( 'StoryBased Website Copy', 'ab-theme' ), '/website-copy/' ),
	array( __( 'Website On-page SEO', 'ab-theme' ), '/website-on-page-seo/' ),
	array( __( 'Website Maintenance/care', 'ab-theme' ), '/website-care/' ),
	array( __( 'Local SEO Setup', 'ab-theme' ), '/local-seo-setup/' ),
);

$ab_explore_links = array(
	array( __( 'about', 'ab-theme' ), '/about/' ),
	array( __( 'portfolio', 'ab-theme' ), '/portfolio/' ),
	array( __( 'testimonials', 'ab-theme' ), '/testimonials/' ),
	array( __( 'contact', 'ab-theme' ), '/contact/' ),
);

$ab_socials = array(
	array( __( 'LinkedIn', 'ab-theme' ), $ab_i_linkedin ),
	array( __( 'Facebook', 'ab-theme' ), $ab_i_facebook ),
	array( __( 'Instagram', 'ab-theme' ), $ab_i_instagram ),
	array( __( 'YouTube', 'ab-theme' ), $ab_i_youtube ),
);
?>
</main>

<footer class="site-footer">
	<div class="container">
		<p class="site-footer__band"><?php esc_html_e( 'Strategic Website design that helps local service businesses grow online', 'ab-theme' ); ?></p>

		<div class="site-footer__cols">
			<div class="site-footer__col site-footer__col--about">
				<span class="site-footer__avatar">
					<?php echo $ab_person; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
				</span>
				<p class="site-footer__bio"><?php esc_html_e( 'I design and build conversion-focused websites that clearly communicate your value, earn trust, and turn the right visitors into clients through strategic structure, compelling copy, and SEO-ready foundations.', 'ab-theme' ); ?></p>
				<a class="site-footer__available" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>"><?php esc_html_e( 'Available for freelance projects', 'ab-theme' ); ?></a>
			</div>

			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'Help Businesses With', 'ab-theme' ); ?></h3>
				<ul class="site-footer__links">
					<?php foreach ( $ab_services_links as $ab_link ) : ?>
						<li><a href="<?php echo esc_url( home_url( $ab_link[1] ) ); ?>"><?php echo esc_html( $ab_link[0] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>

			<div class="site-footer__col">
				<h3 class="site-footer__heading"><?php esc_html_e( 'Explore More', 'ab-theme' ); ?></h3>
				<ul class="site-footer__links">
					<?php foreach ( $ab_explore_links as $ab_link ) : ?>
						<li><a href="<?php echo esc_url( home_url( $ab_link[1] ) ); ?>"><?php echo esc_html( $ab_link[0] ); ?></a></li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>

		<div class="site-footer__bar">
			<p class="site-footer__copy">&copy; 2018-<?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></p>

			<ul class="site-footer__legal">
				<li><a href="<?php echo esc_url( home_url( '/terms/' ) ); ?>"><?php esc_html_e( 'TERMS', 'ab-theme' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/privacy/' ) ); ?>"><?php esc_html_e( 'PRIVACY', 'ab-theme' ); ?></a></li>
				<li><a href="<?php echo esc_url( home_url( '/disclaimer/' ) ); ?>"><?php esc_html_e( 'DISCLAIMER', 'ab-theme' ); ?></a></li>
			</ul>

			<ul class="site-footer__socials">
				<?php foreach ( $ab_socials as $ab_social ) : ?>
					<li>
						<a href="#" aria-label="<?php echo esc_attr( $ab_social[0] ); ?>">
							<?php echo $ab_social[1]; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
