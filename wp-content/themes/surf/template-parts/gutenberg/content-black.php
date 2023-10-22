<?php if ($content = get_field('content')) : ?>
	<section class="content-block content-block--black">
		<div class="container">
			<?php if ( get_field( 'content_title' ) ) : ?>
				<div class="front-section-title">
					<h2><?php echo get_field( 'content_title' ); ?></h2>
				</div>
			<?php endif; ?>
			<div class="content-block__body">
				<?php echo get_field( 'content' ); ?>
			</div>
		</div>
	</section>
<?php endif; ?>
