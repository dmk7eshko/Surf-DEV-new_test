<?php
/**
 * Template Name: Home-page new design
 */

get_header();
$case_banner_bg = get_field( 'case-banner_bg' );
?>

	<main class="main new-home-page">
	   <section class="page-banner" <?php if ($case_banner_bg) :?>style="background-image: url(<?php echo $case_banner_bg['url'] ?>)" <?php endif; ?>>
		   <?php if(!wp_is_mobile()) : ?>
	        <video src="https://surf.dev/wp-content/uploads/2023/06/pexels-yaroslav-shuraev-7668506-2160p.mp4" loop muted autoplay></video>
	         <div class="overlay"></div>
		   <?php endif; ?>
       <div class="container">
                <div class="banner-row">
                    <div class="banner-col col-lg-7 col-md-11 col-12">
						<div class="row">
                        <h1 class="col-md-8 col-12"><?php the_title(); // заголовок поста ?></h1>
							</div>
						<?php if(the_field('sub-title')) :?>
							<div class="row">
                        <div class="sub-title col-lg-10 col-12">
                            <?php the_field('sub-title') ?>
                        </div>
								<?php if(the_field('sub-text')) :?>
						<div class="sub-text">
                            <?php the_field('sub-text') ?>
                        </div>
								 <?php endif; ?>
						</div>
						 <?php endif; ?>
						<div class="col-lg-12 col-12">
							<div class="row">
						<a class="banner-btn btn-blue col-md-4 col-12" href="<?php the_field( 'banner-button-link' ); ?>"> <?php the_field( 'banner-button-text' ); ?></a>
                        <div class="case-reward row col-md-8 col-12">
                            <?php $img_first = get_field( 'reward_logo' ); ?>
                            <?php echo '<img src="' . get_field( 'reward_logo_2' )['url'] . '" alt="" />'; ?>
							<div class="case-reward_second">
                            <?php echo '<img src="' . $img_first['url'] . '" alt="" />'; ?>
							<span><?php the_field('case_reward') ?></span>
							</div>
                        </div>
						</div>
							</div>
                    </div>
                </div>
            </div>
      </section>
				<?php the_content(); ?>
	</main>

<?php get_template_part('templates/contact'); ?>
<?php get_footer(); ?>
