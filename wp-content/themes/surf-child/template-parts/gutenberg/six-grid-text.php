<?php
$parent = get_field('title-and-text-block-1-3');

$first_col = get_field('six-col-1');
$first_col_title = $first_col['title'];
$first_col_link = $first_col['title-link'];
$first_col_text = $first_col['text'];
$first_col_bg = $first_col['bg-color'];

$second_col = get_field('six-col-2');
$second_col_title = $second_col['title'];
$second_col_link = $second_col['title-link'];
$second_col_text = $second_col['text'];
$second_col_bg = $second_col['bg-color'];

$third_col = get_field('six-col-3');
$third_col_title = $third_col['title'];
$third_col_link = $third_col['title-link'];
$third_col_text = $third_col['text'];
$third_col_bg = $third_col['bg-color'];

$fourth_col = get_field('six-col-4');
$fourth_col_title = $fourth_col['title'];
$fourth_col_link = $fourth_col['title-link'];
$fourth_col_text = $fourth_col['text'];
$fourth_col_bg = $fourth_col['bg-color'];

$fifth_col = get_field('six-col-5');
$fifth_col_title = $fifth_col['title'];
$fifth_col_link = $fifth_col['title-link'];
$fifth_col_text = $fifth_col['text'];
$fifth_col_bg = $fifth_col['bg-color'];

$sixth_col = get_field('six-col-6');
$sixth_col_title = $sixth_col['title'];
$sixth_col_link = $sixth_col['title-link'];
$sixth_col_text = $sixth_col['text'];
$sixth_col_bg = $sixth_col['bg-color'];
?>
<section class="text-grid bg-<?php echo $parent['background_color']; ?>">
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
            <div class="block-col col-12 col-md-4 col-sm-6 hover-<?= $first_col_bg ?>">
                <div class="block-col_title">
                    <?php if($first_col_link) : ?>
                    <a href="<?= $first_col_link ?>"><?php echo $first_col_title ?></a>
                    <?php else : ?>
                    <?php echo $first_col_title ?>
                    <?php endif; ?>
                </div>
                <div class="block-col_text"><?php echo $first_col_text ?></div>
            </div>
			
            <div class="block-col col-12 col-md-4 col-sm-6 hover-<?= $second_col_bg ?>">
                <div class="block-col_title">
                    <?php if($second_col_link) : ?>
                    <a href="<?= $second_col_link ?>"><?php echo $second_col_title ?></a>
                    <?php else : ?>
                    <?php echo $second_col_title ?>
                    <?php endif; ?>
                </div>
                <div class="block-col_text"><?php echo $second_col_text ?></div>
            </div>
			
			<?php if($third_col_text || $third_col_title): ?>
            <div class="block-col col-12 col-md-4 col-sm-6 hover-<?= $third_col_bg ?>">
                <div class="block-col_title">
                    <?php if($third_col_link) : ?>
                    <a href="<?= $third_col_link ?>"><?php echo $third_col_title ?></a>
                    <?php else : ?>
                    <?php echo $third_col_title ?>
                    <?php endif; ?>
                </div>
                <div class="block-col_text"><?php echo $third_col_text ?></div>
            </div>
			  <?php endif; ?>
			
			<?php if($fourth_col_text || $fourth_col_title): ?>
            <div class="block-col col-12 col-md-4 col-sm-6 hover-<?= $fourth_col_bg ?>">
                <div class="block-col_title">
                    <?php if($fourth_col_link) : ?>
                    <a href="<?= $fourth_col_link ?>"><?php echo $fourth_col_title ?></a>
                    <?php else : ?>
                    <?php echo $fourth_col_title ?>
                    <?php endif; ?>
                </div>
                <div class="block-col_text"><?php echo $fourth_col_text ?></div>
            </div>
			  <?php endif; ?>
			
			<?php if($fifth_col_text || $fifth_col_title): ?>
            <div class="block-col col-12 col-md-4 col-sm-6 hover-<?= $fifth_col_bg ?>">
                <div class="block-col_title">
                    <?php if($fifth_col_link) : ?>
                    <a href="<?= $fifth_col_link ?>"><?php echo $fifth_col_title ?></a>
                    <?php else : ?>
                    <?php echo $fifth_col_title ?>
                    <?php endif; ?>
                </div>
                <div class="block-col_text"><?php echo $fifth_col_text ?></div>
            </div>
			<?php endif; ?>
			
			<?php if($sixth_col_text || $sixth_col_title): ?>
            <div class="block-col col-12 col-md-4 col-sm-6 hover-<?= $sixth_col_bg ?>">
                <div class="block-col_title">
                    <?php if($sixth_col_link) : ?>
                    <a href="<?= $sixth_col_link ?>"><?php echo $sixth_col_title ?></a>
                    <?php else : ?>
                    <?php echo $sixth_col_title ?>
                    <?php endif; ?>
                </div>
                <div class="block-col_text"><?php echo $sixth_col_text ?></div>
            </div>
			<?php endif; ?>
        </div>
	</div>
</section>