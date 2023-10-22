<?php
    class AdminController
    {
        public function __construct()
        {
            add_action( 'add_meta_boxes', [$this, 'additionalMetaBoxes'] );
            add_action( 'save_post', [$this, 'additionalMetaBoxesSave'], 10, 2 );
            #add_action( 'admin_init', [$this, 'syncWithGit'] );
        }

        function syncWithGit(){
            if (!is_admin()){
                return false;
            }

            if (!isset($_GET['page']) || $_GET['page'] !== 'wp-migrate-db-pro'){
                return false;
            }

            $result = array();
            #sh /wp-content/themes/surf-new/sync.sh
            $commands = [];
            $commands[] = 'cd ../wp-content/themes/surf-new';
            $commands[] = 'git pull origin master';
            $commands[] = 'git status';
            $commands = implode(' && ', $commands);

            exec($commands, $result);
            echo '<pre>'; var_dump($result); echo '</pre>';

            exit();
        }

        function additionalMetaBoxes(){
            add_meta_box(
                'post_additional_params',
                'Параметры записи',
                [$this, 'additionalMetaBoxesCallback'],
                ['post', 'cases'],
                'side',
                'high'
            );
        }

        function additionalMetaBoxesCallback($post){
            $menu_order = (int) $post->menu_order ?? 0;
            wp_nonce_field( 'postmenuorderupdate-' . $post->ID, '_truenonce' );
        ?>
            <div class="components-base-control">
                <div class="components-base-control__field">
                    <label class="components-base-control__label" for="post_menu_order">Порядок записи</label>
                    <input class="components-text-control__input" type="number" name="post_menu_order" min="0" id="post_menu_order" value="<?php echo esc_attr($menu_order)?>">
                </div>
            </div>
        <?php }

        /**
         * @param $post_id
         * @param $post
         * @return mixed
         */
        function additionalMetaBoxesSave($post_id, $post){
            global $wpdb;

            // проверка одноразовых полей
            if (!isset($_POST['_truenonce']) || !wp_verify_nonce($_POST['_truenonce'], 'postmenuorderupdate-' . $post->ID)){
                return $post_id;
            }

            // проверяем, может ли текущий юзер редактировать пост
            $post_type = get_post_type_object($post->post_type);

            if (!current_user_can($post_type->cap->edit_post, $post_id)){
                return $post_id;
            }

            // ничего не делаем для автосохранений
            if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE){
                return $post_id;
            }

            // проверяем тип записи
            if ($post->post_type !== 'cases' && $post->post_type !== 'post'){
                return $post_id;
            }

            if (isset($_POST['post_menu_order'])){
                $menu_order = (int) $_POST['post_menu_order'] ?? 0;

                $upd = $wpdb->update(
                    $wpdb->prefix . 'posts',
                    array('menu_order' => $menu_order),
                    array('ID' => $post_id)
                );
            }

            return $post_id;
        }
    }

    new AdminController();