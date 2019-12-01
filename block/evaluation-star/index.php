<?php
/**
 * @package snow-monkey-blocks
 * @author inc2734
 * @license GPL-2.0+
 */

$asset = include( SNOW_MONKEY_BLOCKS_DIR_PATH . '/dist/block/evaluation-star/editor.asset.php' );

wp_register_script(
	'snow-monkey-blocks/evaluation-star/editor',
	SNOW_MONKEY_BLOCKS_DIR_URL . '/dist/block/evaluation-star/editor.js',
	array_merge( $asset['dependencies'], [ 'snow-monkey-blocks-editor' ] ),
	filemtime( SNOW_MONKEY_BLOCKS_DIR_PATH . '/dist/block/evaluation-star/editor.js' ),
	true
);

wp_register_style(
	'snow-monkey-blocks/evaluation-star',
	SNOW_MONKEY_BLOCKS_DIR_URL . '/dist/block/evaluation-star/front.css',
	[ 'snow-monkey-blocks' ],
	filemtime( SNOW_MONKEY_BLOCKS_DIR_PATH . '/dist/block/evaluation-star/front.css' )
);

register_block_type(
	'snow-monkey-blocks/evaluation-star',
	[
		'style'         => 'snow-monkey-blocks/evaluation-star',
		'editor_script' => 'snow-monkey-blocks/evaluation-star/editor',
	]
);