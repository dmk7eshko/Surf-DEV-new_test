jQuery(document).ready(function($){
    setTimeout(function(){
        checkCrossTags();
    }, 3000);

    megaMenuFix();
});

jQuery(document).on('click', '[aria-label="Сквозные теги"] .components-base-control__field', function(){
    checkCrossTags();

    if (jQuery(this).find('[type="checkbox"]').is('[disabled]')) {
        alert('В категории может быть выбрана только одна подкатегория!');
    }
});

/**
 * 
 */
function checkCrossTags(){
    let $crossTagsBlocks = jQuery('[aria-label="Сквозные теги"] > .editor-post-taxonomies__hierarchical-terms-choice');

    $crossTagsBlocks.map(function(){
        let $subcategoriesList = jQuery(this).find('.editor-post-taxonomies__hierarchical-terms-subchoices');

        if ($subcategoriesList.find('[type="checkbox"]:checked').length === 1){
            $subcategoriesList.find('[type="checkbox"]:not(:checked)').prop('disabled', true);
        } else {
            $subcategoriesList.find('[type="checkbox"]:not(:checked)').removeAttr('disabled');
        }
    });
}

/**
 *
 * @returns {boolean}
 */
function megaMenuFix(){
    let $ = jQuery;
    let $menuItems = $('.menu-item');

    if (!$menuItems.length){
        return false;
    }

    $menuItems.map(function(){
        let $item = $(this);

        ['[data-name="is_mega_menu"]', '[data-name="from_design"]'].map(function($checkboxesTypes){
            let $checkboxes = $item.find($checkboxesTypes);

            if ($checkboxes.length < 2){
                return true;
            }

            $checkboxes[0].remove();
        });

    });
}