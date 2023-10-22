<?php
	/**
	 * Шаблон подвала (footer.php)
	 * @package WordPress
	 * @subpackage your-clean-template-3
	 */
?>

<!-- <script> (function(ss,ex){ window.ldfdr=window.ldfdrfunction(){(ldfdr.q=ldfdr.q[]).push([].slice.call(arguments));}; (function(d,s){ fs=d.getElementsByTagName(s)[0]; function ce(src){ var cs=d.createElement(s); cs.src=src; cs.async=1; fs.parentNode.insertBefore(cs,fs); }; ce('https://sc.lfeeder.com/lftracker_v1%27+ss+(ex?%27%27+ex:%27%27)+%27.js%27'); })(document,'script'); })('lAxoEaK2ZyW4OYGd'); </script> -->
<footer class="footer footer-dev" id="footer">
	<div class="container">

		<div class="footer-top">
			<div class="footer-navs">
				<nav class="footer-nav">
					<p class="footer-nav__title footer__title">Services</p>
					<?php
						$args = array(
							'theme_location' => 'bottom',
							'container' => false,
							'items_wrap' => '<ul class="%2$s">%3$s</ul>',
							'menu_class' => 'footer-menu',
						);
						wp_nav_menu($args);
					?>
				</nav>
				<nav class="footer-nav">
					<p class="footer-nav__title footer__title">Why choose Flutter</p>
					<?php
						$args = array(
							'theme_location' => 'bottom2',
							'container' => false,
							'items_wrap' => '<ul class="%2$s">%3$s</ul>',
							'menu_class' => 'footer-menu',
						);
						wp_nav_menu($args);
					?>
				</nav>
			</div>
			<div class="footer-links">
				<a href="/cases" class="footer-links__item footer__title">Case Studies</a>
				<a href="/blog" class="footer-links__item footer__title">Blog</a>
			</div>
			<div class="footer-info">
				<?php if (get_field('accounts_title', 'option')) : ?>
					<p class="footer-info__title footer__title"><?= get_field('accounts_title', 'option'); ?></p>
				<?php endif; ?>
				<div class="footer-info__inner">
					<?php if ($socials = get_field('accounts', 'option')) : $dev = get_field('dev', 'option'); ?>
						<ul class="footer-info__socials socials">
							<?php foreach ($socials as $acc) : ?>
								<li>
									<a href="<?= $acc['url']; ?>" target="_blank">
										<?php if (!$dev) : ?>
											<img src="<?= $acc['logo']; ?>" alt="">
										<?php else:
											if ($acc['logo_dev'] === 'linkedin') : ?>
												<svg class="footer-info__socials-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
													<path d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" fill="currentColor"/>
												</svg>
											<?php elseif ($acc['logo_dev'] === 'behance') : ?>
												<svg class="footer-info__socials-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
													<path d="M22,11h-7V9h7V11z M23.7,21c-0.4,1.3-2,3-5.1,3c-3.1,0-5.6-1.7-5.6-5.7c0-3.9,2.3-5.9,5.5-5.9c3.1,0,5,1.8,5.4,4.4 C24,17.3,24,18,24,19h-8c0.1,3.2,3.5,3.3,4.6,2C20.6,21,23.7,21,23.7,21z M16,17h5c-0.1-1.5-1.1-2.2-2.5-2.2 C17.1,14.8,16.3,15.5,16,17z M6.5,24H0V9h7c5.5,0.1,5.6,5.4,2.7,6.9C13.1,17.2,13.2,24,6.5,24z M3,15h3.6c2.5,0,2.9-3-0.3-3H3 C3,12,3,15,3,15z M6.4,18H3v3h3.3C9.4,21,9.2,18,6.4,18z" fill="currentColor"/>
												</svg>
											<?php elseif ($acc['logo_dev'] === 'github') : ?>
												<svg class="footer-info__socials-icon" width="40" height="40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32.58 31.77">
													<path d="M16.29,0a16.29,16.29,0,0,0-5.15,31.75c.82.15,1.11-.36,1.11-.79s0-1.41,0-2.77C7.7,29.18,6.74,26,6.74,26a4.36,4.36,0,0,0-1.81-2.39c-1.47-1,.12-1,.12-1a3.43,3.43,0,0,1,2.49,1.68,3.48,3.48,0,0,0,4.74,1.36,3.46,3.46,0,0,1,1-2.18c-3.62-.41-7.42-1.81-7.42-8a6.3,6.3,0,0,1,1.67-4.37,5.94,5.94,0,0,1,.16-4.31s1.37-.44,4.48,1.67a15.41,15.41,0,0,1,8.16,0c3.11-2.11,4.47-1.67,4.47-1.67A5.91,5.91,0,0,1,25,11.07a6.3,6.3,0,0,1,1.67,4.37c0,6.26-3.81,7.63-7.44,8a3.85,3.85,0,0,1,1.11,3c0,2.18,0,3.94,0,4.47s.29.94,1.12.78A16.29,16.29,0,0,0,16.29,0Z" fill="currentColor"/>
												</svg>
											<?php elseif ($acc['logo_dev'] === 'dribble') : ?>
												<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
													<path d="M15.2,11.3c-1.8-3.4-3.7-6.6-5.7-9.8C4.6,3.6,1,8.2,0.2,13.7C5,13.8,10,13,15.2,11.3z" fill="currentColor"/>
													<path d="M17.1,10.6c3.6-1.4,7.1-3.2,10.7-5.4C24.8,2,20.7,0,16,0c-1.6,0-3.2,0.2-4.6,0.7C13.4,3.9,15.3,7.2,17.1,10.6z" fill="currentColor"/>
													<path d="M19.9,16.5c2.9-0.8,6-1.3,9.1-1.3c1,0,1.9,0,2.9,0.1c-0.1-3.2-1.2-6.2-2.9-8.6C25.3,9.1,21.6,11,18,12.4 C18.6,13.8,19.3,15.1,19.9,16.5z" fill="currentColor"/>
													<path d="M18,17.1c-0.6-1.4-1.3-2.7-2-4.1c-5,1.7-9.9,2.6-14.6,2.6c-0.5,0-0.9,0-1.4,0c0,0.1,0,0.2,0,0.4c0,4,1.5,7.6,3.9,10.4 C7.9,22.1,12.7,19,18,17.1z" fill="currentColor"/>
													<path d="M29.1,17.3c-2.8,0-5.6,0.4-8.3,1.1c1.6,3.5,2.9,7.2,4.2,10.9c3.9-2.6,6.5-6.9,7-11.8C31,17.3,30,17.3,29.1,17.3z" fill="currentColor"/>
													<path d="M18.9,19c-5.1,1.7-9.7,4.7-13.6,8.9C8.1,30.4,11.9,32,16,32c2.6,0,5-0.6,7.2-1.7C21.9,26.4,20.5,22.7,18.9,19z" fill="currentColor"/>
												</svg>
											<?php endif;
										endif; ?>
									</a>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
					<div class="footer-info__contacts">
						<?php if ($email = get_field('email', 'option')) : ?>
							<a class="footer-info__email" href="mailto:<?= $email; ?>"><?= $email; ?></a>
						<?php endif;
						if ($phone = get_field('phone', 'option')) :
							$phone_link = substr_replace(preg_replace("/[^0-9]/", '', $phone), '+1', 0, 1); ?>
							<a class="footer-info__phone" href="tel:<?= $phone_link; ?>"><?= $phone; ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<p>© <?= date("Y") ?> Surf.</p>
			<a target="_blank" href="https://surf.dev/privacy/">Privacy Policy</a>
		</div>
	</div>
</footer>

<?php if (isset($_GET["form"])): ?>
	<div class="success" style="display:block;">
		<div class="closer"><img src="<?= get_template_directory_uri(); ?>/assets/img/close.svg" alt=""></div>
		<div class="stitle">Request sent!</div>
		<div class="sdesc">We will contact you within a business day</div>
	</div>
<?php endif; ?>

<div class="bgs bgs-dev">
	<?php $args = array(
		'theme_location' => 'top',
		'container' => false,
		'menu_id' => 'top-nav-ul-mobile',
		'items_wrap' => '<ul id="top-nav-ul-mobile" class="nav navbar-nav top-menu">%3$s</ul>',
		'menu_class' => 'top-menu',
		'walker' => new HeaderWalker()
	);
		wp_nav_menu($args);
	?>

	<a href="<?php the_permalink('243') ?>" class="header-call btn btn-green-line">Estimate project</a>
</div>

<?php wp_footer(); ?>

<?php if (wp_is_mobile()): ?>
	<script>
		jQuery('.wp-block-group:not(.re-black-block) .wp-block-group__inner-container h3:first-child').click(function () {
			jQuery(this).parents('.wp-block-group').toggleClass('blocks');
		})
	</script>
<?php endif; ?>

<?php if ($_SERVER['REMOTE_ADDR'] !== 'localhost' && $_SERVER['REMOTE_ADDR'] !== '127.0.0.1'): ?>
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