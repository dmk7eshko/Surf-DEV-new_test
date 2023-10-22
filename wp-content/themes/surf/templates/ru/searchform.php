<?php
/**
 * Шаблон формы поиска (searchform.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
?>
<form role="search" method="get" class="search-form form-inline" action="<?php echo home_url( '/' ); ?>">
	<div class="form-group">
		<input type="search" class="form-control input-sm" id="search-field" placeholder="Поиск по проектам" value="<?php echo get_search_query() ?>" name="s">
	</div>
	<button type="submit" class="btn btn-default btn-sm"><img src="/wp-content/themes/surf/img/search.svg" alt=""></button>
</form>