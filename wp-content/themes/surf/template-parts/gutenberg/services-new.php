<?php if ($services = get_field('services_section')) : ?>
	<section class="services section">
		<div class="container">
			<?php if ( $services['title'] ) : ?>
				<h2 class="section-title services-title"><?php echo $services['title']; ?></h2>
			<?php endif;
			if ($services['list']) : ?>
				<ul class="services-list">
					<?php foreach ($services['list'] as $service) : ?>
						<li class="services-list__item service-item">
							<a href="<?php echo $service['url']; ?>" class="service-item__link" title="<?php echo $service['title']; ?>">
								<h3 class="service-item__title"><?php echo $service['title']; ?></h3>
								<div class="service-item__text"><?php echo $service['text']; ?></div>
								<span class="service-item__more btn btn-default"><?php echo $service['more']; ?></span>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
				<?php if ($services['more_btn']) : ?>
					<div class="services-more section-more">
						<?php if ($services['more_text']) : ?>
							<p class="section-more__text h3"><?php echo $services['more_text']; ?></p>
						<?php endif; ?>
						<a href="/about-us/" class="section-more__link btn btn-large btn-default btn-invert"><?php echo $services['more_btn']; ?></a>
					</div>
				<?php endif;
			endif; ?>
		</div>
	</section>
<?php endif; ?>
