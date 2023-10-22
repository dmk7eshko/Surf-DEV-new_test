<?php
$parent = get_field('title-and-text-block-1-3');
$bg_color = get_field('bg-color');
$first_col = get_field('three-col-1');
$first_col_title = $first_col['title'];
$first_col_text = $first_col['text'];
$second_col = get_field('three-col-2');
$second_col_title = $second_col['title'];
$second_col_text = $second_col['text'];
$third_col = get_field('three-col-3');
$third_col_title = $third_col['title'];
$third_col_text = $third_col['text'];
?>	

<section class="three-col bg-<?php echo $bg_color; ?>">
<div class="container">
    <?php if ($parent){ ?>
    <div class="heading">
                <div class="row">
                    <h2 class="heading-title col-12 col-lg-3"><?php echo $parent['title']; ?></h2>
                    <div class="heading-text col-12 col-lg-6 col-lg-offset-1">
                        <?php echo $parent['text']; ?>
                    </div>
                </div>
        </div>
        <?php } ?>
	<div class="row">
	<div class="block-col col-12 col-md-3 col-sm-4">
		<div class="block-col_title"><?php echo $first_col_title ?></div>
		<div class="block-col_text"><?php echo $first_col_text ?></div>
	</div>
	<div class="block-col col-12 col-md-3 col-sm-4 col-sm-offset-1">
		<div class="block-col_title"><?php echo $second_col_title ?></div>
		<div class="block-col_text"><?php echo $second_col_text ?></div>
	</div>
	<div class="block-col col-12 col-md-3 col-sm-4 col-md-offset-1">
		<div class="block-col_title"><?php echo $third_col_title ?></div>
		<div class="block-col_text"><?php echo $third_col_text ?></div>
	</div>
	</div>
</div>
</section>