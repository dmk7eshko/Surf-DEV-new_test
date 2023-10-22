<?php

class ReviewsPostTypeController
{
    public function __construct()
    {
        add_action('init', [$this, 'initPostType']);
        add_action('init', [$this, 'initTaxonomy']);
    }
    
    public function initPostType()
    {
        register_post_type('reviews', [
            'label'              => null,
            'labels'             => [
                'name'               => 'Отзывы',
                'singular_name'      => 'Отзыв',
                'add_new'            => 'Добавить отзыв',
                'add_new_item'       => 'Добавление отзыва',
                'edit_item'          => 'Редактирование отзыва',
                'new_item'           => 'Новый отзыв',
                'view_item'          => 'Смотреть отзыв',
                'search_items'       => 'Искать отзыв',
                'not_found'          => 'Не найдено',
                'not_found_in_trash' => 'Не найдено в корзине',
            ],
            'description'        => '',
            'public'             => true,
            'publicly_queryable' => false,
            'show_in_menu'       => true,
            'show_in_rest'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-visibility',
            'hierarchical'       => false,
            'supports'           => ['title', 'editor'],
            'taxonomies'         => [],
            'has_archive'        => false,
            'rewrite'            => true,
            'query_var'          => true,
        ]);
    }
    
    public function initTaxonomy()
    {
        register_taxonomy('reviews_categories', ['reviews'], [
            'label'              => 'Категории',
            'labels'             => [
                'name'              => 'Категории',
                'singular_name'     => 'Категория',
                'search_items'      => 'Найти категорию',
                'all_items'         => 'Все категории',
                'view_item '        => 'Показать',
            ],
            'description'        => '',
            'public'             => true,
            'publicly_queryable' => false,
            'hierarchical'       => false,
            'rewrite'            => true,
            'capabilities'       => array(),
            'meta_box_cb'        => 'post_categories_meta_box',
            'show_admin_column'  => false,
            'show_in_rest'       => false,
            'query_var' => false
        ]);
    }
}

new ReviewsPostTypeController();