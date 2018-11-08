<?php 

    add_action( 'wp_loaded', function(){

        define('PUC_THEME_VER', '0.0.1');
        define( 'PUC_THEME_PATH', get_template_directory() );
        define( 'PUC_THEME_URL', get_template_directory_uri() );
        require(__DIR__ . '/includes/puc.php');
        new Puc();
    }, 11 );
    
?>