<section class="services">
	<div class="container">
		<div class="services__inner">
			<h2 class="services__title page-title"><?= get_field('dev_services_title'); ?></h2>
			<div class="services__block">
				<?php foreach (get_field('dev_services_list') as $service) : ?>
					<div class="services__block-item block-item">
						<h2 class="block-item__title"><?= $service['title']; ?></h2>
						<ul>
							<?php foreach ($service['items'] as $item) : ?>
								<li><?= $item['item']; ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>
