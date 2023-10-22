<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage Surf.ru
 */
get_header(); // подключаем header.php ?>
<section class="single-page">
    <?php if (have_posts()) {
            while (have_posts()) : the_post(); // старт цикла ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
        <?php 
	$case_banner_bg = get_field( 'case-banner_bg' ); 
	$case_img = get_field( 'banner_image_first' ); 
		
		?>
        <?php if($case_img){ ?>
        <div class="single-banner" <?php if ($case_banner_bg) :?>style="background-image: url(<?php echo $case_banner_bg['url'] ?>)" <?php endif; ?>>
            <div class="container">
                <div class="banner-row">
                    <div class="banner-col left-col col-lg-5 col-md-7 col-12">
                        <h1><?php the_title(); // заголовок поста ?></h1>
                        <div class="sub-title">
                            <?php the_field('sub-title') ?>
                        </div>
                        <?php if(get_field( 'reward_logo' )) : ?>
                        <div class="case-reward col-md-6 col-12">
                            <?php $img_first = get_field( 'reward_logo' ); ?>
                            <?php echo '<img src="' . $img_first['url'] . '" alt="" />'; ?>
                            <?php the_field('case_reward') ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="banner-col right-col col-lg-4 col-md-5 col-12 col-lg-offset-3">
                        <?php
	                        $img_first = get_field( 'banner_image_first' );
	                        $img_second = get_field( 'banner_image_second' );
								?>
                        <?php if ( get_field( 'banner_image_first' ) ) : ?>
                        <div class="single-banner-image single-banner-image_first">
                            <?php echo '<img src="' . $img_first['url'] . '" alt="" />'; ?>
                        </div>
                        <?php endif; ?>
                        <?php if ( get_field( 'banner_image_second' ) ) : ?>
                        <div class="single-banner-image single-banner-image_second">
                            <?php echo '<img src="' . $img_second['url'] . '" alt="" />'; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php }else{ ?>
        <div class="single-hero">
            <?php if (get_field('color')): ?>
            <div class="linear mobile-hidden" style="background: radial-gradient(ellipse at top, <?php the_field('color') ?> 0%, rgba(249,249,249,0.12) 50%);"></div>
            <?php else : ?>
            <div class="linear mobile-hidden" style="<?php the_field('gradient') ?>"></div>
            <?php endif ?>
            <div class="container">
                <h1><?php the_title(); // заголовок поста ?></h1>
                <div class="the-date">
                    <?php the_field('top-title') ?>
                </div>
                <?php
	                        $img = get_field( 'hero_image' );
		                        ?>

                <?php if ( get_field( 'hero_image' ) ) : ?>
                <div class="single-hero-image">
                    <?php echo '<img src="' . $img['url'] . '" alt="" />'; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <?php } ?>


        <?php if (isset($_GET['test'])) : ?>
        <aside class="listing case-cross-tags">
            <?php if ($similar_cases = CrossTagsController::getSimilarPosts(get_the_ID(), 'cases', 3)) : ?>
            <div class="hardcore-block hardcore-read-next">
                <h4>Read Next:</h4>
                <ul class="read-next-list">
                    <?php foreach ($similar_cases as $similar_case){ ?>
                    <li>
                        <a href="<?php echo get_permalink($similar_case->ID)?>">
                            <?php echo $similar_case->post_title?>
                        </a>
                    </li>
                    <?php } ?>
                </ul>
            </div>
            <?php endif; ?>
        </aside>
        <?php endif; ?>
        <?php 
// 			$div = "This content is after first </h2> tag";
// 			echo $content = preg_replace('/(h2 | <h2> | <\/h2>)/','', $div, 1); 
// 			$tag = ( is_page_template() ) ? 'h1' : 'h2'; echo '<' . $tag . ' id="branding">';
		?>





        <div class="container">

            <?php
	 if(!wp_is_mobile()){
		 $query = get_post(get_the_ID());    
			$content = apply_filters('the_content', $query->post_content);
// 			$p_count = substr_count($content, '<h3>');
			$p_count = substr_count($content, 'h2');
			if($p_count){
				?>
            <div class="listing col-2">
                <div class="listing-title">Contents</div>
                <ul class="listing-content"></ul>
            </div>
            <?php
			}
	 }
			
		?>
            <div class="container col-md-8 col-sm-12 col-sm-offset-0 col-md-offset-3">
				
                <?php the_content(); // контент ?>
              
            </div>
        </div>

    </article>
    <?php endwhile;
        } // конец цикла ?>
</section>

<?php if( have_rows('three_cases_blocks')): // check for repeater fields ?>

<section class="related-cases_grid">
    <?php while ( have_rows('three_cases_blocks')) : the_row(); // loop through the repeater fields ?>
    <?php // set up post object
						$post_object = get_sub_field('cases_object');
				   		
						if( $post_object ) :
						$post = $post_object;
				   		$case_title = get_field('three_case_title');
				   		$case_bg = get_field('three_case_bg');
				   		$case_logo = get_field('three_case_logo');
				   		$case_award_logo = get_field('three_case_award_logo');
				   		$case_awards = get_field('three_case_awards');
				   		$case_mock = get_field('three_case_mock');
						setup_postdata($post);
						
						?>
    <div class="case-item" style="background-color: <?php echo $case_bg ?>" onclick="window.location='<?php the_permalink($post->ID); ?>';">
        <div class="case-item_static">
            <div class="case-item_logo">
                <?php
									if($case_logo['url']){
										echo '<img src="' . $case_logo['url'] . '" alt="" />'; 
									} else{
							   			echo '<img src="https://surf.dev/staging/wp-content/uploads/2023/04/Vector.png" alt="" />';
							   }
									?>
            </div>
            <div class="case-item_title"><?php echo $case_title; ?></div>
            <?php if( $case_award_logo ) : ?>
            <div class="case-item_award">
                <?php echo '<img src="' . $case_award_logo['url'] . '" alt="" />'; ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="case-item_image"><?php echo '<img src="' . $case_mock['url'] . '" alt="" />'; ?></div>
    </div>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
    <?php endif; ?>
    <?php endwhile; ?>
</section>

<!-- End Repeater -->
<?php endif; ?>


<?php get_template_part('templates/contact'); ?>
<?php get_footer(); // подключаем footer.php ?>