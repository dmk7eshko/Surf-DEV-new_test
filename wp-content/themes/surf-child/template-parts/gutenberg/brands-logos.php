<?php
$parent = get_field('title-and-text-block-1-3');
?>

<section class="brands-logo">
    <div class="container">
        <div class="heading">
            <div class="row">
                <h2 class="heading-title col-12 col-lg-3"><?php echo $parent['title']; ?></h2>
                <div class="heading-text col-12 col-lg-6 col-lg-offset-1">
                    <?php echo $parent['text']; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="brands-logo_item col-md-2 col-sm-3 col-6">
                <img src="<?php echo get_field('logo_1') ?>" />
            </div>
            <div class="brands-logo_item col-md-2 col-sm-3 col-6">
                <img src="<?php echo get_field('logo_2') ?>" />
            </div>
            <div class="brands-logo_item col-md-2 col-sm-3 col-6">
                <img src="<?php echo get_field('logo_3') ?>" />
            </div>
            <div class="brands-logo_item col-md-2 col-sm-3 col-6">
                <img src="<?php echo get_field('logo_4') ?>" />
            </div>
            <div class="brands-logo_item col-md-2 col-sm-3 col-6">
                <img src="<?php echo get_field('logo_5') ?>" />
            </div>
            <div class="brands-logo_item col-md-2 col-sm-3 col-6">
                <img src="<?php echo get_field('logo_6') ?>" />
            </div>
        </div>
    </div>
</section>