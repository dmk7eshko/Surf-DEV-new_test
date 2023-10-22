<?php if ($google = get_field('google')) :?>
	<div class="google-wrapper">
		<div class="container">
			<?php if (get_field('google_title')) : ?>
				<div class="front-section-title">
					<h2><?php echo get_field('google_title'); ?></h2>
				</div>
			<?php endif; ?>
			<?php if (get_field('google_desc')) : ?>
				<span class="google-desc"><?php echo get_field('google_desc'); ?></span>
			<?php endif; ?>
			<div class="google">
				<?php
				foreach ($google as $item) :
					$reverse = $item['right'] ? ' google-block--reverse' : '';
					?>
					<?php if ($item['url']) : ?>
						<a href="<?php echo $item['url']; ?>" class="google-block<?php echo $reverse; ?>" target="_blank">
					<?php else: ?>
						<div class="google-block<?php echo $reverse; ?>">
					<?php endif; ?>
			            <span>
				            <?php echo $item['title']; ?>
							<?php if ($item['icon']) : ?>
				                <img src="<?php echo $item['icon']; ?>" alt="">
							<?php endif; ?>
			            </span>
						<p><?php echo $item['description']; ?></p>
					<?php if (!$item['url']) : ?>
						</div>
						<?php else: ?>
						</a>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php endif; ?>