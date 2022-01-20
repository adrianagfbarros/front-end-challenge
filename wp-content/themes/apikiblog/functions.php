<?php 

    function apiki_files() {

        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_script('app_js', get_template_directory_uri() . '/app.js', true);

    }

    add_action('wp_enqueue_scripts', 'apiki_files');

?>