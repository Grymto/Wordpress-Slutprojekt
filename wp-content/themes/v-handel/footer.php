<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package YourThemeName
 */

?>

    <footer id="colophon" class="site-footer" role="contentinfo">
    <div class="container">
        <div class="footer-sections">
            <div class="footer-urban">
                <h2>Urban Outfitters</h2>
                <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                Esse sit veniam tempore</p>
                <h3>121 King Street, Melbourne 3000 <br>
                 +61 3 8376 6284 <br>
                contact@urbanoutfitters.com </h3>
            </div>
            
            <div class="footer-shopping">
                <h3>Shopping</h3>
                <ul>
                    <li>Your cart</li> 
                    <li>Your orders</li>
                    <li>Compared items</li>
                    <li>Wishlist items</li>
                    <li>Shipping detail</li>
                </ul>
            </div>
            
            <div class="footer-link">
                <h3>More Links</h3>
                <ul>
                    <li>Blog</li> 
                    <li>Gift Center</li>
                    <li>Buying Guides</li>
                    <li>New Arrivals</li>
                    <li>Clearance</li>
                </ul>
            </div>
            
            <div class="footer-blog">
                <h3>From the Blog</h3>
                <span> <time>26 </time>May</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <span>3 comments</span>
                <div class="line-image">
                <img src="/wp-content/uploads/2024/03/line-1.png-1-100x2.png" alt="">
                </div>
                <span> <time>27 </time>May</span>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <span>3 comments</span>
            </div>
          
        </div>
        <div class="footer-social-media">

            <div class="facebook">
            <img src="/wp-content/uploads/2024/03/facebook.png.png" alt="">
            </div>

            <div class="twitter">
            <img src="/wp-content/uploads/2024/03/twitter-1.png-1.png" alt="">
            </div>

            <div class="instagram"> 
            <img src="/wp-content/uploads/2024/03/instagram-1.png-1.png" alt="">
            </div>

            <div class="tiktok">
            <img src="/wp-content/uploads/2024/03/Tiktok-1.png" alt="">
            </div>
            
        </div>
    </div>
    
    <div class="site-info">
            <?php
            printf( esc_html__( ' %1$s Urban Outfitts © - All Rights Reserved.', 'yourthemename' ), date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );
            ?>
        </div>
</footer>


    <?php wp_footer(); ?>

</body>
</html>
