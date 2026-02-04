<?php
/**
 * RGB Rock Light Theme functions and definitions
 *
 * @package Product_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Define theme constants
 */
define( 'PRODUCT_THEME_VERSION', '1.0.0' );
define( 'PRODUCT_THEME_DIR', get_template_directory() );
define( 'PRODUCT_THEME_URI', get_template_directory_uri() );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function product_theme_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title.
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support( 'post-thumbnails' );

    // Add support for custom logo.
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 200,
            'flex-height' => true,
            'flex-width'  => true,
        )
    );

    // Register navigation menus.
    register_nav_menus(
        array(
            'primary'   => esc_html__( 'Primary Menu', 'product-theme' ),
            'footer'    => esc_html__( 'Footer Menu', 'product-theme' ),
        )
    );

    // Switch default core markup for search form, comment form, and comments
    // to output valid HTML5.
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Add support for responsive embedded content.
    add_theme_support( 'responsive-embeds' );

    // Add support for wide and full-width alignments.
    add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'product_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function product_theme_scripts() {
    // Enqueue main stylesheet
    wp_enqueue_style(
        'product-theme-style',
        get_stylesheet_uri(),
        array(),
        PRODUCT_THEME_VERSION
    );

    // Enqueue custom CSS
    wp_enqueue_style(
        'product-theme-custom',
        PRODUCT_THEME_URI . '/assets/css/custom.css',
        array( 'product-theme-style' ),
        PRODUCT_THEME_VERSION
    );

    // Enqueue main JavaScript
    wp_enqueue_script(
        'product-theme-main',
        PRODUCT_THEME_URI . '/assets/js/main.js',
        array(),
        PRODUCT_THEME_VERSION,
        true
    );

    // Pass theme data to JavaScript
    wp_localize_script(
        'product-theme-main',
        'productTheme',
        array(
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'nonce'   => wp_create_nonce( 'product_theme_nonce' ),
        )
    );
}
add_action( 'wp_enqueue_scripts', 'product_theme_scripts' );

/**
 * Register widget areas.
 */
function product_theme_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Widget Area', 'product-theme' ),
            'id'            => 'footer-widget-area',
            'description'   => esc_html__( 'Add widgets here.', 'product-theme' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3 class="widget-title">',
            'after_title'   => '</h3>',
        )
    );
}
add_action( 'widgets_init', 'product_theme_widgets_init' );

/**
 * Customizer additions.
 */
function product_theme_customize_register( $wp_customize ) {
    // Add Hero Section
    $wp_customize->add_section(
        'product_theme_hero',
        array(
            'title'       => esc_html__( 'Hero Section', 'product-theme' ),
            'priority'    => 30,
            'description' => esc_html__( 'Customize the hero section.', 'product-theme' ),
        )
    );

    // Hero Title
    $wp_customize->add_setting(
        'hero_title',
        array(
            'default'           => 'Multi-Colour RGB Rock Light Neon Kit',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'hero_title',
        array(
            'label'   => esc_html__( 'Hero Title', 'product-theme' ),
            'section' => 'product_theme_hero',
            'type'    => 'text',
        )
    );

    // Hero Description
    $wp_customize->add_setting(
        'hero_description',
        array(
            'default'           => 'Transform your vehicle with stunning RGB lighting. App-controlled, 36 LED upgrade, and endless color possibilities.',
            'sanitize_callback' => 'sanitize_textarea_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'hero_description',
        array(
            'label'   => esc_html__( 'Hero Description', 'product-theme' ),
            'section' => 'product_theme_hero',
            'type'    => 'textarea',
        )
    );

    // Hero Background Image
    $wp_customize->add_setting(
        'hero_background_image',
        array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'hero_background_image',
            array(
                'label'   => esc_html__( 'Hero Background Image', 'product-theme' ),
                'section' => 'product_theme_hero',
            )
        )
    );

    // CTA Button Text
    $wp_customize->add_setting(
        'hero_cta_text',
        array(
            'default'           => 'Buy Now',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'hero_cta_text',
        array(
            'label'   => esc_html__( 'CTA Button Text', 'product-theme' ),
            'section' => 'product_theme_hero',
            'type'    => 'text',
        )
    );

    // CTA Button URL
    $wp_customize->add_setting(
        'hero_cta_url',
        array(
            'default'           => '#',
            'sanitize_callback' => 'esc_url_raw',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'hero_cta_url',
        array(
            'label'   => esc_html__( 'CTA Button URL', 'product-theme' ),
            'section' => 'product_theme_hero',
            'type'    => 'url',
        )
    );

    // Add Pricing Section
    $wp_customize->add_section(
        'product_theme_pricing',
        array(
            'title'       => esc_html__( 'Pricing Section', 'product-theme' ),
            'priority'    => 35,
            'description' => esc_html__( 'Customize the pricing section.', 'product-theme' ),
        )
    );

    // Regular Price
    $wp_customize->add_setting(
        'regular_price',
        array(
            'default'           => '$149.99',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'regular_price',
        array(
            'label'   => esc_html__( 'Regular Price', 'product-theme' ),
            'section' => 'product_theme_pricing',
            'type'    => 'text',
        )
    );

    // Sale Price
    $wp_customize->add_setting(
        'sale_price',
        array(
            'default'           => '$99.99',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'sale_price',
        array(
            'label'   => esc_html__( 'Sale Price', 'product-theme' ),
            'section' => 'product_theme_pricing',
            'type'    => 'text',
        )
    );

    // Savings Text
    $wp_customize->add_setting(
        'savings_text',
        array(
            'default'           => 'Save $50 - Limited Time Only!',
            'sanitize_callback' => 'sanitize_text_field',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'savings_text',
        array(
            'label'   => esc_html__( 'Savings Text', 'product-theme' ),
            'section' => 'product_theme_pricing',
            'type'    => 'text',
        )
    );

    // Add Colors Section
    $wp_customize->add_section(
        'product_theme_colors',
        array(
            'title'       => esc_html__( 'Theme Colors', 'product-theme' ),
            'priority'    => 40,
            'description' => esc_html__( 'Customize theme colors.', 'product-theme' ),
        )
    );

    // Primary Color
    $wp_customize->add_setting(
        'primary_color',
        array(
            'default'           => '#9333ea',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_color',
            array(
                'label'   => esc_html__( 'Primary Color', 'product-theme' ),
                'section' => 'product_theme_colors',
            )
        )
    );

    // Secondary Color
    $wp_customize->add_setting(
        'secondary_color',
        array(
            'default'           => '#ec4899',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'secondary_color',
            array(
                'label'   => esc_html__( 'Secondary Color', 'product-theme' ),
                'section' => 'product_theme_colors',
            )
        )
    );

    // Accent Color
    $wp_customize->add_setting(
        'accent_color',
        array(
            'default'           => '#22d3ee',
            'sanitize_callback' => 'sanitize_hex_color',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'accent_color',
            array(
                'label'   => esc_html__( 'Accent Color', 'product-theme' ),
                'section' => 'product_theme_colors',
            )
        )
    );

    // Add Footer Section
    $wp_customize->add_section(
        'product_theme_footer',
        array(
            'title'       => esc_html__( 'Footer Settings', 'product-theme' ),
            'priority'    => 50,
            'description' => esc_html__( 'Customize footer settings.', 'product-theme' ),
        )
    );

    // Footer Copyright Text
    $wp_customize->add_setting(
        'footer_copyright',
        array(
            'default'           => '&copy; ' . gmdate( 'Y' ) . ' RGB Rock Lights. All rights reserved.',
            'sanitize_callback' => 'wp_kses_post',
            'transport'         => 'refresh',
        )
    );

    $wp_customize->add_control(
        'footer_copyright',
        array(
            'label'   => esc_html__( 'Copyright Text', 'product-theme' ),
            'section' => 'product_theme_footer',
            'type'    => 'textarea',
        )
    );
}
add_action( 'customize_register', 'product_theme_customize_register' );

/**
 * Output custom colors CSS in the header.
 */
function product_theme_custom_colors_css() {
    $primary_color   = get_theme_mod( 'primary_color', '#9333ea' );
    $secondary_color = get_theme_mod( 'secondary_color', '#ec4899' );
    $accent_color    = get_theme_mod( 'accent_color', '#22d3ee' );

    $custom_css = "
        :root {
            --theme-primary-color: {$primary_color};
            --theme-secondary-color: {$secondary_color};
            --theme-accent-color: {$accent_color};
        }
        .btn--primary {
            background: linear-gradient(to right, {$primary_color}, {$secondary_color});
        }
        .btn--primary:hover {
            background: linear-gradient(to right, {$primary_color}, {$secondary_color});
            filter: brightness(0.9);
        }
    ";

    wp_add_inline_style( 'product-theme-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'product_theme_custom_colors_css' );

/**
 * Get theme asset URL helper function.
 *
 * @param string $path Path to the asset relative to assets folder.
 * @return string Full URL to the asset.
 */
function product_theme_asset( $path ) {
    return PRODUCT_THEME_URI . '/assets/' . ltrim( $path, '/' );
}

/**
 * Get theme image URL helper function.
 *
 * @param string $image Image filename.
 * @return string Full URL to the image.
 */
function product_theme_image( $image ) {
    return product_theme_asset( 'images/' . $image );
}

/**
 * Render custom logo or fallback text.
 *
 * @return void
 */
function product_theme_custom_logo() {
    if ( has_custom_logo() ) {
        the_custom_logo();
    } else {
        ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-header__logo-text" rel="home">
            <?php bloginfo( 'name' ); ?>
        </a>
        <?php
    }
}

/**
 * Add excerpt support for pages.
 */
function product_theme_add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'product_theme_add_excerpts_to_pages' );
