<?php
$element_1 = get_field('grid_1el');
$element_2 = get_field('grid_2el');
$element_3 = get_field('grid_3el');
$element_4 = get_field('grid_4el');
$element_5 = get_field('grid_5el');
$element_6 = get_field('grid_6el');
$parent = get_field('title-and-text-block-1-3'); 

?>
<section class="point-list bg-<?php echo $parent['background_color']; ?>">
<div class="container">
	 <div class="heading">
                <div class="row">
                    <h2 class="heading-title col-12 col-lg-3"><?php echo $parent['title']; ?></h2>
                    <div class="heading-text col-12 col-lg-6 col-lg-offset-1">
                        <?php echo $parent['text']; ?>
                    </div>
                </div>
        </div>
    <ol class="grid-wrap row">
	<li class="grid-element col-md-4 col-12">
	    <div class="grid-element_head">
	        <div class="grid-element_title">
	            <?php echo $element_1['title'] ?>
	        </div>
	       <?php if($element_1['icon']) : ?>
				<div class="grid-element_icon">
					<img src="<?php echo $element_1['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_1['text'] ?>
	    </div>
	</li>
	<li class="grid-element col-md-4 col-12">
	    <div class="grid-element_head">
	        <div class="grid-element_title">
	            <?php echo $element_2['title'] ?>
	        </div>
	       <?php if($element_2['icon']) : ?>
				<div class="grid-element_icon">
					<img src="<?php echo $element_2['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_2['text'] ?>
	    </div>
	</li>
	<li class="grid-element col-md-4 col-12">
	    <div class="grid-element_head">
	        <div class="grid-element_title">
	            <?php echo $element_3['title'] ?>
	        </div>
	       <?php if($element_3['icon']) : ?>
				<div class="grid-element_icon">
					<img src="<?php echo $element_3['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_3['text'] ?>
	    </div>
	</li>
		
		<?php if($element_4['title'] || $element_4['text']): ?>
	<li class="grid-element col-md-4 col-12">
	    <div class="grid-element_head">
	        <div class="grid-element_title">
	            <?php echo $element_4['title'] ?>
	        </div>
	        <?php if($element_4['icon']) : ?>
				<div class="grid-element_icon">
					<img src="<?php echo $element_4['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_4['text'] ?>
	    </div>
	</li>
		<?php endif; ?>
		
		<?php if($element_5['title'] || $element_5['text']): ?>
	<li class="grid-element col-md-4 col-12">
	    <div class="grid-element_head">
	        <div class="grid-element_title">
	            <?php echo $element_5['title'] ?>
	        </div>
	        <?php if($element_5['icon']) : ?>
				<div class="grid-element_icon">
					<img src="<?php echo $element_5['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_5['text'] ?>
	    </div>
	</li>
		<?php endif; ?>
		
		
		<?php if($element_6['title'] || $element_6['text']): ?>
	<li class="grid-element col-md-4 col-12">
	    <div class="grid-element_head">
	        <div class="grid-element_title">
	            <?php echo $element_6['title'] ?>
	        </div>
	       <?php if($element_6['icon']) : ?>
				<div class="grid-element_icon">
					<img src="<?php echo $element_6['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_6['text'] ?>
	    </div>
	</li>
		<?php endif; ?>
	</ol>
</div>
</section>