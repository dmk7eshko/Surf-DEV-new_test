<?php
    class AjaxController
    {
        public function __construct()
        {
            add_action( 'wp_ajax_frontpage_contact_form', array($this, 'sendMail') );
            add_action( 'wp_ajax_nopriv_frontpage_contact_form', array($this, 'sendMail') );
        }

        /**
         * 
         */
        function sendMail(){
            $site_name = get_bloginfo('name');
            $site_url = str_replace(['http://', 'https://'], '', get_site_url());

            $fields = array(
                'name'  => array(
                    'title' => 'Имя',
                    'value' => $_POST['name'] ?? null,
                ),
                'phone'  => array(
                    'title' => 'Телефон',
                    'value' => $_POST['phone'] ?? null,
                ),
                'email'  => array(
                    'title' => 'E-mail',
                    'value' => $_POST['email'] ?? null,
                ),
                'message' => array(
                    'title' => 'Сообщение',
                    'value' => $_POST['message'] ?? null,
                )
            );

            if (!$fields['name']['value'] || !$fields['email']['value']){
                wp_send_json_error(false, 400);
            }

            $body = '<table cellpadding="5">';
            foreach ($fields as $slug => $field){
                if (!$field['value']){
                    continue;
                }

                $body .= '<tr>';
                    $body .= "<td><b>{$field['title']}:</b></td>";
                    $body .= "<td>{$field['value']}</td>";
                $body .= '</tr>';
            }
            $body .= '</table>';

            $headers = array(
                "From: {$site_name} <noreply@{$site_url}>",
                'content-type: text/html',
            );

            wp_mail(
                'hello@surfstudio.ru',
                'Запрос звонка',
                $body,
                $headers
            );

            wp_send_json_success(true, 200);
        }
    }

    new AjaxController();
