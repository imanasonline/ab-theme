<?php
/**
 * AB Custom Theme — footer template.
 * Har page ke neeche wala hissa: site ki pehchan, footer menu
 * aur copyright line. Business ki tafseel (phone, email,
 * socials) Phase 3 mein Customizer se ayegi.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_tagline = get_bloginfo( 'description' );
?>
</main>

<footer class="site-footer">
	<div class="container site-footer__inner">
		<div class="site-footer__brand">
			<span class="site-footer__title"><?php bloginfo( 'name' ); ?></span>
			<?php if ( $ab_tagline ) : ?>
				<p class="site-footer__tagline"><?php echo esc_html( $ab_tagline ); ?></p>
			<?php endif; ?>
		</div>

		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav class="footer-nav" aria-label="<?php esc_attr_e( 'Footer Menu', 'ab-theme' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'footer',
						'container'      => false,
						'menu_class'     => 'footer-nav__list',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>
	</div>

	<div class="site-footer__bar">
		<div class="container">
			<p class="site-footer__copy">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>.
				<?php esc_html_e( 'All rights reserved.', 'ab-theme' ); ?>
			</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
