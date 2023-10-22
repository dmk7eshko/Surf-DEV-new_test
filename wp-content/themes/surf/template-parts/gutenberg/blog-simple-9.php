<div class="blog-simple-posts">
    <h2><?php the_field('title') ?></h2>
    <p class="blog-simple-posts-description"><?php the_field('description') ?></p>
    <div class="blog-simple-posts-list">
        <?php
        if( have_rows('posts') ) {
            while( have_rows('posts') ) {
            the_row();
            $data = get_sub_field( 'post' );
            
            global $shown_blog_posts;
            ( !isset( $shown_blog_posts ) ) && ( $shown_blog_posts = [] ); 
            $shown_blog_posts[] = $data->ID;

            ?>
                <article class="blog-simple-post">
                    <h3>
                        <a href="<?= get_permalink($data->ID) ?>">
                            <?= $data->post_title ?>
                        </a>
                    </h3>
                </article>
            <?php
            }
        }
        ?>
    </div>
</div>