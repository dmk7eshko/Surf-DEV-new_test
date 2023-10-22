<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage Surf
 */
$terms = get_terms('otrasli');
	if ($terms && !is_wp_error($terms)) {
		foreach ($terms as $term) {

		}
	}

	$terms = get_terms('type');
	if ($terms && !is_wp_error($terms)) {
		foreach ($terms as $term) {

		}
	}
	$case_title = get_field('three_case_title', $post->ID);
	$case_bg = get_field('three_case_bg', $post->ID);
	$case_logo = get_field('three_case_logo', $post->ID);
	$case_award_logo = get_field('three_case_award_logo', $post->ID);
	$case_awards = get_field('three_case_awards', $post->ID);
	$case_mock = get_field('three_case_mock', $post->ID);
	$new_title = get_sub_field('new-title');

	setup_postdata($post);

	?>

    <article id="post-<?php the_ID(); ?>" style="background-color: <?php echo $case_bg ?>" class="case-post row col-12 col-md-4" onclick="window.location='<?php the_permalink($post->ID); ?>';">
		
		<div class="case-post-content col-md-12 col-sm-7 col-12">
			 <div class="case-item_logo">
   <?php
		if($case_logo['url']){
			echo '<img src="' . $case_logo['url'] . '" alt="" />'; 
		} else{
   			echo '<img src="https://surf.dev/wp-content/uploads/2023/04/Vector1.png" alt="" />';
   }
		?>
</div>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</div>
		
		<div class="case-post-image col-md-12 col-sm-5 col-12">
				<?php if($case_mock['url']) : ?>
					<img src="<?= $case_mock['url'] ?>" alt="<?php the_title() ?>" />
				<?php endif;  ?>
		</div>
</article>