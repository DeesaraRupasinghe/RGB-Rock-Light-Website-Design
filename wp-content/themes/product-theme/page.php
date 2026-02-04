<?php
/**
 * The page template file
 *
 * This template is used when a page is displayed.
 *
 * @package Product_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<article id="page-<?php the_ID(); ?>" <?php post_class( 'single-page' ); ?>>
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="single-page__thumbnail">
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
            <?php endif; ?>

            <header class="single-page__header">
                <?php the_title( '<h1 class="single-page__title">', '</h1>' ); ?>
            </header>

            <div class="single-page__content">
                <?php
                the_content();

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'product-theme' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</article>

<?php
get_footer();
