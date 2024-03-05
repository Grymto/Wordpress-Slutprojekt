<?php
/**
 * The template for displaying product archives.
 *
 * @link https://woocommerce.com/
 *
 * @package WooCommerce/Templates
 *
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header( 'shop' );

if ( woocommerce_product_loop() ) {

    do_action( 'woocommerce_before_shop_loop' );

    woocommerce_product_loop_start();

    if ( wc_get_loop_prop( 'total' ) ) {
        while ( have_posts() ) {
            the_post();

            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action( 'woocommerce_shop_loop' );

            wc_get_template_part( 'content', 'product' );
        }
    }

    woocommerce_product_loop_end();

    do_action( 'woocommerce_after_shop_loop' );
} else {
    do_action( 'woocommerce_no_products_found' );
}

get_footer( 'shop' );
