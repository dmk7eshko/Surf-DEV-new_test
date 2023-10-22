<?php
$categories = get_categories([
    'taxonomy'     => 'category',
    'type'         => 'post',
    'child_of'     => 0,
    'parent'       => '',
    'orderby'      => 'name',
    'order'        => 'ASC',
    'hide_empty'   => 1,
    'hierarchical' => 1,
    'exclude'      => '',
    'include'      => '',
]);

if ($categories):
    ?>
    <div class="blog-filters">
        <ul class="blog-filters-toggles row">
            <li class="blog-filters-all f-active">
                All
            </li>
            <?php
            foreach ($categories as $cat):
                ?>
                <li class="blog-filters-<?= $cat->slug ?>" data-cat="<?= $cat->term_id ?>">
                    <?= $cat->name ?>
                </li>
            <?php
            endforeach;
            ?>
        </ul>
    </div>
	

<?php
endif;