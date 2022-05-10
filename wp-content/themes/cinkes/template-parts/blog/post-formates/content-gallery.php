<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package futexo
 */

$post_gallery = function_exists('get_field') ? get_field('post_gallery') : '';
$futexo_blog_date = get_theme_mod( 'futexo_blog_date', true );
$futexo_blog_comments = get_theme_mod( 'futexo_blog_comments', true );
$futexo_blog_author = get_theme_mod( 'futexo_blog_author', true );
$futexo_blog_cat = get_theme_mod( 'futexo_blog_cat', true );
$categories = get_the_terms( $post->ID, 'category' );
if ( is_single() ): ?>

    <article id="post-<?php the_ID();?>" <?php post_class( 'blog__item white-bg mb-50 transition-3 format-gallery' );?>>
        <?php if ( !empty( $post_gallery ) ): ?>
        <div class="post_gallery blog_gallery_active swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ( $post_gallery as $key => $image ): ?>
                    <div class="swiper-slide mblog_image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php if ( !empty($futexo_blog_date) ): ?>
                        <div class="top_date">
                            <span><?php print get_the_date('d M', get_the_ID()); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach;?>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-blog-button slide-prev"><i class="far fa-chevron-left"></i></div>
            <div class="swiper-blog-button slide-next"><i class="far fa-chevron-right"></i></div>
        </div>
        <?php endif;?>

        <div class="mblog_info">
            <div class="mblog__meta mb-15">
                <ul>
                    <?php if ( !empty($futexo_blog_cat) ): ?>
                    <?php if ( !empty( $categories[0]->name ) ): ?> 
                    <li><a href="<?php print esc_url(get_category_link($categories[0]->term_id)); ?>"><i class="far fa-bookmark"></i> <?php echo esc_html($categories[0]->name); ?></a></li>
                    <?php endif;?>
                    <?php endif;?>

                    <?php if ( !empty($futexo_blog_author) ): ?>
                    <li><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="far fa-user"></i> <?php print get_the_author();?></a></li>
                    <?php endif;?>

                    <?php if ( !empty($futexo_blog_comments) ): ?>
                    <li><a href="<?php comments_link();?>"><i class="fal fa-comments"></i> <?php comments_number();?></a></li>
                    <?php endif;?>
                </ul>
            </div>
            <div class="post-text mb-20">
               <?php the_content();?>
                <?php
                    wp_link_pages( [
                        'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'futexo' ),
                        'after'       => '</div>',
                        'link_before' => '<span class="page-number">',
                        'link_after'  => '</span>',
                    ] );
                ?>
            </div>
            <?php print futexo_get_tag();?>
        </div>
    </article>
    <?php else: ?>

    <article id="post-<?php the_ID();?>" <?php post_class( 'blog__item white-bg mb-50 transition-3 fix format-gallery' );?>>
        <?php if ( !empty( $post_gallery ) ): ?>
        <div class="post_gallery blog_gallery_active swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ( $post_gallery as $key => $image ): ?>
                    <div class="swiper-slide mblog_image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                        <?php if ( !empty($futexo_blog_date) ): ?>
                        <div class="top_date">
                            <span><?php print get_the_date('d M', get_the_ID()); ?></span>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach;?>
            </div>
            <!-- If we need navigation buttons -->
            <div class="swiper-blog-button slide-prev"><i class="far fa-chevron-left"></i></div>
            <div class="swiper-blog-button slide-next"><i class="far fa-chevron-right"></i></div>
        </div>
        <?php endif;?>
        <div class="mblog_info">
            <div class="mblog__meta mb-15">
                <ul>
                    <?php if ( !empty($futexo_blog_cat) ): ?>
                    <?php if ( !empty( $categories[0]->name ) ): ?> 
                    <li><a href="<?php print esc_url(get_category_link($categories[0]->term_id)); ?>"><i class="far fa-bookmark"></i> <?php echo esc_html($categories[0]->name); ?></a></li>
                    <?php endif;?>
                    <?php endif;?>

                    <?php if ( !empty($futexo_blog_author) ): ?>
                    <li><a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>"><i class="far fa-user"></i> <?php print get_the_author();?></a></li>
                    <?php endif;?>

                    <?php if ( !empty($futexo_blog_comments) ): ?>
                    <li><a href="<?php comments_link();?>"><i class="fal fa-comments"></i> <?php comments_number();?></a></li>
                    <?php endif;?>
                </ul>
            </div>
            <h6 class="mblog__title mb-15">
                <a href="<?php the_permalink();?>"><?php the_title();?></a>
            </h6>
            <div class="post-text">
                <?php the_excerpt();?>
            </div>
            <!-- blog btn -->
            <?php
                $futexo_blog_btn = get_theme_mod( 'futexo_blog_btn', 'Continue Reading' );
                $futexo_blog_btn_switch = get_theme_mod( 'futexo_blog_btn_switch', true );
            ?>
            <?php if ( !empty( $futexo_blog_btn_switch ) ): ?>
            <div class="mblog-buttons">
                <a href="<?php the_permalink();?>" class="f-blog-btn"><?php print esc_html( $futexo_blog_btn );?></a>
            </div>
            <?php endif;?>
        </div>
    </article>
<?php
endif;?>


