<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 *
 * @package Product_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<div class="container">
    <div class="posts-wrapper">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) :
                the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-card__thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <div class="post-card__content">
                        <header class="post-card__header">
                            <?php the_title( '<h2 class="post-card__title"><a href="' . esc_url( get_permalink() ) . '">', '</a></h2>' ); ?>
                        </header>

                        <div class="post-card__excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <footer class="post-card__footer">
                            <span class="post-card__date"><?php echo get_the_date(); ?></span>
                            <a href="<?php the_permalink(); ?>" class="post-card__read-more">
                                <?php esc_html_e( 'Read More', 'product-theme' ); ?>
                            </a>
                        </footer>
                    </div>
                </article>
                <?php
            endwhile;

            // Pagination
            the_posts_pagination(
                array(
                    'mid_size'  => 2,
                    'prev_text' => esc_html__( '&laquo; Previous', 'product-theme' ),
                    'next_text' => esc_html__( 'Next &raquo;', 'product-theme' ),
                )
            );

        else :
            ?>
            <div class="no-posts">
                <h2><?php esc_html_e( 'Nothing Found', 'product-theme' ); ?></h2>
                <p><?php esc_html_e( 'Sorry, but nothing matched your search criteria. Please try again with different keywords.', 'product-theme' ); ?></p>
            </div>
            <?php
        endif;
        ?>
    </div>
</div>

<?php
get_footer();
