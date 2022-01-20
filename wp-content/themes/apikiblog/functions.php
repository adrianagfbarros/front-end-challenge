<?php 

    function apiki_files() {
        wp_enqueue_style('apiki_styles', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'apiki_files');

?>