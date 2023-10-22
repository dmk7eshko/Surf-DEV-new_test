<?php

class CasesPostTypeController
{
    public function __construct()
    {
        add_action('init', [$this, 'register_post_type']);
        add_action('init', [$this, 'register_taxonomy_otrasli']);
        add_action('init', [$this, 'register_taxonomy_type']);
        
        add_filter('request', [$this, 'request_otrasli_rewrite'], 99, 1);
        add_filter('term_link', [$this, 'term_link_replace'], 10, 3);
        
    }
    
    public function request_otrasli_rewrite($query_vars)
    {
        if (isset($query_vars['post_type']) && $query_vars['post_type'] === 'cases') {
            $term = isset($query_vars['name']) && get_term_by('slug', $query_vars['name'], 'otrasli');
            if ($term) {
                $query_vars = ['otrasli' => $query_vars['name']];
            }
        }
        
        return $query_vars;
    }
    
    public function term_link_replace($termlink, $term, $taxonomy)
    {
        if ($taxonomy === 'otrasli') {
            return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . '/cases/' . $term->slug;
        }
        
        return $termlink;
    }
    
    public function register_post_type()
    {
        register_post_type('cases', array(
            'labels'             => array(
                'name'               => 'Кейсы', // Основное название типа записи
                'singular_name'      => 'Кейс', // отдельное название записи типа Book
                'add_new'            => 'Добавить новый',
                'add_new_item'       => 'Добавить новый кейс',
                'edit_item'          => 'Редактировать кейс',
                'new_item'           => 'Новый кейс',
                'view_item'          => 'Посмотреть кейс',
                'search_items'       => 'Найти кейс',
                'not_found'          => 'Кейсы не найдены',
                'not_found_in_trash' => 'В корзине не найдено',
                'parent_item_colon'  => '',
                'menu_name'          => 'Кейсы'
            ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => true,
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'show_in_rest'       => true,
            'menu_position'      => null,
            'taxonomies'          => array( 'otrasli', 'type' ),
            'supports'           => array('title', 'editor', 'author', 'thumbnail'),
        
        ));
    }
    
    public function register_taxonomy_otrasli()
    {
        register_taxonomy('otrasli',
            array('cases'),
            array(
                'hierarchical'          => true,
                /* true - по типу рубрик, false - по типу меток,
                по умолчанию - false */
                'labels'                => array(
                    /* ярлыки, нужные при создании UI, можете
                    не писать ничего, тогда будут использованы
                    ярлыки по умолчанию */
                    'name'                       => 'Отрасли',
                    'singular_name'              => 'Отрасли',
                    'search_items'               => 'Найти',
                    'popular_items'              => 'Популярные',
                    'all_items'                  => 'Все',
                    'parent_item'                => null,
                    'parent_item_colon'          => null,
                    'edit_item'                  => 'Редактировать',
                    'update_item'                => 'Обновить',
                    'add_new_item'               => 'Добавить новую',
                    'new_item_name'              => 'Название новой',
                    'separate_items_with_commas' => 'Разделяйте запятыми',
                    'add_or_remove_items'        => 'Добавить или удалить',
                    'choose_from_most_used'      => 'Выбрать из наиболее часто используемых',
                    'menu_name'                  => 'Отрасли'
                ),
                'public'                => true,
                /* каждый может использовать таксономию, либо
                только администраторы, по умолчанию - true */
                'show_in_nav_menus'     => true,
                /* добавить на страницу создания меню */
                'show_ui'               => true,
                /* добавить интерфейс создания и редактирования */
                'show_tagcloud'         => true,
                /* нужно ли разрешить облако тегов для этой таксономии */
                'update_count_callback' => '_update_post_term_count',
                /* callback-функция для обновления счетчика $object_type */
                'query_var'             => true,
                /* разрешено ли использование query_var, также можно
                указать строку, которая будет использоваться в качестве
                него, по умолчанию - имя таксономии */
                'rewrite'               => array(
                    /* настройки URL пермалинков */
                    'slug'         => 'expertise', // ярлык
                    'hierarchical' => true // разрешить вложенность
                ),
            )
        );
    }
    
    public function register_taxonomy_type()
    {
        register_taxonomy('type',
            array('cases'),
            array(
                'hierarchical'          => true,
                /* true - по типу рубрик, false - по типу меток,
                по умолчанию - false */
                'labels'                => array(
                    /* ярлыки, нужные при создании UI, можете
                    не писать ничего, тогда будут использованы
                    ярлыки по умолчанию */
                    'name'                       => 'Вид работ',
                    'singular_name'              => 'Вид работ',
                    'search_items'               => 'Найти',
                    'popular_items'              => 'Популярные',
                    'all_items'                  => 'Все',
                    'parent_item'                => null,
                    'parent_item_colon'          => null,
                    'edit_item'                  => 'Редактировать',
                    'update_item'                => 'Обновить',
                    'add_new_item'               => 'Добавить новую',
                    'new_item_name'              => 'Название новой',
                    'separate_items_with_commas' => 'Разделяйте запятыми',
                    'add_or_remove_items'        => 'Добавить или удалить',
                    'choose_from_most_used'      => 'Выбрать из наиболее часто используемых',
                    'menu_name'                  => 'Вид работ'
                ),
                'public'                => true,
                /* каждый может использовать таксономию, либо
                только администраторы, по умолчанию - true */
                'show_in_nav_menus'     => true,
                /* добавить на страницу создания меню */
                'show_ui'               => true,
                /* добавить интерфейс создания и редактирования */
                'show_tagcloud'         => true,
                /* нужно ли разрешить облако тегов для этой таксономии */
                'update_count_callback' => '_update_post_term_count',
                /* callback-функция для обновления счетчика $object_type */
                'query_var'             => true,
                /* разрешено ли использование query_var, также можно
                указать строку, которая будет использоваться в качестве
                него, по умолчанию - имя таксономии */
                'rewrite'               => array(
                    /* настройки URL пермалинков */
                    'slug'         => 'types', // ярлык
                    'hierarchical' => true // разрешить вложенность
                ),
            )
        );
    }
}

new CasesPostTypeController();