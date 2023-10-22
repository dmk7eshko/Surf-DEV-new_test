<?php
$parent = get_field('title-and-text-block-1-3');
?>

<section class="awards-logo bg-<?php echo $parent['background_color']; ?>">
    <div class="container">
        <div class="heading">
                <div class="row">
                    <h2 class="heading-title col-12 col-lg-3"><?php echo $parent['title']; ?></h2>
                    <div class="heading-text col-12 col-lg-6 col-lg-offset-1">
                        <?php echo $parent['text']; ?>
                    </div>
                </div>
        </div>
    </div>
	<div class="container">
     <div class="row-grid">
            <div class="awards-logo_item">
                <img src="<?php echo get_field('logo_1') ?>" />
            </div>
            <div class="awards-logo_item">
                <img src="<?php echo get_field('logo_2') ?>" />
            </div>
            <div class="awards-logo_item">
                <img src="<?php echo get_field('logo_3') ?>" />
            </div>
		 <?php if(get_field('logo_4')) : ?>
            <div class="awards-logo_item">
                <img src="<?php echo get_field('logo_4') ?>" />
            </div>
		 <?php endif; ?>
		  <?php if(get_field('logo_5')) : ?>
            <div class="awards-logo_item">
                <img src="<?php echo get_field('logo_5') ?>" />
            </div>
		 <?php endif; ?>
		 <?php if(get_field('logo_6')) : ?>
            <div class="awards-logo_item">
                <img src="<?php echo get_field('logo_6') ?>" />
            </div>
		 <?php endif; ?>
        </div>
	</div>
</section>