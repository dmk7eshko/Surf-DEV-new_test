<?php
$parent = get_field('title-and-text-block-1-3'); 
$first_col = get_field('three-col-title');
$first_col_title = $first_col['title'];
$second_col = get_field('three-col-second');
$second_col_title = $second_col['title'];
$second_col_text = $second_col['text'];
$third_col = get_field('three-col-third');
$third_col_title = $third_col['title'];
$third_col_text = $third_col['text'];
?>	
<section class="three-col-text">
<div class="container">
    <?php if($parent['title']) : ?>
    <div class="heading">
                <div class="row">
                    <h2 class="heading-title col-12 col-lg-3"><?php echo $parent['title']; ?></h2>
                    <div class="heading-text col-12 col-lg-6 col-lg-offset-1">
                        <?php echo $parent['text']; ?>
                    </div>
                </div>
        </div>
        <?php endif;?>
	<div class="row">
	   	     <?php if($first_col_title) : ?>
	<div class="block-col col-md-4 col-sm-6 col-12">
		<div class="block-col_title"><?php echo $first_col_title ?></div>
	</div>
		<?php endif; ?>
		 <?php if(!$first_col_title) : ?>
		<div class="block-col col-lg-4 col-sm-6 col-12 col-lg-offset-4">
		 <?php else : ?>
		<div class="block-col col-lg-4 col-sm-6 col-12">
		<?php endif; ?>
		<div class="block-col_title"><?php echo $second_col_title ?></div>
		<div class="block-col_text"><?php echo $second_col_text ?></div>
	</div>
	<div class="block-col col-lg-4 col-sm-6 col-12">
		<div class="block-col_title"><?php echo $third_col_title ?></div>
		<div class="block-col_text"><?php echo $third_col_text ?></div>
	</div>
	</div>
</div>
</section>