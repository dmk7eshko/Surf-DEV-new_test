<div class="blog-hero-posts">
    <div class="blog-hero-posts-top">
        <div class="blog-hero-big">
            <?php blog_hero_post_template(get_field('big_post')); ?>
        </div>
        <div class="blog-hero-posts-right">
            <div class="blog-hero-right blog-hero-right-1">
                <?php blog_hero_post_template(get_field('right_post_1')); ?>
            </div>
            <div class="blog-hero-right blog-hero-right-2">
                <?php blog_hero_post_template(get_field('right_post_2')) ?>
            </div>
            <div class="blog-hero-right blog-hero-right-3">
                <?php blog_hero_post_template(get_field('right_post_3')) ?>
            </div>
        </div>
    </div>
    <div class="blog-hero-posts-bottom">
        <div class="blog-hero-bottom blog-hero-bottom-1">
            <?php blog_hero_post_template(get_field('bottom_post_1')) ?>
        </div>
        <div class="blog-hero-bottom blog-hero-bottom-2">
            <?php blog_hero_post_template(get_field('bottom_post_2')) ?>
        </div>
        <div class="blog-hero-bottom blog-hero-bottom-3">
            <?php blog_hero_post_template(get_field('bottom_post_3')) ?>
        </div>
    </div>
</div>