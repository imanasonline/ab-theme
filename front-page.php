<?php
/**
 * Homepage template.
 *
 * WordPress site ke front page ke liye khud is file ko
 * chunta hai. Sections yahan EK EK karke judte jayenge —
 * har section apni template part mein (template-parts/home/).
 *
 * Tartib (Basit ki live site wali):
 *  1. Hero + rotating showcase   ← Phase 2, Step 1
 *  2. Trust strip                ← agla step
 *  3. ... baqi 11 sections isi tartib se
 *
 * @package AB_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Seedha access band.
}

get_header();

get_template_part( 'template-parts/home/hero' );

get_footer();
