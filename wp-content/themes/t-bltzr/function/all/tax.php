<?php
function ct_tax_init() {

    //
    register_taxonomy(
        '',
        array(),
        array(
            'label' => '',
            'rewrite' => array( 'slug' => ''),
            'hierarchical' => true,
        )
    );
}
add_action( 'init', 'ct_tax_init' );

