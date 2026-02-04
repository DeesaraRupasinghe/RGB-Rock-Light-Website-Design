<?php
/**
 * The header template file
 *
 * This is the template that displays all of the <head> section and everything up
 * until the main content.
 *
 * @package Product_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class( 'site-container' ); ?>>
<?php wp_body_open(); ?>

<a class="skip-link screen-reader-text" href="#main-content">
    <?php esc_html_e( 'Skip to content', 'product-theme' ); ?>
</a>

<header class="site-header">
    <div class="container">
        <div class="site-header__inner">
            <div class="site-header__logo">
                <?php product_theme_custom_logo(); ?>
            </div>

            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'product-theme' ); ?>">
                <span></span>
                <span></span>
                <span></span>
            </button>

            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'product-theme' ); ?>">
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                        'menu_id'        => 'primary-menu',
                        'container'      => false,
                        'fallback_cb'    => false,
                        'depth'          => 2,
                    )
                );
                ?>
            </nav>
        </div>
    </div>
</header>

<main id="main-content" class="site-main">
