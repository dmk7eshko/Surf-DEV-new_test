<?php
/**
 * Template Name: Author page template
 */

get_header();

	$user_id = get_the_author_meta('ID');
	$banner_title = get_field('banner_title', 'user_'. $user_id );
	$banner_img = get_field('banner_img', 'user_'. $user_id );
	$banner_text = get_field('banner_text', 'user_'. $user_id );
	$banner_button_text = get_field('banner_button_text', 'user_'. $user_id );
	$banner_button_link = get_field('banner_button_link', 'user_'. $user_id );
	$banner_award_first_logo = get_field('achievement_first_img', 'user_'. $user_id );
	$banner_award_first_text = get_field('achievement_first_text', 'user_'. $user_id );
	$banner_award_second_logo = get_field('achievement_second_img', 'user_'. $user_id );
	$banner_award_second_text = get_field('achievement_second_text', 'user_'. $user_id );
	$user_photo = get_field('user_photo', 'user_'. $user_id );
	$user_bio_under_photo = get_field('user_bio_under_photo', 'user_'. $user_id );
	$user_background = get_field('user_background', 'user_'. $user_id );
	$user_skills = get_field('user_skills', 'user_'. $user_id );
?>

<main class="main servise-page">
    <section class="page-banner" style="background-image:url('<?= $banner_img ?>')">
        <div class="container">
           <div class="banner-row">
                    <div class="banner-col col-lg-8 col-md-11 col-12">
						<div class="bann-row">
                         	<h1> <?= $banner_title; ?> </h1>
							 <div class="sub-title col-md-7 col-12">
								<?= $banner_text; ?>
							</div>
						</div>
 							<div class="col-12">
							<div class="row">
								<a class="banner-btn btn-blue col-md-4 col-12" href="<?= $banner_button_link?>"><?= $banner_button_text ?></a>
								<div class="case-reward row col-md-8 col-12">
									<div class="case-reward_item case-reward_first">
										<img src="<?= $banner_award_first_logo ?>" />
										<span><?= $banner_award_first_text ?></span>
									</div>
									<div class="case-reward_item case-reward_second">
										<img src="<?= $banner_award_second_logo ?>" />
										<span><?= $banner_award_second_text ?></span>
									</div>
								</div>
							</div>
							</div>
                    </div>
                </div>
        </div>
    </section>

    <section class="user-content">
        <div class="container">
            <div class="row">
                <div class="row first-col col-md-3 ">
					 <div class="user-photo col-md-12 col-4">
                    	<img src="<?= $user_photo ?>">
					</div>
                    <div class="user-bio col-md-12 col-8">
                        <?= $user_bio_under_photo ?>
						<?php if(!empty(get_the_author_meta('linkedin'))) { ?>
						   <a href="<?php the_author_meta('linkedin'); ?>" title="Linkedin" target="_blank" id="linkedin">
						<svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg" style="fill: #121212;">
							<path d="M26.6667 4H5.33333C4.596 4 4 4.59733 4 5.33333V26.6667C4 27.4027 4.596 28 5.33333 28H26.6667C27.404 28 28 27.4027 28 26.6667V5.33333C28 4.59733 27.404 4 26.6667 4ZM11.1187 24.4493H7.556V12.996H11.1187V24.4493ZM9.33733 11.432C8.196 11.432 7.27333 10.5067 7.27333 9.368C7.27333 8.22933 8.19467 7.304 9.33733 7.304C10.476 7.304 11.4013 8.228 11.4013 9.368C11.4013 10.508 10.476 11.432 9.33733 11.432ZM24.4507 24.4493H20.892V18.88C20.892 17.552 20.868 15.844 19.0413 15.844C17.188 15.844 16.9067 17.292 16.9067 18.7867V24.4507H13.3507V12.9973H16.764V14.5627H16.8133C17.2867 13.6627 18.4493 12.7133 20.1787 12.7133C23.784 12.7133 24.4493 15.084 24.4493 18.1693L24.4507 24.4493Z" fill="#121212"></path>
                        </svg>
							</a>
						<?php } ?>
                    </div>
                </div>
                <div class="col-md-8 col-md-offset-1">
                    <div class="user-name"><?= get_the_author(); ?></div>
                    <div class="user-set"><?= get_field('user_set', 'user_'. $user_id ) ?></div>
                    <div class="user-background">
                        <div class="user-block_title">
                            <?= get_field('user_background-title', 'user_'. $user_id ) ?>
                        </div>
                        <?= $user_background ?>

                        <div class="user-skills">
                            <div class="user-block_title">
                                 <?= get_field('user_skills-title', 'user_'. $user_id ) ?>
                            </div>
                            <?= $user_skills ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="user-posts blog-row bg-light">
        <div class="container">
			<div class="heading">
                <div class="row">					
                    <h2 class="heading-title col-12 col-md-12 col-lg-3"><?= get_field('user_posts-title', 'user_'. $user_id ) ?></h2>
            	</div>
        	</div>
            <div class="blog-posts swiper postsSwiper">
                <div class="swiper-wrapper">
                    <?php if ( have_posts() ) {
					while( have_posts() ) {
						the_post();
						global $shown_blog_posts;
						( !isset( $shown_blog_posts ) ) && ( $shown_blog_posts = [] );
						$shown_blog_posts = $data->ID;
						$data = get_sub_field( 'post_object' );
						$img = get_the_post_thumbnail_url($data->ID, 'full');
						!$img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
						$categories = get_the_category( (int) $data->ID );
						?>

                    <article class="blog-posts-item col-md-4 col-sm-6 swiper-slide" onclick="window.location='<?= get_permalink($data->ID) ?>';">
                        <div class="blog-posts_image">
                            <a href="<?= get_permalink($data->ID) ?>">
                                <img src="<?= $img ?>" alt="<?= $data->post_title ?>" />
                            </a>
                        </div>

                        <div class="blog-posts-content">
                            <div class="blog-posts_meta">
                                <a href="<?= esc_url( get_category_link( $categories[0]->term_id ) ) ?>">
                                    <?= get_the_category( $data->ID )[0]->name; ?>
                                </a>
                                <?php echo do_shortcode('[rt_reading_time post_id="' . $data->ID . '"] MIN READ') ?>
                            </div>
                            <div class="blog-posts_title">
                                <a href="<?= get_permalink($data->ID) ?>">
                                    <?= the_title(); ?>
                                </a>
                            </div>
                            <div class="blog-posts-excerpt">
                                <?= substr(get_post_meta($data->ID, '_yoast_wpseo_metadesc', true), 0, 100) ?>
                                <?php
							$yoast_meta = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
							if ($yoast_meta) { //check if the variable(with meta value) isn't empty
								echo $yoast_meta;
							}
						?>
                            </div>
                        </div>
                    </article>

                    <?php } 
				} ?>
                </div>
					<div class="swiper-buttons swiper-button-next"><img src = "https://surf.dev/staging/wp-content/uploads/2023/08/post-slider-arrow.svg" alt="button next"/></div>
					<div class="swiper-buttons swiper-button-prev"><img src = "https://surf.dev/staging/wp-content/uploads/2023/08/post-slider-arrow.svg" alt="button prev"/></div>
            </div>
        </div>
    </section>


</main>

<?php get_template_part('templates/contact'); ?>
<?php get_footer(); // подключаем footer.php ?>