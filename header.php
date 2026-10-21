<?php
/**
 * AB Custom Theme — header template.
 * Har page ke upar wala hissa: document ki shuruaat, site ki
 * pehchan (logo ya site name), primary menu aur CTA button.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
	<div class="container site-header__inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<?php
				// Live logo jaisa: gol nishan + naam (pehla hissa halka, baqi bold).
				$ab_name  = (string) get_bloginfo( 'name' );
				$ab_words = preg_split( '/\s+/', trim( $ab_name ) );
				$ab_first = $ab_words ? (string) $ab_words[0] : '';
				$ab_rest  = count( (array) $ab_words ) > 1 ? implode( ' ', array_slice( (array) $ab_words, 1 ) ) : '';
				$ab_ini   = strtoupper( mb_substr( $ab_first, 0, 1 ) . ( $ab_rest ? mb_substr( $ab_rest, 0, 1 ) : '' ) );
				?>
				<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="site-brand__avatar" aria-hidden="true"><?php echo esc_html( $ab_ini ); ?></span>
					<span class="site-title"><span class="site-title__light"><?php echo esc_html( $ab_first ); ?></span><?php echo $ab_rest ? ' ' . esc_html( $ab_rest ) : ''; ?></span>
				</a>
			<?php endif; ?>
		</div>

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav class="main-nav" aria-label="<?php esc_attr_e( 'Primary Menu', 'ab-theme' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'main-nav__list',
						'depth'          => 1,
					)
				);
				?>
			</nav>
		<?php endif; ?>

		<a class="btn btn-primary site-header__cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
			<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M22 2 11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
			<?php esc_html_e( 'Get a Free Quote', 'ab-theme' ); ?>
		</a>
	</div>
</header>

<main id="content" class="site-main">
