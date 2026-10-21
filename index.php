<?php
/**
 * AB Custom Theme — bunyadi template (fallback).
 * Jab tak kisi view ka apna template (front-page.php, page.php,
 * single.php waghera) na bane, WordPress yehi file istemal
 * karta hai. Demo hero sirf tokens ki jaanch ke liye hai —
 * Phase 2 mein homepage ke asal sections is ki jagah lenge.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

get_header();
?>

<section class="container" style="padding-top: var(--section-pad); padding-bottom: var(--section-pad); text-align: center;">
	<p style="color: var(--color-green-dark); font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; font-size: var(--fs-small);">
		<?php esc_html_e( 'AB Custom Theme — Active (v0.11.0)', 'ab-theme' ); ?>
	</p>
	<h1>
		<?php esc_html_e( 'Theme ki bunyad', 'ab-theme' ); ?>
		<span class="text-gradient"><?php esc_html_e( 'tayyar hai.', 'ab-theme' ); ?></span>
	</h1>
	<p style="max-width: 42rem; margin-inline: auto; color: var(--color-muted);">
		<?php esc_html_e( 'Ye sada safha is baat ka saboot hai ke hamari apni theme chal rahi hai — rang, gradient aur spacing design tokens se arahe hain. Upar header aur neeche footer bhi ab theme se arahe hain.', 'ab-theme' ); ?>
	</p>
	<p>
		<a class="btn btn-primary" href="<?php echo esc_url( admin_url() ); ?>">
			<?php esc_html_e( 'WordPress Dashboard', 'ab-theme' ); ?>
		</a>
	</p>

	<?php if ( have_posts() ) : ?>
		<hr style="border: none; border-top: 1px solid var(--color-border); margin: var(--space-6) 0 var(--space-5);">
		<div style="text-align: left; max-width: 42rem; margin-inline: auto;">
			<?php
			while ( have_posts() ) :
				the_post();
				?>
				<article <?php post_class(); ?>>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</article>
				<?php
			endwhile;
			?>
		</div>
	<?php endif; ?>
</section>

<?php
get_footer();
