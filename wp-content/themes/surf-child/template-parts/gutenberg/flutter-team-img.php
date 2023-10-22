<?php
$parent = get_field('title-and-text-block-1-3');
$team_row = get_field('flutter-team-img');
$team_row_img1 = $team_row['flutter-team-img-1'];
$team_row_img2 = $team_row['flutter-team-img-2'];
$team_row_img3 = $team_row['flutter-team-img-3'];
?>	
	<section class="flutter-team">
<div class="container">
	<div class="heading">
		<div class="row">
         <h2 class="heading-title"><?php echo $parent['title']; ?></h2>
    <div class="heading-text">
            <?php echo $parent['text']; ?>
    </div>
	</div>
</div>
	<div class="team-row">
	<div class="block-img-col">
		<img src="<?php echo $team_row_img1['url']?>" />
	</div>
	<div class="block-img-col">
		<img src="<?php echo $team_row_img2['url']?>" />
	</div>
	<div class="block-img-col">
		<img src="<?php echo $team_row_img3['url']?>" />
	</div>
</div>
</div>
</section>