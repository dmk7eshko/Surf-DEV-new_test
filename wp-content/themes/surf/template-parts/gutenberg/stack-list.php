<?php if ($archs = get_field('stack')) : ?>
	<div class="stack">
		<?php foreach ($archs as $arch) : ?>
			<div class="stack__item">
				<span class="stack__item-title"><?php echo $arch['title']; ?></span>
				<?php if ($techs = $arch['technologies']) : ?>
					<ul class="stack__item-techs">
						<?php foreach ($techs as $tech) : ?>
							<li><?php echo $tech['title']; ?></li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>