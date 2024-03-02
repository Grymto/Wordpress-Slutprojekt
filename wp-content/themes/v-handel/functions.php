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

