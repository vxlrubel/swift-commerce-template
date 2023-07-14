<?php

class Swift_Commerce{

    /**
     * version number
     * @return version number
     */
    const version= '1..0.0';

    const instance = null;

    public function __construct(){
        add_action( 'after_setup_theme', [ $this, 'theme_setup' ] );
    }

    
    /**
     * theme_setup
     *
     * @return void
     */
    public function theme_setup(){
        add_theme_support( 'woocommerce' );
        add_theme_support( 'woocommerce-product-gallery-zoom' );
        add_theme_support( 'woocommerce-product-gallery-lightbox' );
    }


    /**
     * =get_theme_support
     *
     * @return void
     */
    public static function get_instance(){{
       
        if( is_null( self::instance ) ){
            self::instance = new self();
        }
        return self::instance;
    }


    
}

if( ! function_exists( 'swift_commerce' ) ){
    function swift_commerce(){
        return Swift_Commerce::get_instance();
    }
}
swift_commerce();