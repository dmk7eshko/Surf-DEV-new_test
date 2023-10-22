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
    'include'      => ''
]);

if ($categories):
    ?>
    <div class="blog-filters">
        <span class="blog-filters-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="32" fill="none">
                <line x1="38" x2="-1e-7" y1="7.10718" y2="7.10718" stroke="#000" stroke-opacity=".9" stroke-width="1.5"/>
                <line x1="38" x2="-1e-7" y1="14.707" y2="14.707" stroke="#000" stroke-opacity=".9" stroke-width="1.5"/>
                <line x1="38" x2="-1e-7" y1="22.3071" y2="22.3071" stroke="#000" stroke-opacity=".9" stroke-width="1.5"/>
                <rect width="6.51429" height="6.51429" x="5.42969" y="3.64282" fill="#F9F9F9"/>
                <rect width="5.01429" height="5.01429" x="6.17969" y="4.39282" stroke="#000" stroke-opacity=".9" stroke-width="1.5"/>
                <rect width="6.51429" height="6.51429" x="24.9727" y="18.8428" fill="#F9F9F9"/>
                <rect width="5.01429" height="5.01429" x="25.7227" y="19.5928" stroke="#000" stroke-opacity=".9" stroke-width="1.5"/>
            </svg>
        </span>
        <ul class="blog-filters-toggles">
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