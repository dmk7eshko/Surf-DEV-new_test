<?php
/*
 Template name: SURF Services template
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
                        <div class="case-reward col-md-6 col-12">
							<?php if(get_field( 'reward_logo' )) : ?>
								<?php $img_first = get_field( 'reward_logo' ); ?>
								<?php echo '<img src="' . $img_first['url'] . '" alt="" />'; ?>
							<?php endif; ?>
                            <?php the_field('case_reward') ?>
                        </div>
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

<?php get_template_part('templates/contact'); ?>
<?php get_footer(); // подключаем footer.php ?>