<?php

class HeaderWalker extends Walker_Nav_Menu
{
    private int $mega_menu_started = 0;
    
    public function start_el(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $menu_item = $data_object;

        if (get_field('menu_title', $data_object)) {
            $this->mega_menu_started = 1;
            $this->get_mega_start($output, $data_object, $depth = 0, $args = null, $current_object_id = 0);
            
            return;
        }
        
        if ($this->mega_menu_started != 0) {
            
            if ($depth == 1) {
                $this->get_mega_level_1($output, $data_object, $depth = 0, $args = null, $current_object_id = 0);
                
                return;
            }
            
        }

        if (get_field('from_design', $data_object)){
            if (stripos($_SERVER['HTTP_REFERER'], 'design.surf.ru') !== false){
                $output .= '<li data-design="'.$_SERVER['HTTP_REFERER'].'">';
                $href = ! empty($menu_item->url) ? $menu_item->url : '';

                $item_output = '<a href="' . $href . '">';
                $item_output .= $menu_item->title;
                $item_output .= '</a>';

                $output .= $item_output;
            }
        } else {
            $output .= '<li>';
            $href = ! empty($menu_item->url) ? $menu_item->url : '';

            $item_output = '<a href="' . $href . '">';
            $item_output .= $menu_item->title;
            $item_output .= '</a>';

            $output .= $item_output;
        }
    }
    
    public function get_mega_start(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $menu_item = $data_object;
        
        $output .= '<li class="menu-item-mega-menu">';
        $output .= '<a>' . $menu_item->title . '</a>';
        $output .= '<div class="mega-menu">';
        $output .= '<div class="container">';
        $output .= '<div class="mega-menu__inner">';
//        $output .= '<h2 class="mega-menu__title">' . $menu_item->title . '</h2>';
//        $output .= '<div class="mega-menu__parts">';
        
        
    }
    
    public function get_mega_end(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $output .= '</div>';
        $output .= '</div>';
        $output .= '</div>';
//        $output .= '</div>';
        $output .= '</li>';
    }
    
    public function get_mega_level_1(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $menu_item = $data_object;
        
        $output .= '<div class="mega-menu__part">';
        $output .= '<p class="mega-menu__part-title">' . $menu_item->title . '</p>';
        $output .= '<div class="mega-menu__part-items">';
    }
    
    public function get_mega_level_1_end(&$output, $data_object, $depth = 0, $args = null, $current_object_id = 0)
    {
        $output .= '</div>';
        $output .= '</div>';
    }
    
    public function end_el(&$output, $data_object, $depth = 0, $args = null)
    {
        if (get_field('menu_title', $data_object)) {
            $this->mega_menu_started = 0;
            $this->get_mega_end($output, $data_object, $depth = 0, $args = null, $current_object_id = 0);
            
            return;
        }
        
        if ($this->mega_menu_started != 0) {
            
            if ($depth == 1) {
                $this->get_mega_level_1_end($output, $data_object, $depth = 0, $args = null, $current_object_id = 0);
                return;
            }
            
        }

        if (get_field('from_design', $data_object)){
            if (stripos($_SERVER['HTTP_REFERER'], 'design.surf.ru') !== false){
                $output .= "</li>";
            }
        } else {
            $output .= "</li>";
        }

    }
    
    public function start_lvl(&$output, $depth = 0, $args = null)
    {
        if ($this->mega_menu_started != 0 && $depth == 0) {
            return;
        }
        
        if ($this->mega_menu_started != 0 && $depth != 0) {
            $output .= '<ul class="mega-menu__part-list">';
            
            return;
        }
        
        $output .= "<ul>";
    }
    
    
    public function end_lvl(&$output, $depth = 0, $args = null)
    {
        if ($this->mega_menu_started != 0 && $depth == 0) {
            return;
        }
        $output .= "</ul>";
    }
    
}