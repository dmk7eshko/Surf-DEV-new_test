<?php

/**
 * Шаблон подвала (footer.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>

<!-- <script> (function(ss,ex){ window.ldfdr=window.ldfdrfunction(){(ldfdr.q=ldfdr.q[]).push([].slice.call(arguments));}; (function(d,s){ fs=d.getElementsByTagName(s)[0]; function ce(src){ var cs=d.createElement(s); cs.src=src; cs.async=1; fs.parentNode.insertBefore(cs,fs); }; ce('https://sc.lfeeder.com/lftracker_v1%27+ss+(ex?%27%27+ex:%27%27)+%27.js%27'); })(document,'script'); })('lAxoEaK2ZyW4OYGd'); </script> -->

<?php

<footer id="footer" class="footer-compact" name="footer">
	<div class="container">

		<div class="foot-top">
			<div class="foot-top-phone">
				<?php if (is_page('career')) : ?>
					<p><a href="mailto:job@surfstudio.ru">job@surfstudio.ru</a></p>
					<?php else :
					if ($email = get_field('email', 'option')) : ?>
						<div class="foot-top-phone__wrapper">
							<a class="foot-top-phone__email" href="mailto:<?= $email; ?>"><?= $email; ?></a>
							<button class="foot-top-phone__icon js-copy-email" role="button">
								<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M23 5H5V23" stroke="#1A1A1A" stroke-width="2" />
									<rect x="9" y="9" width="18" height="18" stroke="#1A1A1A" stroke-width="2" />
								</svg>
							</button>
						</div>
				<?php endif;
				endif; ?>
			</div>

			<?php if ($socials = get_field('accounts', 'option')) : ?>
				<div class="foot-top-socials">
					<ul class="socials">
						<?php foreach ($socials as $acc) : ?>
							<li>
								<a href="<?= $acc['url']; ?>" target="_blank">
									<img src="<?= $acc['logo']; ?>" alt="">
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			<?php endif; ?>

			<div class="foot-top-info">
				<a class="footer-span" href="/blog/">Blog</a>
			</div>

			<div class="foot-top-privacy">
				<a target="_blank" href="https://surf.dev/privacy/">Privacy Policy</a>
			</div>
		</div>

	</div>
</footer>


<div class="bgs">
	<!-- <a class="mobile-eng" href="#">Eng</a> -->
	<?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
		'theme_location' => 'top',
		'container'      => false,
		'menu_id'        => 'top-nav-ul-mobile',
		'items_wrap'     => '<ul id="top-nav-ul-mobile" class="nav navbar-nav top-menu">%3$s</ul>',
		'menu_class'     => 'top-menu',
		'walker'         => new HeaderWalker()
	);
	wp_nav_menu($args); // выводим верхнее меню
	?>

	<a href="<?php the_permalink('243') ?>" class="header-call">Estimate project</a>
</div>

<?php wp_footer(); // необходимо для работы плагинов и функционала  
?>

<?php if (wp_is_mobile()) : ?>
	<script>
		jQuery('.wp-block-group:not(.re-black-block) .wp-block-group__inner-container h3:first-child').click(function() {
			jQuery(this).parents('.wp-block-group').toggleClass('blocks');
		})
	</script>
<?php endif; ?>

<?php if ($_SERVER['REMOTE_ADDR'] !== 'localhost' && $_SERVER['REMOTE_ADDR'] !== '127.0.0.1') : ?>
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
		jQuery('#clientIDYA').val(newValue);
	</script>
<?php endif ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js" integrity="sha512-rCjfoab9CVKOH/w/T6GbBxnAH5Azhy4+q1EXW5XEURefHbIkRbQ++ZR+GBClo3/d3q583X/gO4FKmOFuhkKrdA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>

</html>