<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * @link https://woocommerce.com/
 *
 * @package WooCommerce/Templates
 *
 * @author WooThemes
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

get_header( 'shop' );

while ( have_posts() ) :
    the_post();

    do_action( 'woocommerce_before_single_product' );

    wc_get_template_part( 'content', 'single-product' );

    // Custom content - Add to Cart button and Variation dropdown
  
    do_action( 'woocommerce_after_single_product' );

endwhile; // end of the loop.

get_footer( 'shop' );
?>
