<?php
/**
 * @package snow-monkey-blocks
 * @author inc2734
 * @license GPL-2.0+
 */

/**
 * style
 */
wp_register_style(
	'snow-monkey-blocks/alert',
	SNOW_MONKEY_BLOCKS_DIR_URL . '/dist/block/alert/style.css',
	[ 'snow-monkey-blocks' ],
	filemtime( SNOW_MONKEY_BLOCKS_DIR_PATH . '/dist/block/alert/style.css' )
);

/**
 * editor_script
 */
$asset = include( SNOW_MONKEY_BLOCKS_DIR_PATH . '/dist/block/alert/editor.asset.php' );
wp_register_script(
	'snow-monkey-blocks/alert/editor',
	SNOW_MONKEY_BLOCKS_DIR_URL . '/dist/block/alert/editor.js',
	array_merge( $asset['dependencies'], [ 'snow-monkey-blocks-editor' ] ),
	filemtime( SNOW_MONKEY_BLOCKS_DIR_PATH . '/dist/block/alert/editor.js' ),
	true
);

/**
 * editor_style
 */
wp_register_style(
	'snow-monkey-blocks/alert/editor',
	SNOW_MONKEY_BLOCKS_DIR_URL . '/dist/block/alert/editor.css',
	[ 'snow-monkey-blocks-editor' ],
	filemtime( SNOW_MONKEY_BLOCKS_DIR_PATH . '/dist/block/alert/editor.css' )
);

register_block_type(
	'snow-monkey-blocks/alert',
	[
		'style'         => ! is_admin() ? 'snow-monkey-blocks/alert' : null,
		'editor_script' => 'snow-monkey-blocks/alert/editor',
		'editor_style'  => 'snow-monkey-blocks/alert/editor',
	]
);

/**
 * excerpt_allowed_blocks
 */
add_filter(
	'excerpt_allowed_blocks',
	function( $allowed_blocks ) {
		return array_merge(
			$allowed_blocks,
			[
				'snow-monkey-blocks/alert',
			]
		);
	}
);
