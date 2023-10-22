<?php
$element_1 = get_field('grid_1el');
$element_2 = get_field('grid_2el');
$element_3 = get_field('grid_3el');
$element_4 = get_field('grid_4el');
$parent = get_field('title-and-text-block-1-3'); 

?>
<section class="point-list two-col bg-<?php echo $parent['background_color']; ?>">
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
	<li class="grid-element col-12 col-md-6">
		<?php if($element_1['link']) : ?>
		<a href="<?php echo $element_1['link'] ?>">
		<?php endif; ?>
	    <div class="grid-element_head">
	        <div class="grid-element_title col-6">
	            <?php echo $element_1['title'] ?>
	        </div>
			<?php if($element_1['icon']) : ?>
				<div class="grid-element_icon col-6">
					<img src="<?php echo $element_1['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_1['text'] ?>
	    </div>
			<?php if($element_1['link']) : ?>
		</a>
		<?php endif; ?>
	</li>
	<li class="grid-element col-12 col-md-6">
		<?php if($element_2['link']) : ?>
		<a href="<?php echo $element_2['link'] ?>">
		<?php endif; ?>
	    <div class="grid-element_head">
	        <div class="grid-element_title col-6">
	            <?php echo $element_2['title'] ?>
	        </div>
	       <?php if($element_2['icon']) : ?>
				<div class="grid-element_icon col-6">
					<img src="<?php echo $element_2['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_2['text'] ?>
	    </div>
		</a>
	</li>
	<li class="grid-element col-12 col-md-6">
		<?php if($element_3['link']) : ?>
		<a href="<?php echo $element_3['link'] ?>">
		<?php endif; ?>
	    <div class="grid-element_head">
	        <div class="grid-element_title col-6">
	            <?php echo $element_3['title'] ?>
	        </div>
	        <?php if($element_3['icon']) : ?>
				<div class="grid-element_icon col-6">
					<img src="<?php echo $element_3['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_3['text'] ?>
	    </div>
		</a>
	</li>
	<li class="grid-element col-12 col-md-6">
		<?php if($element_4['link']) : ?>
		<a href="<?php echo $element_4['link'] ?>">
		<?php endif; ?>
	    <div class="grid-element_head">
	        <div class="grid-element_title col-6">
	            <?php echo $element_4['title'] ?>
	        </div>
	        <?php if($element_4['icon']) : ?>
				<div class="grid-element_icon col-6">
					<img src="<?php echo $element_4['icon']['url'] ?>" />
				</div>
			<?php endif; ?>
	    </div>
	    <div class="grid-element_text">
	        <?php echo $element_4['text'] ?>
	    </div>
		</a>
	</li>
	</ol>
</div>
</section>