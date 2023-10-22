<?php
/**
 * Template Name: Android new design
 */

get_header();
$case_banner_bg = get_field( 'case-banner_bg' ); 
?>

	<main class="main new-servise-page">

	  <section class="page-banner" <?php if ($case_banner_bg) :?>style="background-image: url(<?php echo $case_banner_bg['url'] ?>)" <?php endif; ?>>
       <div class="container">
                <div class="banner-row">
                    <div class="banner-col left-col col-lg-5 col-md-7 col-12">
                        <h1><?php the_title(); // заголовок поста ?></h1>
                        <div class="sub-title">
                            <?php the_field('sub-title') ?>
                        </div>
						<div class="sub-text">
                            <?php the_field('sub-text') ?>
                        </div>
						<div class="row">
						<a class="banner-btn btn-blue col-md-5 col-12" href="<?php the_field( 'banner-button-link' ); ?>"> <?php the_field( 'banner-button-text' ); ?></a>
							<? if(get_field( 'reward_logo' ) || the_field('case_reward')) : ?>
                        <div class="case-reward col-md-6 col-12">
                            <?php $img_first = get_field( 'reward_logo' ); ?>
                            <?php echo '<img src="' . $img_first['url'] . '" alt="" />'; ?>
                            <?php the_field('case_reward') ?>
                        </div>
							<?php endif; ?>
						</div>
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
                    </div>
                </div>
            </div>
      </section>
		
				<?php the_content(); ?>
		
                 

	</main>
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
						<div class="case-item" style="background-color: <?php echo $case_bg ?>">
							<div class="case-item_static">
								<div class="case-item_logo"> <?php echo '<img src="' . $case_logo['url'] . '" alt="" />'; ?></div>
								<div class="case-item_title"><?php echo $case_title; ?></div>
									<?php if( $case_awards ) : ?>
								<div class="case-item_award">
									<img src="https://surf.dev/wp-content/uploads/2023/06/award-white.svg" alt="">
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
