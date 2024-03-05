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

    </div><!-- #site-content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="container">
            <div class="site-info">
                <?php
                /* translators: 1: Theme name, 2: Theme author. */
                printf( esc_html__( '© %1$s %2$s. All Rights Reserved.', 'yourthemename' ), date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) );
                ?>
            </div><!-- .site-info -->
        </div><!-- .container -->
    </footer><!-- #colophon -->

    <?php wp_footer(); ?>

</body>
</html>
