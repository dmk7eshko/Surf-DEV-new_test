<?php
$cta_bg = get_field( 'cta-bg' );
?>
<section class="surf-cta<? if (get_field( 'bg-color' )) : ?> bg-<?php echo get_field( 'bg-color' ); endif;?>" <?php if ($cta_bg) : ?> style="background-image: url(<?php echo $cta_bg['url'] ?>)" <?php endif?>>
	
    <div class="surf-cta_content container">
		<div class="row">
        <?php if(get_field( 'cta-text' )): ?> <p><?= get_field( 'cta-text' ) ?></p> <?php endif; ?>
        <a class="btn btn-transparent col-lg-2 col-md-4 col-sm-6" href="<?= get_field('cta-url') ?>">
            <?= get_field('cta-btn-txt') ?>
        </a>
    </div>
	</div>
</section>