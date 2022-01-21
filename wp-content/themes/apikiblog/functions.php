<?php 

    function apiki_files() {

        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_script('app_js', get_template_directory_uri() . '/app.js', true);

    }

    add_action('wp_enqueue_scripts', 'apiki_files');

    function get_apiki_posts() {
        
        $response = wp_remote_get('https://blog.apiki.com/wp-json/wp/v2/posts?_embed&categories=518');

        if( is_array($response)) {

            $header = $response['headers'];

            $body = $response['body'];

            $data = json_decode($body);

        }

        if( !is_wp_error( $data )) {

            echo '<ul>';
        
            foreach( $data as $rest_post ) {
        
                echo '<h2>'. $rest_post->title->rendered . '</h2><p>' . $rest_post->excerpt->rendered . '</p>';
                
                
            }
        }
    
    }

    add_action('wp_head', 'get_apiki_posts');

?>