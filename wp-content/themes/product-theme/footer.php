<?php
/**
 * The footer template file
 *
 * Contains the closing of the #main-content div and all content after.
 *
 * @package Product_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>

</main><!-- #main-content -->

<footer class="site-footer">
    <div class="container">
        <?php if ( is_active_sidebar( 'footer-widget-area' ) ) : ?>
            <div class="site-footer__widgets">
                <?php dynamic_sidebar( 'footer-widget-area' ); ?>
            </div>
        <?php endif; ?>

        <?php if ( has_nav_menu( 'footer' ) ) : ?>
            <nav class="site-footer__nav" role="navigation" aria-label="<?php esc_attr_e( 'Footer Navigation', 'product-theme' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer',
                        'menu_id'        => 'footer-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'depth'          => 1,
                    )
                );
                ?>
            </nav>
        <?php endif; ?>

        <div class="site-footer__copyright">
            <p>
                <?php
                $footer_copyright = get_theme_mod( 'footer_copyright', '&copy; ' . date( 'Y' ) . ' RGB Rock Lights. All rights reserved.' );
                echo wp_kses_post( $footer_copyright );
                ?>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
