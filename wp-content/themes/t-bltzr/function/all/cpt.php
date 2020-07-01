<?php
function cpt_init() {

    // Références
    $labels = array(
        'name' => 'Références',
        'singular_name' => 'Référence',
        'add_new' => 'Ajouter une référence',
        'add_new_item' => 'Ajouter une nouvelle référence',
        'edit_item' => 'Editer une référence',
        'new_item' => 'Nouvelle référence',
        'all_items' => 'Toutes les références',
        'view_item' => 'Voir référence',
        'search_items' => 'Chercher une référence',
        'not_found' =>  'Aucune référence trouvée',
        'not_found_in_trash' => 'Aucune référence trouvée dans la corbeille',
        'menu_name' => 'Références'
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'reference'),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-star-filled',
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'revisions')
    );
    register_post_type('reference', $args);

}
add_action( 'init', 'cpt_init' );



