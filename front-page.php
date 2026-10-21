<?php
/**
 * Homepage template.
 *
 * WordPress site ke front page ke liye khud is file ko
 * chunta hai. Sections yahan EK EK karke judte jayenge —
 * har section apni template part mein (template-parts/home/).
 *
 * Tartib (Basit ki live site wali):
 *  1. Hero + rotating showcase   ← Phase 2, Step 1 ✅
 *  2. Trust strip                ← Phase 2, Step 2 ✅
 *  3. Pain points                ← Phase 2, Step 3 ✅
 *  4. Benefits                   ← Phase 2, Step 4 ✅
 *  5. Portfolio preview          ← Phase 2, Step 5 ✅
 *  6. Featured testimonial       ← Phase 2, Step 6
 *  7. ... baqi sections isi tartib se
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

get_header();

get_template_part( 'template-parts/home/hero' );

get_template_part( 'template-parts/home/trust-strip' );

get_template_part( 'template-parts/home/pain-points' );

get_template_part( 'template-parts/home/benefits' );

get_template_part( 'template-parts/home/work-preview' );

get_template_part( 'template-parts/home/featured-testimonial' );

get_footer();
