<?php if ($clients = get_field('clients-section')) : ?>
	<section class="clients">
		<div class="container">
			<ul class="clients-list">
				<?php foreach ($clients['gallery'] as $client) : ?>
					<li class="clients-list__item">
						<div class="clients-list__item-image">
							<?= wp_get_attachment_image($client, false, null, ['loading' => 'eager', 'decoding' => 'async']); ?>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>