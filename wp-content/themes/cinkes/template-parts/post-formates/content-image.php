<article id="post-<?php the_ID(); ?>" <?php post_class('blog_single_item mb-50'); ?>>
    <?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
    <div class="blog_thumb img_effect_white">
        <?php  
            $att=get_post_thumbnail_id();
            $image_src = wp_get_attachment_image_src( $att, 'full' );
            $image_src = $image_src[0]; 
        ?>
        <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url($image_src); ?>" alt="<?php the_title_attribute(); ?>"></a>
    </div>
    <?php } ?>
    <div class="blog_content">
        <div class="blog_meta">
            <?php if(!empty(get_the_author_meta( 'ID' ))) : ?>
            <a href="<?php print esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?>" class="blog_user meta_item mb-15">
                <?php print get_avatar(get_the_author_meta('ID'), 45); ?>
                <h6 class="blog_user_name"><?php print get_the_author();?></h6>
            </a>
            <?php endif; ?>
            <span class="blog_date meta_item mb-15"><i class="fal fa-calendar-check"></i><?php echo get_the_date(); ?></span>
            <a href="<?php comments_link();?>" class="blog_comment meta_item mb-15"><i class="fal fa-comments"></i><?php comments_number();?></a>
        </div>
        <h3 class="blog_title mb-20"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <?php the_excerpt(); ?>
        <div class="blog_button mt-30">
            <a href="<?php the_permalink(); ?>" class="blog_btn i_right">Read More<i class="fal fa-long-arrow-right"></i></a>
        </div>
    </div>
</article>