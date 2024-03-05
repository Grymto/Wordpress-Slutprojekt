<?php

require_once("Vite.php");



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
