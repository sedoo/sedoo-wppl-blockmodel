<?php

function register_sedoo_blockmodel_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'sedoo_blocks_blockmodel',
        'title'             => __('Sedoo blockmodel'),
        'description'       => __('Ajoute un block blockmodel'),
        'render_callback'   => 'sedoo_blocks_blockmodel_render_callback',
        'enqueue_style'     => plugin_dir_url( __FILE__ ) . 'css/blockmodel.css',
        'category'          => 'sedoo-block-category',
        'icon'              => 'media-text',
        'keywords'          => array( 'blockmodel', 'sedoo' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_sedoo_blockmodel_block_types');
}