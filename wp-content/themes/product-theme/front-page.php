<?php
/**
 * The front page template file
 *
 * This template is used when a static front page is set.
 *
 * @package Product_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();

// Get customizer values
$hero_title       = get_theme_mod( 'hero_title', 'Multi-Colour RGB Rock Light Neon Kit' );
$hero_description = get_theme_mod( 'hero_description', 'Transform your vehicle with stunning RGB lighting. App-controlled, 36 LED upgrade, and endless color possibilities.' );
$hero_bg_image    = get_theme_mod( 'hero_background_image', product_theme_image( 'cd93739256ca1108f710c62b5e8996c9f5d07654.png' ) );
$hero_cta_text    = get_theme_mod( 'hero_cta_text', 'Buy Now' );
$hero_cta_url     = get_theme_mod( 'hero_cta_url', '#' );
$regular_price    = get_theme_mod( 'regular_price', '$149.99' );
$sale_price       = get_theme_mod( 'sale_price', '$99.99' );
$savings_text     = get_theme_mod( 'savings_text', 'Save $50 - Limited Time Only!' );
?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero__background">
        <?php if ( $hero_bg_image ) : ?>
            <img src="<?php echo esc_url( $hero_bg_image ); ?>" alt="<?php echo esc_attr( $hero_title ); ?>" class="hero__background-image">
        <?php endif; ?>
        <div class="hero__overlay"></div>
    </div>

    <div class="hero__content container">
        <h1 class="hero__title">
            <?php
            $title_parts = explode( ' ', $hero_title );
            $half        = ceil( count( $title_parts ) / 2 );
            $first_half  = implode( ' ', array_slice( $title_parts, 0, $half ) );
            $second_half = implode( ' ', array_slice( $title_parts, $half ) );
            echo esc_html( $first_half );
            ?>
            <br>
            <span class="hero__title-gradient"><?php echo esc_html( $second_half ); ?></span>
        </h1>

        <p class="hero__description"><?php echo esc_html( $hero_description ); ?></p>

        <div class="hero__buttons">
            <a href="<?php echo esc_url( $hero_cta_url ); ?>" class="btn btn--primary">
                <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="9" cy="21" r="1"></circle>
                    <circle cx="20" cy="21" r="1"></circle>
                    <path d="m1 1 4 4 2.68 9.53a2 2 0 0 0 1.92 1.47h9.72a2 2 0 0 0 1.92-1.42L23 6H6"></path>
                </svg>
                <?php echo esc_html( $hero_cta_text ); ?>
            </a>
            <a href="#features" class="btn btn--secondary">
                <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <rect x="5" y="2" width="14" height="20" rx="2" ry="2"></rect>
                    <line x1="12" y1="18" x2="12.01" y2="18"></line>
                </svg>
                <?php esc_html_e( 'Learn More', 'product-theme' ); ?>
            </a>
        </div>

        <div class="hero__stats">
            <div class="hero__stat">
                <div class="hero__stat-value hero__stat-value--cyan">36</div>
                <div class="hero__stat-label"><?php esc_html_e( 'LED Lights', 'product-theme' ); ?></div>
            </div>
            <div class="hero__stat">
                <div class="hero__stat-value hero__stat-value--purple">RGB</div>
                <div class="hero__stat-label"><?php esc_html_e( 'Multi-Color', 'product-theme' ); ?></div>
            </div>
            <div class="hero__stat">
                <div class="hero__stat-value hero__stat-value--pink">App</div>
                <div class="hero__stat-label"><?php esc_html_e( 'Controlled', 'product-theme' ); ?></div>
            </div>
            <div class="hero__stat">
                <div class="hero__stat-value hero__stat-value--green">IP68</div>
                <div class="hero__stat-label"><?php esc_html_e( 'Waterproof', 'product-theme' ); ?></div>
            </div>
        </div>
    </div>

    <div class="hero__scroll-indicator">
        <div class="hero__scroll-mouse">
            <div class="hero__scroll-dot"></div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="section section--dark">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e( 'Premium Upgrade Features', 'product-theme' ); ?></h2>
            <p class="section__subtitle"><?php esc_html_e( 'Superior quality and safety compared to standard rock lights', 'product-theme' ); ?></p>
        </div>

        <div class="features__image">
            <img src="<?php echo esc_url( product_theme_image( 'be4274e235ef3d81d8be90465866c03f33807760.png' ) ); ?>" alt="<?php esc_attr_e( 'Highlight Upgrade Comparison', 'product-theme' ); ?>">
        </div>

        <div class="features__grid">
            <div class="feature-card feature-card--red">
                <div class="feature-card__icon feature-card__icon--red">💡</div>
                <h3 class="feature-card__title"><?php esc_html_e( '36 LED Upgrade', 'product-theme' ); ?></h3>
                <p class="feature-card__description"><?php esc_html_e( 'Enhanced brightness with 36 LEDs compared to standard 16 LED lights for maximum visibility and impact.', 'product-theme' ); ?></p>
            </div>

            <div class="feature-card feature-card--yellow">
                <div class="feature-card__icon feature-card__icon--yellow">🔒</div>
                <h3 class="feature-card__title"><?php esc_html_e( 'Built-in Fuse', 'product-theme' ); ?></h3>
                <p class="feature-card__description"><?php esc_html_e( 'Upgraded with safety fuse protection to prevent electrical damage and ensure long-lasting performance.', 'product-theme' ); ?></p>
            </div>

            <div class="feature-card feature-card--green">
                <div class="feature-card__icon feature-card__icon--green">🔗</div>
                <h3 class="feature-card__title"><?php esc_html_e( 'Secure Connection', 'product-theme' ); ?></h3>
                <p class="feature-card__description"><?php esc_html_e( 'Upgraded connectors prevent dropping and ensure stable, reliable connections in all conditions.', 'product-theme' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Applications Section -->
<section id="applications" class="section section--gray">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e( 'Widely Applicable', 'product-theme' ); ?></h2>
            <p class="section__subtitle"><?php esc_html_e( 'Perfect for vehicles, boats, motorcycles, and outdoor adventures', 'product-theme' ); ?></p>
        </div>

        <div class="applications__image">
            <img src="<?php echo esc_url( product_theme_image( '2b9b6b5ab321af4d35c5f8dc31aca5803b5a5690.png' ) ); ?>" alt="<?php esc_attr_e( 'Wide Applications', 'product-theme' ); ?>">
        </div>

        <div class="applications__grid">
            <div class="application-card">
                <div class="application-card__icon">🚙</div>
                <h3 class="application-card__title"><?php esc_html_e( 'Off-Road Vehicles', 'product-theme' ); ?></h3>
                <p class="application-card__description"><?php esc_html_e( 'Jeeps, trucks, and SUVs', 'product-theme' ); ?></p>
            </div>

            <div class="application-card">
                <div class="application-card__icon">⛺</div>
                <h3 class="application-card__title"><?php esc_html_e( 'Camping', 'product-theme' ); ?></h3>
                <p class="application-card__description"><?php esc_html_e( 'Enhance your outdoor setup', 'product-theme' ); ?></p>
            </div>

            <div class="application-card">
                <div class="application-card__icon">⛵</div>
                <h3 class="application-card__title"><?php esc_html_e( 'Marine', 'product-theme' ); ?></h3>
                <p class="application-card__description"><?php esc_html_e( 'Boats and yachts', 'product-theme' ); ?></p>
            </div>

            <div class="application-card">
                <div class="application-card__icon">🏍️</div>
                <h3 class="application-card__title"><?php esc_html_e( 'Motorcycles', 'product-theme' ); ?></h3>
                <p class="application-card__description"><?php esc_html_e( 'Bikes and ATVs', 'product-theme' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Product Info Section -->
<section id="product-info" class="section section--gradient">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e( 'Product Specifications', 'product-theme' ); ?></h2>
            <p class="section__subtitle"><?php esc_html_e( 'Compact design with professional-grade components', 'product-theme' ); ?></p>
        </div>

        <div class="product-info__grid">
            <div class="product-info__image">
                <img src="<?php echo esc_url( product_theme_image( '9025547dfa134045dd78a6ec6efbce726860756a.png' ) ); ?>" alt="<?php esc_attr_e( 'Product Information', 'product-theme' ); ?>">
            </div>

            <div class="product-info__specs">
                <div class="spec-card spec-card--purple">
                    <div class="spec-card__inner">
                        <div class="spec-card__icon spec-card__icon--purple">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.3 15.3a2.4 2.4 0 0 1 0 3.4l-2.6 2.6a2.4 2.4 0 0 1-3.4 0L2.7 8.7a2.41 2.41 0 0 1 0-3.4l2.6-2.6a2.41 2.41 0 0 1 3.4 0Z"></path>
                                <path d="m14.5 12.5 2-2"></path>
                                <path d="m11.5 9.5 2-2"></path>
                                <path d="m8.5 6.5 2-2"></path>
                                <path d="m17.5 15.5 2-2"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="spec-card__title"><?php esc_html_e( 'Compact Dimensions', 'product-theme' ); ?></h3>
                            <p class="spec-card__description"><?php esc_html_e( '6.9cm × 4.3cm × 1.4cm - Perfect size for versatile mounting locations', 'product-theme' ); ?></p>
                        </div>
                    </div>
                </div>

                <div class="spec-card spec-card--cyan">
                    <div class="spec-card__inner">
                        <div class="spec-card__icon spec-card__icon--cyan">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"></path>
                                <path d="m3.3 7 8.7 5 8.7-5"></path>
                                <path d="M12 22V12"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="spec-card__title"><?php esc_html_e( 'Complete Kit', 'product-theme' ); ?></h3>
                            <p class="spec-card__description"><?php esc_html_e( 'Includes mounting screws, connectors, and all necessary hardware for easy installation', 'product-theme' ); ?></p>
                        </div>
                    </div>
                </div>

                <div class="spec-card spec-card--pink">
                    <div class="spec-card__inner">
                        <div class="spec-card__icon spec-card__icon--pink">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M13 2 3 14h9l-1 8 10-12h-9l1-8z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="spec-card__title"><?php esc_html_e( 'Daisy Chain Design', 'product-theme' ); ?></h3>
                            <p class="spec-card__description"><?php esc_html_e( 'Connect multiple pods together for synchronized lighting effects across your vehicle', 'product-theme' ); ?></p>
                        </div>
                    </div>
                </div>

                <div class="spec-card spec-card--green">
                    <div class="spec-card__inner">
                        <div class="spec-card__icon spec-card__icon--green">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="spec-card__title"><?php esc_html_e( 'Weather Resistant', 'product-theme' ); ?></h3>
                            <p class="spec-card__description"><?php esc_html_e( 'IP68 waterproof rating ensures reliable performance in all weather conditions', 'product-theme' ); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Installation Effect Section -->
<section id="installation" class="section" style="background: #000000;">
    <div class="container">
        <div class="section__header">
            <h2 class="section__title"><?php esc_html_e( 'Stunning Visual Impact', 'product-theme' ); ?></h2>
            <p class="section__subtitle"><?php esc_html_e( 'See the dramatic transformation these lights bring to your vehicle', 'product-theme' ); ?></p>
        </div>

        <div class="installation__image-wrapper">
            <img src="<?php echo esc_url( product_theme_image( 'd45c4aeaca8fc9f422b306735091731fb835e7d1.png' ) ); ?>" alt="<?php esc_attr_e( 'Installation Effect', 'product-theme' ); ?>" class="installation__image">
            <div class="installation__image-overlay"></div>
        </div>

        <div class="installation__features">
            <div class="installation-feature">
                <div class="installation-feature__icon installation-feature__icon--cyan-blue">🌈</div>
                <h3 class="installation-feature__title"><?php esc_html_e( '16 Million Colors', 'product-theme' ); ?></h3>
                <p class="installation-feature__description"><?php esc_html_e( 'Choose from endless color combinations', 'product-theme' ); ?></p>
            </div>

            <div class="installation-feature">
                <div class="installation-feature__icon installation-feature__icon--purple-pink">✨</div>
                <h3 class="installation-feature__title"><?php esc_html_e( 'Multiple Modes', 'product-theme' ); ?></h3>
                <p class="installation-feature__description"><?php esc_html_e( 'Static, flash, fade, and music sync', 'product-theme' ); ?></p>
            </div>

            <div class="installation-feature">
                <div class="installation-feature__icon installation-feature__icon--green-cyan">📱</div>
                <h3 class="installation-feature__title"><?php esc_html_e( 'App Control', 'product-theme' ); ?></h3>
                <p class="installation-feature__description"><?php esc_html_e( 'Full control from your smartphone', 'product-theme' ); ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section id="cta" class="section section--gradient cta">
    <div class="container" style="max-width: 56rem;">
        <h2 class="section__title"><?php esc_html_e( 'Ready to Light Up Your Ride?', 'product-theme' ); ?></h2>
        <p class="section__subtitle" style="margin-bottom: 3rem;"><?php esc_html_e( 'Transform your vehicle with professional-grade RGB rock lights. Easy installation, stunning results.', 'product-theme' ); ?></p>

        <div class="cta__box">
            <div class="cta__box-inner">
                <div class="cta__pricing">
                    <div class="cta__pricing-label"><?php esc_html_e( 'Special Offer', 'product-theme' ); ?></div>
                    <div class="cta__pricing-value">
                        <span class="cta__pricing-original"><?php echo esc_html( $regular_price ); ?></span>
                        <?php echo esc_html( $sale_price ); ?>
                    </div>
                    <div class="cta__pricing-savings"><?php echo esc_html( $savings_text ); ?></div>
                </div>

                <div class="cta__buttons">
                    <a href="<?php echo esc_url( $hero_cta_url ); ?>" class="btn btn--primary">
                        <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="9" cy="21" r="1"></circle>
                            <circle cx="20" cy="21" r="1"></circle>
                            <path d="m1 1 4 4 2.68 9.53a2 2 0 0 0 1.92 1.47h9.72a2 2 0 0 0 1.92-1.42L23 6H6"></path>
                        </svg>
                        <?php esc_html_e( 'Add to Cart', 'product-theme' ); ?>
                    </a>
                    <button type="button" class="btn btn--secondary btn--icon-only" aria-label="<?php esc_attr_e( 'Add to wishlist', 'product-theme' ); ?>">
                        <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"></path>
                        </svg>
                    </button>
                    <button type="button" class="btn btn--secondary btn--icon-only" aria-label="<?php esc_attr_e( 'Share product', 'product-theme' ); ?>">
                        <svg class="btn__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="18" cy="5" r="3"></circle>
                            <circle cx="6" cy="12" r="3"></circle>
                            <circle cx="18" cy="19" r="3"></circle>
                            <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                            <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="cta__benefits">
            <div class="cta__benefit">
                <span class="cta__benefit-check">✓</span>
                <span><?php esc_html_e( 'Free Shipping', 'product-theme' ); ?></span>
            </div>
            <div class="cta__benefit">
                <span class="cta__benefit-check">✓</span>
                <span><?php esc_html_e( '2-Year Warranty', 'product-theme' ); ?></span>
            </div>
            <div class="cta__benefit">
                <span class="cta__benefit-check">✓</span>
                <span><?php esc_html_e( '30-Day Returns', 'product-theme' ); ?></span>
            </div>
            <div class="cta__benefit">
                <span class="cta__benefit-check">✓</span>
                <span><?php esc_html_e( '24/7 Support', 'product-theme' ); ?></span>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
