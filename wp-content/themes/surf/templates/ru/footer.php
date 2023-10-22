<?php
	/**
	 * Шаблон подвала (footer.php)
	 * @package WordPress
	 * @subpackage your-clean-template-3
	 */
?>

<?php if ( ! is_page( 243 ) && ! is_page_template( 'tpl-career-form.php' ) ): ?>
	<footer id="footer" name="footer">
		<div class="container">

			<div class="foot-top">
				<?php if ( $a = get_field( 'address', 'option' ) ) : ?>
					<div class="foot-top-address">
						<?php if ( $a['place'] ) : ?>
							<span><?= $a['place']; ?></span>
						<?php endif;
							if ( $a['address'] ) :?>
								<p><?= $a['address']; ?></p>
							<?php endif; ?>
					</div>
				<?php endif; ?>

				<div class="foot-top-phone">
					<?php if ( is_page( 'career' ) ) : ?>
						<p><a href="mailto:job@surfstudio.ru">job@surfstudio.ru</a></p>
					<?php else: ?>
						<?php
						if ( $phone = get_field( 'phone', 'option' ) ) :
							$phone_link = substr_replace( preg_replace( "/[^0-9]/", '', $phone ), '+7', 0, 1 ); ?>
							<span><a href="tel:<?= $phone_link; ?>"><?= $phone; ?></a></span>
						<?php endif;
						if ( $email = get_field( 'email', 'option' ) ) : ?>
							<p><a href="mailto:<?= $email; ?>"><?= $email; ?></a></p>
						<?php endif; ?>
					<?php endif; ?>
				</div>

				<?php if ( $socials = get_field( 'accounts', 'option' ) ) : ?>
					<div class="foot-top-socials">
						<?php if ( get_field( 'accounts_title', 'option' ) ) : ?>
							<span><?= get_field( 'accounts_title', 'option' ); ?></span>
						<?php endif; ?>
						<ul class="socials">
							<?php foreach ( $socials as $acc ) : ?>
								<li>
									<a href="<?= $acc['url']; ?>" target="_blank"> <img src="<?= $acc['logo']; ?>"
									                                                    alt=""> </a>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				<?php endif; ?>
			</div>

			<div class="foot-bottom">
				<div class="c1">
					<p>© <?= date( "Y" ) ?> Surf.<br/> Все права защищены</p>
					<a target="_blank" href="https://surf.ru/privacy/">Политика конфиденциальности</a>
					<div class="footer-offset">
						<a target="_blank" href="https://surf.dev">English</a>
					</div>
				</div>
				<div class="c2">
					<span class="footer-span">Услуги</span>
					<?php $args = array(
						'theme_location' => 'bottom',
						'container'      => false,
						'menu_id'        => 'bottom-one',
						'items_wrap'     => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
						'menu_class'     => 'top-menu',
					);
						wp_nav_menu( $args );
					?>
				</div>
				<div class="c2">
					<span class="footer-span">Отраслевой опыт</span>
					<?php $args = array(
						'theme_location' => 'bottom2',
						'container'      => false,
						'menu_id'        => 'bottom-two',
						'items_wrap'     => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
						'menu_class'     => 'top-menu',
					);
						wp_nav_menu( $args );
					?>
				</div>
				<div class="c3">
					<a class="footer-span" href="/cases/">Кейсы</a>
					<a class="footer-span bm" href="/blog/">Статьи</a>
					<a class="footer-span" href="/career/">Работа в Surf</a>
				</div>
			</div>

		</div>
	</footer>

<?php endif; ?>


<?php if ( isset( $_GET["form"] ) ): ?>
	<div class="success" style="display:block;">
		<div class="closer"><img src="<?= get_template_directory_uri(); ?>/assets/img/close.svg" alt=""></div>
		<div class="stitle">Заявка отправлена!</div>
		<div class="sdesc">Мы свяжемся с вами в течение рабочего дня</div>
	</div>
<?php endif; ?>


<div class="bgs">
	<?php
	$args = array(
		'theme_location' => 'top',
		'container'      => false,
		'menu_id'        => 'top-nav-ul-mobile',
		'items_wrap'     => '<ul id="top-nav-ul-mobile" class="nav navbar-nav top-menu">%3$s</ul>',
		'menu_class'     => 'top-menu',
		'walker'         => new HeaderWalker()
	);
	wp_nav_menu( $args );
	?>

	<a class="mobile-eng" href="#">Eng</a>
	<a href="<?php the_permalink( '243' ) ?>" class="header-call">Обсудить проект</a>
</div>


<?php wp_footer(); // необходимо для работы плагинов и функционала  ?>
<?php if ( wp_is_mobile() ): ?>
	<script>
		jQuery('.wp-block-group .wp-block-group__inner-container').click(function () {
			jQuery(this).parent('.wp-block-group').toggleClass('blocks');
		})
	</script>
<?php endif; ?>
<?php /* НЕ УДАЛЯТЬ! Ломает интеграцию с CRM */ ?>
<script>
	//ga
	var match = document.cookie.match('(?:^|;)\\s*_ga=([^;]*)');
	var raw = (match) ? decodeURIComponent(match[1]) : null;
	if (raw) {
		match = raw.match(/(\d+\.\d+)$/);
	}
	var gacid = (match) ? match[1] : null;
	jQuery('#clientID').val(gacid)
	//ym
	var matches = document.cookie.match('(?:^|;)\\s*_ym_uid([^;]*)');
	var raws = (matches) ? decodeURIComponent(matches[1]) : null;
	var newValue = raws ? raws.replace('=', '') : '';
	jQuery('#clientIDYA').val(newValue)
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"
        integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>