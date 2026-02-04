<?php
/**
 * The single post template file
 *
 * This template is used when a single post is displayed.
 *
 * @package Product_Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

get_header();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'single-post' ); ?>>
    <div class="container">
        <?php
        while ( have_posts() ) :
            the_post();
            ?>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="single-post__thumbnail">
                    <?php the_post_thumbnail( 'full' ); ?>
                </div>
            <?php endif; ?>

            <header class="single-post__header">
                <?php the_title( '<h1 class="single-post__title">', '</h1>' ); ?>

                <div class="single-post__meta">
                    <span class="single-post__date">
                        <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
                            <?php echo esc_html( get_the_date() ); ?>
                        </time>
                    </span>
                    <span class="single-post__author">
                        <?php
                        printf(
                            /* translators: %s: post author */
                            esc_html__( 'by %s', 'product-theme' ),
                            '<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a>'
                        );
                        ?>
                    </span>
                    <?php
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) :
                        ?>
                        <span class="single-post__categories">
                            <?php
                            $category_links = array();
                            foreach ( $categories as $category ) {
                                $category_links[] = '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>';
                            }
                            echo implode( ', ', $category_links );
                            ?>
                        </span>
                    <?php endif; ?>
                </div>
            </header>

            <div class="single-post__content">
                <?php
                the_content(
                    sprintf(
                        /* translators: %s: post title */
                        esc_html__( 'Continue reading %s', 'product-theme' ),
                        '<span class="screen-reader-text">' . get_the_title() . '</span>'
                    )
                );

                wp_link_pages(
                    array(
                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'product-theme' ),
                        'after'  => '</div>',
                    )
                );
                ?>
            </div>

            <footer class="single-post__footer">
                <?php
                $tags = get_the_tags();
                if ( ! empty( $tags ) ) :
                    ?>
                    <div class="single-post__tags">
                        <span class="single-post__tags-label"><?php esc_html_e( 'Tags:', 'product-theme' ); ?></span>
                        <?php the_tags( '', ', ', '' ); ?>
                    </div>
                <?php endif; ?>

                <div class="single-post__navigation">
                    <?php
                    the_post_navigation(
                        array(
                            'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'product-theme' ) . '</span> <span class="nav-title">%title</span>',
                            'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'product-theme' ) . '</span> <span class="nav-title">%title</span>',
                        )
                    );
                    ?>
                </div>
            </footer>

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
