<?php 

    class Puc {


        public function __construct() {
            add_action('wp_enqueue_scripts', [$this, 'load_assets']);

            add_filter('show_admin_bar', '__return_false');
        }

        public static function load_assets(){

            wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js');
            wp_enqueue_style('fontawesome-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' );
            wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' );
            wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js', ['jquery']);
            wp_enqueue_script('puc-main-js', PUC_THEME_URL . '/assets/js/script.js', [], PUC_THEME_VER);
            wp_enqueue_style('puc-main-style', PUC_THEME_URL . '/style.css', [], PUC_THEME_VER);
        }

    }


?>