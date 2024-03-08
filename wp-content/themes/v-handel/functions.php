<?php

require_once("Vite.php");



add_action('after_setup_theme', 'theme_setup');
function theme_setup(){
    add_theme_support('woocommerce');
}


function enqueue_custom_styles() {
    wp_enqueue_style('custom-styles', get_template_directory_uri() . '/styles.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');


function icon_list_shortcode() {
    ?>
    <div class="icon-list-container">
        <h2 class="title" >MOODY STUDIO</h2>
        <ul class="icon-list">
            <li><img src="/wp-content/themes/v-handel/resources/images/Vector.png" alt="vector" /></li>
            <li><img src="/wp-content/themes/v-handel/resources/images/gubbe.png" alt="gubbe" /></li>
            <li><img src="/wp-content/themes/v-handel/resources/images/varukorg.png" alt="varukorg" /></li>
            <li><img src="/wp-content/themes/v-handel/resources/images/hjärta.png" alt="hjärta" /></li>
        </ul>
    </div>
    <?php
   
}
add_shortcode('my_icon_list', 'icon_list_shortcode');


function add_shortcode_to_single_product() {
    echo do_shortcode('[my_icon_list]');
}

add_action('woocommerce_before_single_product', 'add_shortcode_to_single_product');




function usp_line_shortcode() {
    ob_start(); ?>

<div class="usp-line-container">
        <div class="usp-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/delivery.png" alt="Icon 1">
            <p>FREE SHIPPING</p>
        </div>

        <div class="usp-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/moneyback.png" alt="Icon 1">
            <p>100% MONEY BACK</p>
        </div>

        <div class="usp-item">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/support.png" alt="Icon 1">
            <p>SUPPORT 24/7</p>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

add_shortcode('usp_line', 'usp_line_shortcode');



function custom_shortcode_function($atts) {
    // Extract shortcode attributes
    $atts = shortcode_atts(
        array(
            'placeholder' => 'Enter your text',
            'icon_image' => 'default-icon.png', // Default image name
        ),
        $atts,
        'custom_shortcode'
    );

    ob_start(); // Start output buffering

    ?>
    <div class="custom-shortcode">
        <h2>SIGN UP FOR THE NEWSLETTER</h2>
        <p>Subscribe for the latest stories and promotions</p>
        <input type="text" placeholder="<?php echo esc_attr($atts['placeholder']); ?>">
        <div class="icon-wrapper">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/resources/images/moneyback.png" alt="Icon 1">
        </div>
    </div>
    <?php

    return ob_get_clean(); // End and return output buffer
}

add_shortcode('custom_shortcode', 'custom_shortcode_function');