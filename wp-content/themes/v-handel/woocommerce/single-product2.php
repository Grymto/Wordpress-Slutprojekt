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

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

while ( have_posts() ) :
    the_post();
    ?>

    <div id="product-<?php the_ID(); ?>" <?php wc_product_class(); ?>>
        <?php
        do_action( 'woocommerce_before_single_product' );

        if ( post_password_required() ) {
            echo get_the_password_form(); // WPCS: XSS ok.
            return;
        }
        ?>

        <?php
        do_action( 'woocommerce_before_single_product_summary' );
        do_action( 'woocommerce_single_product_summary' );
        ?>

        <div class="custom-review-content">
            <p style="color: red;">Conscious</p>
            <p style="font-weight: bold;">Twin duvet cover set in soft, woven fabric made from a Tencel™ lyocell and cotton blend with a printed pattern. One pillowcase. Thread count 144. </p>
            <br> Composition — Cotton 50%, Lyocell 50% 
            <br>
            <br>Art. No. — 0643448004
        </div>

        <?php
        do_action( 'woocommerce_after_single_product_summary' );
        do_action( 'woocommerce_after_single_product' );
        ?>
    </div>

    <?php
endwhile; // end of the loop.

get_footer( 'shop' );
