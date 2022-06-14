<?php
/**
 * Block Styles
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_style/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Kit-One 1.0
 */

if ( function_exists( 'register_block_style' ) ) {
	/**
	 * Register block styles.
	 *
	 * @since Kit-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_register_block_styles() {
		// Columns: Overlap.
		register_block_style(
			'core/columns',
			array(
				'name'  => 'kitone-columns-overlap',
				'label' => esc_html__( 'Overlap', 'kitone' ),
			)
		);

		// Cover: Borders.
		register_block_style(
			'core/cover',
			array(
				'name'  => 'kitone-border',
				'label' => esc_html__( 'Borders', 'kitone' ),
			)
		);

		// Group: Borders.
		register_block_style(
			'core/group',
			array(
				'name'  => 'kitone-border',
				'label' => esc_html__( 'Borders', 'kitone' ),
			)
		);

		// Image: Borders.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kitone-border',
				'label' => esc_html__( 'Borders', 'kitone' ),
			)
		);

		// Image: Frame.
		register_block_style(
			'core/image',
			array(
				'name'  => 'kitone-image-frame',
				'label' => esc_html__( 'Frame', 'kitone' ),
			)
		);

		// Latest Posts: Dividers.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'kitone-latest-posts-dividers',
				'label' => esc_html__( 'Dividers', 'kitone' ),
			)
		);

		// Latest Posts: Borders.
		register_block_style(
			'core/latest-posts',
			array(
				'name'  => 'kitone-latest-posts-borders',
				'label' => esc_html__( 'Borders', 'kitone' ),
			)
		);

		// Media & Text: Borders.
		register_block_style(
			'core/media-text',
			array(
				'name'  => 'kitone-border',
				'label' => esc_html__( 'Borders', 'kitone' ),
			)
		);

		// Separator: Thick.
		register_block_style(
			'core/separator',
			array(
				'name'  => 'kitone-separator-thick',
				'label' => esc_html__( 'Thick', 'kitone' ),
			)
		);

		// Social icons: Dark gray color.
		register_block_style(
			'core/social-links',
			array(
				'name'  => 'kitone-social-icons-color',
				'label' => esc_html__( 'Dark gray', 'kitone' ),
			)
		);
	}
	add_action( 'init', 'twenty_twenty_one_register_block_styles' );
}
