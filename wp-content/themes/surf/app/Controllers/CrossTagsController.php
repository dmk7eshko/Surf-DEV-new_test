<?php

class CrossTagsController
{
    const MAIN_CATEGORIES_IDS = array(
        'job_type' => 30,
        'industry' => 31,
        'point_client_path' => 34,
    );

    public function __construct()
    {
        add_action('init', [$this, 'registerTaxonomy']);
    }
    
    public function registerTaxonomy()
    {
        $labels = array(
            'name'                       => __('Сквозные теги'),
            'singular_name'              => __('Сквозной тег'),
            'menu_name'                  => __('Сквозные теги'),
            'search_items'               => __('Найти'),
            'popular_items'              => __('Популярные'),
            'all_items'                  => __('Все'),
            'parent_item'                => null,
            'parent_item_colon'          => null,
            'edit_item'                  => __('Редактировать'),
            'update_item'                => __('Обновить'),
            'add_new_item'               => __('Добавить новый'),
            'new_item_name'              => __('Название нового'),
            'separate_items_with_commas' => __('Разделяйте запятыми'),
            'add_or_remove_items'        => __('Добавить или удалить'),
            'choose_from_most_used'      => __('Выбрать из наиболее часто используемых'),
        );

        $args = array(
            'labels'                     => $labels,
            'hierarchical'               => true,
            'public'                     => true,
            'publicly_queryable'         => false,
            'show_ui'                    => true,
            'query_var'                  => true,
            'show_in_rest'               => true,
            'show_in_menu'               => true,
            'show_in_quick_edit'         => true,
            'show_admin_column'          => true,
            'show_in_nav_menus'          => true,

        );

        register_taxonomy(
            'cross_tag',
            array('post', 'page', 'cases', 'reviews'),
            $args
        );
    }

    /**
     * @param $post_id
     * @return int[]|WP_Post[]
     */
    static function getSimilarArticles($post_id){
        $numberposts = 3;
        $terms_relations = array(
            38 => 39, // Unaware => Problem-aware
            39 => 40, // Problem-aware => Solution-aware
            40 => 41, // Solution-aware => Product-aware
            41 => 41, // Product-aware => Product-aware
        );

        $point_client_path_subcategory = null;

        $post_categories = wp_get_post_terms(
            $post_id,
            'cross_tag',
            array('fields' => 'ids')
        );

        if ($post_categories){
            foreach ($post_categories as $post_category_id) {
                $parent_id = wp_get_term_taxonomy_parent_id($post_category_id, 'cross_tag');

                if ($parent_id === self::MAIN_CATEGORIES_IDS['point_client_path']){
                    $point_client_path_subcategory = $post_category_id;
                }
            }
        }

        if (!$point_client_path_subcategory || !$terms_relations[$point_client_path_subcategory]){
            return get_posts(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'numberposts' => $numberposts,
                'orderby' => 'date',
                'exclude' => array($post_id),
            ));
        }

        $similar_posts = get_posts(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'numberposts' => $numberposts,
            'orderby' => 'date',
            'exclude' => array($post_id),
            'tax_query' => array(
                array(
                    'taxonomy' => 'cross_tag',
                    'field' => 'id',
                    'terms' => array($terms_relations[$point_client_path_subcategory])
                )
            )
        ));

        if (count($similar_posts) === 3){
            return $similar_posts;
        }

        // если меньше 3 - запоминаем и ищем записи в прочих категориях
        $other_posts = get_posts(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'numberposts' => $numberposts - count($similar_posts),
            'orderby' => 'date',
            'exclude' => array($post_id),
            'category__not_in' => array(
                $point_client_path_subcategory,
                $terms_relations[$point_client_path_subcategory]
            )
        ));

        return array_merge($similar_posts, $other_posts);
    }

    /**
     * @param $post_id
     * @param string $post_type
     * @param int $numberposts
     * @return array
     */
    static function getSimilarPosts($post_id, string $post_type = 'post', int $numberposts = 3): array
    {
        $similar_posts = array();

        $job_type_subcategory = null;
        $industry_subcategory = null;

        $post_categories = wp_get_post_terms(
            $post_id,
            'cross_tag',
            array('fields' => 'ids')
        );

        if ($post_categories){
            foreach ($post_categories as $post_category_id) {
                $parent_id = wp_get_term_taxonomy_parent_id($post_category_id, 'cross_tag');

                if ($parent_id === self::MAIN_CATEGORIES_IDS['industry']){
                    $industry_subcategory = $post_category_id;
                }

                if ($parent_id === self::MAIN_CATEGORIES_IDS['job_type']){
                    $job_type_subcategory = $post_category_id;
                }
            }
        }

        // если у статьи нет ни тега "Индустрия" ни тега "Тип работ"
        // выводим 3 последние статьи глобально
        if (!$industry_subcategory && !$job_type_subcategory){
            return get_posts(array(
                'post_type' => $post_type,
                'post_status' => 'publish',
                'numberposts' => $numberposts,
                'orderby' => 'date',
                'exclude' => array($post_id),
            ));
        }

        // если у статьи нет тега "Индустрия", но есть тег "Тип работ"
        if (!$industry_subcategory && $job_type_subcategory){
            $posts = get_posts(array(
                'post_type' => $post_type,
                'post_status' => 'publish',
                'numberposts' => $numberposts,
                'orderby' => 'date',
                'exclude' => array($post_id),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cross_tag',
                        'field' => 'id',
                        'terms' => array($job_type_subcategory)
                    )
                )
            ));

            // если достаточно записей с тегом "Тип работ"
            // возвращаем их и завершаем скрипт
            if (count($posts) === 3){
                return $posts;
            } else {
                // если меньше 3 - запоминаем и ищем записи в прочих категориях
                $similar_posts = $posts;

                // если не хватает
                $other_posts = get_posts(array(
                    'post_type' => $post_type,
                    'post_status' => 'publish',
                    'numberposts' => $numberposts - count($similar_posts) - count($posts),
                    'orderby' => 'date',
                    'exclude' => array($post_id),
                    'category__not_in' => array(
                        $industry_subcategory,
                        $job_type_subcategory,
                    )
                ));

                return array_merge($similar_posts, $other_posts);
            }
        }

        if ($industry_subcategory){
            $posts = get_posts(array(
                'post_type' => $post_type,
                'post_status' => 'publish',
                'numberposts' => $numberposts,
                'orderby' => 'date',
                'exclude' => array($post_id),
                'tax_query' => array(
                    array(
                        'taxonomy' => 'cross_tag',
                        'field' => 'id',
                        'terms' => array($industry_subcategory)
                    )
                )
            ));

            // если достаточно записей с тегом "Индустрия"
            // возвращаем их и завершаем скрипт
            if (count($posts) === 3){
                return $posts;
            } else {
                // если меньше 3 - запоминаем и ищем записи в "Тип работ"
                $similar_posts = $posts;

                // если тега "Тип работ" у записи нет - ищем записи
                // не в теге "Индустрия", мержим и возвращаем
                if (!$job_type_subcategory){
                    $posts = get_posts(array(
                        'post_type' => $post_type,
                        'post_status' => 'publish',
                        'numberposts' => $numberposts - count($similar_posts),
                        'orderby' => 'date',
                        'exclude' => array($post_id),
                        'category__not_in' => array($industry_subcategory)
                    ));

                    return array_merge($similar_posts, $posts);
                }

                // если тег "Тип работ" есть
                $posts = get_posts(array(
                    'post_type' => $post_type,
                    'post_status' => 'publish',
                    'numberposts' => $numberposts - count($similar_posts),
                    'orderby' => 'date',
                    'exclude' => array($post_id),
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'cross_tag',
                            'field' => 'id',
                            'terms' => array($job_type_subcategory)
                        )
                    )
                ));

                // если хватает записей из "Тип работ" и "Индустрия"
                // мержим и возвращаем
                if (count($posts) + count($similar_posts) === 3){
                    return array_merge($similar_posts, $posts);
                }

                // если не хватает
                $other_posts = get_posts(array(
                    'post_type' => $post_type,
                    'post_status' => 'publish',
                    'numberposts' => $numberposts - count($similar_posts) - count($posts),
                    'orderby' => 'date',
                    'exclude' => array($post_id),
                    'category__not_in' => array(
                        $industry_subcategory,
                        $job_type_subcategory
                    )
                ));

                return array_merge($similar_posts, $posts, $other_posts);
            }
        }

        return $similar_posts;
    }

}

new CrossTagsController();