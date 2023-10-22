<?php 
    // Load sub field value.
    $name = get_field('name');
    $doljnost = get_field('doljnost');
    $photo = get_field('photo');
    $text = get_field('test');
    $spoiler = get_field('spoiler');
    $big = get_field('big');
	$case = get_field('case_review');
?>
<div class="testimonial<?php echo $spoiler ? ' with-spoiler' : ''; echo $big ? ' testimonial--big' : ''; echo $case ? ' testimonial--case' : ''; ?>">
    <div class="testimonial-text">
        <?php echo $text ?>
    </div>
    <div class="testimonial-photo">
	    <?php if ($photo) : ?>
            <img src="<?php echo $photo ?>" alt="">
	    <?php endif; ?>
        <div class="testimonial-name">
            <span><?php echo $name ?></span>
            <p><?php echo $doljnost ?></p>
        </div>
    </div>
</div>