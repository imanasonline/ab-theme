<?php
/**
 * Homepage — Section 11: FAQ.
 *
 * Focused live check (2026-10-21) ki naap: centered
 * "FAQs" (solid navy, koi gradient NAHI), us ke neeche
 * bold sub-heading "Frequently asked by clients" aur
 * supporting line. 7 safed accordion rows, full
 * container width; band halat mein NEELA ghaira +
 * dayein chevron, khulne par GEHRA ghaira + upar
 * chevron; ek waqt mein sirf ek khula (faq.js).
 * Jawabon mein kuch hisay bold hain.
 *
 * Live ki numbering kharab hai (item 2 par "2.", item
 * 3 par ghalat "4.", baqi par koi number NAHI) —
 * refined version mein numbering saaf taur par
 * HATA di gayi hai.
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

$ab_chev = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>';

/*
 * Har jawab: hisso ki list; 'b' => true wala hissa
 * <strong> mein ayega (live par wohi hisay bold hain).
 */
$ab_faqs = array(
	array(
		'q' => __( 'How long does a website project take?', 'ab-theme' ),
		'a' => array(
			array( 't' => __( 'Most projects are completed within ', 'ab-theme' ) ),
			array( 't' => __( '1–2 weeks', 'ab-theme' ), 'b' => true ),
			array( 't' => __( ', depending on the package you choose or the scope of the project and how quickly feedback and content are provided.', 'ab-theme' ) ),
		),
	),
	array(
		'q' => __( 'Do you write the website copy?', 'ab-theme' ),
		'a' => array(
			array( 't' => __( 'Yes. Every package includes ', 'ab-theme' ) ),
			array( 't' => __( 'conversion-focused website copywriting', 'ab-theme' ), 'b' => true ),
			array( 't' => __( '. I research your business, competitors, and ideal customers to create messaging that clearly explains what you do and encourages visitors to take action.', 'ab-theme' ) ),
		),
	),
	array(
		'q' => __( 'What platform do you build websites on?', 'ab-theme' ),
		'a' => array(
			array( 't' => __( 'I build every website using ', 'ab-theme' ) ),
			array( 't' => __( 'WordPress and Elementor V4 atomic elements', 'ab-theme' ), 'b' => true ),
			array( 't' => __( ", giving you a fast, flexible website that's easy to manage and grow. For e-commerce, if the client prefers, then use Shopify also.", 'ab-theme' ) ),
		),
	),
	array(
		'q' => __( 'Can I update the website myself?', 'ab-theme' ),
		'a' => array(
			array( 't' => __( "Yes. Once your website is launched, you'll have full ownership and can easily edit text, images, and pages whenever you need.", 'ab-theme' ) ),
		),
	),
	array(
		'q' => __( 'Do I need to provide the content?', 'ab-theme' ),
		'a' => array(
			array( 't' => __( "No. I'll guide you through a simple discovery process, research your business, and write the website copy for you. If you already have content you'd like to use, I can refine and improve it.", 'ab-theme' ) ),
		),
	),
	array(
		'q' => __( 'How do we get started?', 'ab-theme' ),
		'a' => array(
			array( 't' => __( "Simply book a free discovery call. We'll discuss your business, goals, and which package is the best fit. If we're a good fit, I'll send over a proposal and we can get started.", 'ab-theme' ) ),
		),
	),
	array(
		'q' => __( 'Do you offer website maintenance?', 'ab-theme' ),
		'a' => array(
			array( 't' => __( "Yes. Ongoing maintenance and support are available after launch if you'd like help keeping your website updated, secure, and running smoothly.", 'ab-theme' ) ),
		),
	),
);
?>

<section class="section faq">
	<div class="container">
		<h2 class="section__title"><?php esc_html_e( 'FAQs', 'ab-theme' ); ?></h2>
		<p class="faq__sub"><?php esc_html_e( 'Frequently asked by clients', 'ab-theme' ); ?></p>
		<p class="faq__lead"><?php esc_html_e( 'Still have questions? Here are answers to the ones I get asked most often.', 'ab-theme' ); ?></p>

		<div class="faq-list">
			<?php foreach ( $ab_faqs as $ab_i => $ab_faq ) : ?>
				<?php $ab_pid = 'ab-faq-panel-' . ( $ab_i + 1 ); ?>
				<div class="faq-card">
					<h3 class="faq-card__head">
						<button class="faq-card__q" type="button" aria-expanded="false" aria-controls="<?php echo esc_attr( $ab_pid ); ?>">
							<span><?php echo esc_html( $ab_faq['q'] ); ?></span>
							<span class="faq-card__toggle"><?php echo $ab_chev; // phpcs:ignore WordPress.Security.EscapeOutput -- static SVG markup. ?></span>
						</button>
					</h3>
					<div class="faq-card__panel" id="<?php echo esc_attr( $ab_pid ); ?>" hidden>
						<p>
							<?php
							foreach ( $ab_faq['a'] as $ab_seg ) :
								if ( ! empty( $ab_seg['b'] ) ) :
									?>
									<strong><?php echo esc_html( $ab_seg['t'] ); ?></strong>
									<?php
								else :
									echo esc_html( $ab_seg['t'] );
								endif;
							endforeach;
							?>
						</p>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
