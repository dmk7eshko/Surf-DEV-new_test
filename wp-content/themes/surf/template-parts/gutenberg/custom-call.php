<?php
	$title = get_field('title');
	$title_color = get_field('title_color');
	$desc = get_field('desc');
	$desc_color = get_field('desc_color');
	$btn = get_field('button_text');
	$btn_url = get_field('button_url');
	$btn_color = get_field('button_color');
	$gr1 = get_field('color_1');
	$gr2 = get_field('color_2');
	$deg = get_field('deg');
	$perc = get_field('perc');
	(empty($btn)) && ($btn = 'Estimate');
	$gradient = get_field('gradient') ? 'style="background: linear-gradient(' . $deg . 'deg,' . $gr1 . ' 0%,' . $gr1 . ' ' . $perc . '%,' . $gr2 . ' 100%);"' : null;
	$url = $btn_url ?: get_the_permalink('243');
	$for_page = get_field('for_page');
	$for_case = get_field('for_case');
?>
 <?php if (!$for_page && !$for_case) : ?>
	</div>
	</article>
<?php endif; ?> 
	<div class="cta<?= $for_page ? ' cta--block cta--page' : ($for_case ? ' cta--block cta--case' : ''); ?>">
		<div class="container">
			<section class="call custom-call"<?= $gradient; ?>>
				<div class="custom-call-wrapper">
					<div class="content">
						<?php if ($title) : ?>
							<div class="call-title"<?= $title_color ? ' style="color:' . $title_color . '"' : null; ?>>
								<?= $title ?>
							</div>
						<?php endif; ?>
						<div class="call-desc"<?= $desc_color ? ' style="color:' . $desc_color . '"' : null; ?>>
							<?= $desc ?>
						</div>
					</div>
					<a href="<?= $url; ?>" class="call-us<?= $btn_color ? ' call-us--black' : ''; ?>"><?= $btn ?></a>
				</div>
			</section>
		</div>
	</div>
