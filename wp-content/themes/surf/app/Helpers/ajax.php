<?php

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');
function true_load_posts()
{
    $args                = unserialize(stripslashes($_POST['query']));
    $args['paged']       = $_POST['page'] + 1; // следующая страница
    $args['post_status'] = 'publish';

    // обычно лучше использовать WP_Query, но не здесь
    query_posts($args);
    // если посты есть
    if (have_posts()) :
        $pp = 0;
        // запускаем цикл
        while (have_posts()) : the_post();
            $pp++;
            if (($pp % 2) == 0) {
                get_template_part('cases2');
                echo '</div>';
            } else {
                echo '<div class="cases-home">';
                get_template_part('cases2');
            }

        endwhile;

    endif;
    die();
}

add_action('wp_ajax_get_ajax_filtered', 'get_ajax_filtered');
add_action('wp_ajax_nopriv_get_ajax_filtered', 'get_ajax_filtered');
function get_ajax_filtered()
{
    $shown_posts = isset($_POST['shown']) ? $_POST['shown'] : [];
    $category    = isset($_POST['category']) ? $_POST['category'] : [];

    // Query Arguments
    $args = array(
        'post_type'      => array('post'),
        'post_status'    => array('publish'),
        'posts_per_page' => 4,
        'order'          => 'DESC',
        'orderby'        => 'date',
        'post__not_in'   => $shown_posts,
        'orderby'        => 'date',
        'cat'            => $category
    );

    $ajaxposts = get_posts($args);

    foreach ($ajaxposts as $post) {
			
        $cat = get_the_category($post->ID)[0];
        $img = get_the_post_thumbnail_url($post->ID, 'full');
        !$img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
        $desc = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
        (empty($desc)) && ($desc = get_the_excerpt_max_charlength(140, $post->ID));

        $post->permalink = get_the_permalink($post->ID);
        $post->image     = $img;
        $post->meta_desc = $desc;
        $post->category  = [
            'url'  => get_category_link($cat->term_id),
            'name' => $cat->name,
			'count' => $cat->count,
        ];
		$post->reading_time = do_shortcode('[rt_reading_time post_id="' . $post->ID . '"]');
    }

    echo json_encode($ajaxposts);

    exit;
}

// add_action('wp_ajax_cases_filter', 'cases_filter');
// add_action('wp_ajax_nopriv_cases_filter', 'cases_filter');
// function cases_filter()
// {
//     $p1 = htmlspecialchars(trim($_POST['pp1'] ?? false));
//     $a1 = explode(',', $p1);
//     $d1 = array_map('intval', array_filter($a1, 'is_numeric'));

//     $p2 = htmlspecialchars(trim($_POST['pp2'] ?? false));
//     $a2 = explode(',', $p2);
//     $d2 = array_map('intval', array_filter($a2, 'is_numeric'));

//     $tax_query = array('relation' => 'AND');

//     if ($p1 != '') {
//         $tax_query[] = array(
//             'taxonomy' => 'otrasli',
//             'field'    => 'id',
//             'terms'    => $a1,
//             'operator' => 'IN',
//         );
//     }

//     if ($p2 != '') {
//         $tax_query[] = array(
//             'taxonomy' => 'type',
//             'field'    => 'id',
//             'terms'    => $a2,
//             'operator' => 'IN',
//         );
//     }

//     $current = absint(max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page')));
//     $args    = array(
//         'posts_per_page' => -1,
//         'paged'          => $current,
//         'orderby'        => 'date',
//         'post_type'      => 'cases',
//         'order'          => 'DESC',
//         'tax_query'      => $tax_query,
//     );

//     if (!is_surf_employee()) {
//         $args['post_status'] = array('publish');
//     }

//     $query   = new WP_Query($args);

//     if ($query->have_posts()) {
//         $pp = 0;
//         while ($query->have_posts()) {
//             $query->the_post();
//             $pp++;
//             if (($pp % 2) == 0) {
//                 get_template_part('cases2');
//                 echo '</div>';
//             } else {
//                 echo '<div class="cases-home test">';
//                 get_template_part('cases');
//             }
//         }
//     } else {
//         echo '<p style="margin-top:40px;font-size:18px;">Ничего не найдено</p>';
//     }

//     die();
// }

add_action('wp_ajax_cases_filter_new', 'cases_filter_new');
add_action('wp_ajax_nopriv_cases_filter_new', 'cases_filter_new');
function cases_filter_new()
{
    $p1 = htmlspecialchars(trim($_POST['pp1'] ?? false));
    $a1 = explode(',', $p1);
    $d1 = array_map('intval', array_filter($a1, 'is_numeric'));

    $p2 = htmlspecialchars(trim($_POST['pp2'] ?? false));
    $a2 = explode(',', $p2);
    $d2 = array_map('intval', array_filter($a2, 'is_numeric'));

    $tax_query = array('relation' => 'AND');

    if ($p1 != '') {
        $tax_query[] = array(
            'taxonomy' => 'otrasli',
            'field'    => 'id',
            'terms'    => $a1,
            'operator' => 'IN',
        );
    }

    if ($p2 != '') {
        $tax_query[] = array(
            'taxonomy' => 'type',
            'field'    => 'id',
            'terms'    => $a2,
            'operator' => 'IN',
        );
    }

    $current = absint(max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page')));
    $args    = array(
        'posts_per_page' => 3,
        'paged'          => $current,
        'orderby'        => 'date',
        'post_type'      => 'cases',
        'order'          => 'DESC',
        'tax_query'      => $tax_query,
    );

    if (!is_surf_employee()) {
        $args['post_status'] = array('publish');
    }

    $query   = new WP_Query($args);
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
        
                get_template_part('cases_template');
            
        }
    } else {
        echo '<p style="margin-top:40px;font-size:18px;">Ничего не найдено</p>';
    }

    die();
}

add_action('wp_ajax_crm_pipedrive', 'crm_pipedrive');
add_action('wp_ajax_nopriv_crm_pipedrive', 'crm_pipedrive');
function crm_pipedrive()
{
    $usermail   = $_POST['email'];
    $username   = $_POST['name'];
    $userphone  = $_POST['phone'];
    $company    = $_POST['company'];
    $content    = $_POST['msg'];
    $reffer     = $_POST['reffer'];
    $clientID   = $_POST['clientID'];
    $clientIDYM = $_POST['clientIDYA'];

    $PCREpattern = '/\r\n|\r|\n/u';
    $content     = preg_replace($PCREpattern, ' ', $content);

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL            => "https://surf.pipedrive.com/v1/persons?api_token=4d257b1b0b9d59769ac41df198f9e5e1921befb1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING       => "",
        CURLOPT_MAXREDIRS      => 10,
        CURLOPT_TIMEOUT        => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST  => "POST",
        CURLOPT_POSTFIELDS     => "{\r\n    \"name\":\"$username\",\r\n    \"email\":\"$usermail\",\r\n    \"phone\":\"$userphone\"\r\n}",
        CURLOPT_HTTPHEADER     => array(
            "Content-Type: application/json",
        ),
    ));

    $response = curl_exec($curl);
    curl_close($curl);

    $responseData = json_decode($response, true);
    $created_user = $responseData['data']['id'];
    $created_user_id = (int)$created_user;
    $owner_id = 14184540;

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL            => "https://surf.pipedrive.com/v1/leads?api_token=4d257b1b0b9d59769ac41df198f9e5e1921befb1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING       => "",
        CURLOPT_MAXREDIRS      => 10,
        CURLOPT_TIMEOUT        => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST  => "POST",
		CURLOPT_POSTFIELDS     => "{\r\n 
		 \"title\":\"Lead from surf.dev - $username - ($usermail)*\",\r\n
		  \"person_id\":$created_user_id,\r\n    
		  \"6b64a6116a425f73ad802a81f24378124f1226d9\":\"$content\",\r\n 
		  \"eb2b0336f93553410dc4743db23887325f1bc25a\":\"$reffer\",\r\n 
		  \"aa56b03051a0d25634f77f90328f796d41890b31\":\"$clientIDYM\"\r\n 
}",
        CURLOPT_HTTPHEADER => array(
            "Content-Type: application/json",
        ),
    ));

    $responseLead = curl_exec($curl);
    curl_close($curl);
    $resultLead = json_decode($responseLead, true);


    // START CREATING NOTES

    $leadId = $resultLead['data']['id'];
    if (is_lang_ru()) {
        $clientGLink  = 'https://analytics.google.com/analytics/web/?authuser=1#/report/visitors-user-activity/a35536345w63366096p241383367/_u.dateOption=last30days&_r.userId=' . $clientID . '&_r.userListReportStates=%3F_u.dateOption=last30days&_r.userListReportId=visitors-legacy-user-id&activity-userActivityTable.activityTypeFilter=PAGEVIEW,GOAL,ECOMMERCE,EVENT&activity-userActivityTable.sorting=descending';
        $clientYMLink = 'https://metrika.yandex.ru/stat/visitors?period=month&filter=(EXISTS+ym%3Au%3AuserID+WITH+(ym%3Au%3AclientID%3D%3D%2527' . $clientIDYM . '%2527))&id=19355434';
    } else {
        $clientGLink  = 'https://analytics.google.com/analytics/web/?authuser=1#/report/visitors-user-activity/a194342940w271648625p246865472/_u.dateOption=last30days&_r.userId=' . $clientID . '&_r.userListReportStates=&_r.userListReportId=visitors-legacy-user-id&activity-userActivityTable.activityTypeFilter=PAGEVIEW,GOAL,ECOMMERCE,EVENT&activity-userActivityTable.sorting=descending';
        $clientYMLink = 'https://metrika.yandex.ru/stat/visitors?period=month&filter=(EXISTS+ym%3Au%3AuserID+WITH+(ym%3Au%3AclientID%3D%3D%2527' . $clientIDYM . '%2527))&id=81793075';
    }

    $printableGA = $clientID
        ? '<a href="' . $clientGLink . '" target="_blank">' . $clientGLink . '</a>'
        : $clientID;

    $printableYM = $clientIDYM
        ? '<a href="' . $clientYMLink . '" target="_blank">' . $clientYMLink . '</a>'
        : $clientIDYM;

    $site   = is_lang_ru() ? 'surf.ru' : 'surf.dev';

    $note_content = "<html><body>";
    $note_content .= "<h2>Заявка с сайта " . $site ."</h2>";
    $note_content .= "<p><strong>Компания:</strong> " . $company . "</p>";
    $note_content .= "<p><strong>Имя:</strong> " . $username . "</p>";
    $note_content .= "<p><strong>Телефон:</strong> " . $userphone . "</p>";
    $note_content .= "<p><strong>Почта:</strong> " . $usermail . "</p>";
    $note_content .= "<p><strong>Задача:</strong> " . $content . "</p>";
    $note_content .= "<p><strong>Рефер:</strong> " . $reffer . "</p>";
    $note_content .= "<p><strong>GA Сlient ID:</strong> " . $printableGA . "</p>";
    $note_content .= "<p><strong>YM Сlient ID:</strong> " . $printableYM . "</p>";
    $note_content .= "</body></html>";

    $note_json  = str_replace('"', '', $note_content);
    $note_json2  = str_replace("'", '', $note_json);
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://surf.pipedrive.com/v1/notes?api_token=4d257b1b0b9d59769ac41df198f9e5e1921befb1',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS     => '{
        "content":"'.$note_json2.'",
        "lead_id":"'.$leadId.'",
        "pinned_to_lead_flag":1
    }',
    CURLOPT_HTTPHEADER => array(
        'Content-Type: application/json'
    ),
    ));

  
    $responseNotes = curl_exec($curl);
    curl_close($curl);
    $resultNotes = json_decode($responseNotes, true);

    $filename = __DIR__ . '/surf_debug_log.txt';
    file_put_contents($filename, $note_json2);
    
    // END CREATING NOTES

    if ($resultLead['success']) {
        http_response_code(200);
        echo json_encode(array('response' => 'success', 'leadId' => $leadId), JSON_UNESCAPED_SLASHES);
    } else {
        http_response_code(422);
        $result['err'] = $resultLead;
        echo json_encode($result, JSON_UNESCAPED_UNICODE);
    }
}

add_action('wp_ajax_send_bid', 'send_bid');
add_action('wp_ajax_nopriv_send_bid', 'send_bid');
function send_bid()
{
    $site   = is_lang_ru() ? 'surf.ru' : 'surf.dev';
    $from   = isset($_POST['email']) ? $_POST['email'] : 'hello@surfstudio.ru';
    $sendto = 'hello@surfstudio.ru';

    $usermail   = isset($_POST['email']) ? $_POST['email'] : '';
    $username   = isset($_POST['name']) ? $_POST['name'] : '';
    $userphone  = isset($_POST['phone']) ? $_POST['phone'] : '';
    $company    = isset($_POST['company']) ? $_POST['company'] : '';
    $content    = isset($_POST['msg']) ? $_POST['msg'] : '';
    $reffer     = isset($_POST['reffer']) ? $_POST['reffer'] : '';
    $clientID   = isset($_POST['clientID']) ? $_POST['clientID'] : '';
    $clientIDYM = isset($_POST['clientIDYA']) ? $_POST['clientIDYA'] : '';
    $leadId = isset($_POST['leadId']) ? $_POST['leadId'] : '';

    $files   = getFormFiles();

    $ch1 = $_POST['ch1'] ?? '';
    $ch2 = $_POST['ch2'] ?? '';
    $ch3 = $_POST['ch3'] ?? '';
    $ch4 = $_POST['ch4'] ?? '';
    $ch5 = $_POST['ch5'] ?? '';
    $ch6 = $_POST['ch6'] ?? '';
    $ch7 = $_POST['ch7'] ?? '';

    if (is_lang_ru()) {
        $clientGLink  = 'https://analytics.google.com/analytics/web/?authuser=1#/report/visitors-user-activity/a35536345w63366096p241383367/_u.dateOption=last30days&_r.userId=' . $clientID . '&_r.userListReportStates=%3F_u.dateOption=last30days&_r.userListReportId=visitors-legacy-user-id&activity-userActivityTable.activityTypeFilter=PAGEVIEW,GOAL,ECOMMERCE,EVENT&activity-userActivityTable.sorting=descending';
        $clientYMLink = 'https://metrika.yandex.ru/stat/visitors?period=month&filter=(EXISTS+ym%3Au%3AuserID+WITH+(ym%3Au%3AclientID%3D%3D%2527' . $clientIDYM . '%2527))&id=19355434';
    } else {
        $clientGLink  = 'https://analytics.google.com/analytics/web/?authuser=1#/report/visitors-user-activity/a194342940w271648625p246865472/_u.dateOption=last30days&_r.userId=' . $clientID . '&_r.userListReportStates=&_r.userListReportId=visitors-legacy-user-id&activity-userActivityTable.activityTypeFilter=PAGEVIEW,GOAL,ECOMMERCE,EVENT&activity-userActivityTable.sorting=descending';
        $clientYMLink = 'https://metrika.yandex.ru/stat/visitors?period=month&filter=(EXISTS+ym%3Au%3AuserID+WITH+(ym%3Au%3AclientID%3D%3D%2527' . $clientIDYM . '%2527))&id=81793075';
    }

    $printableGA = $clientID
        ? '<a href="' . $clientGLink . '" target="_blank">' . $clientGLink . '</a>'
        : $clientID;

    $printableYM = $clientIDYM
        ? '<a href="' . $clientYMLink . '" target="_blank">' . $clientYMLink . '</a>'
        : $clientIDYM;

    // Формирование заголовка письма
    $subject = '';
    if ($usermail) {
        $is_test_email = explode('@', $usermail);
        $is_test_email = stripos($is_test_email[1], 'test') !== false;

        if ($is_test_email) {
            $subject .= is_lang_ru() ? 'ТЕСТ' : 'TEST';
            $subject .= ' - ';
        }
    }

    $subject .= "Заявка с сайта " . $site;
    $headers = "From: " . strip_tags($from) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($from) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

    // Формирование тела письма
    $msg = "<html><body style='font-family:Arial,sans-serif;'>";
    $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка с сайта {$site}</h2>\r\n";
    $msg .= "<p><strong>Рефер:</strong> " . $reffer . "</p>\r\n";
    $msg .= "<p><strong>GA Сlient ID:</strong> " . $printableGA . "</p>\r\n";
    $msg .= "<p><strong>YM Сlient ID:</strong> " . $printableYM . "</p>\r\n";
    $msg .= "<p><strong>Компания:</strong> " . $company . "</p>\r\n";
    $msg .= "<p><strong>Имя:</strong> " . $username . "</p>\r\n";
    $msg .= "<p><strong>Телефон:</strong> " . $userphone . "</p>\r\n";
    $msg .= "<p><strong>Почта:</strong> " . $usermail . "</p>\r\n";
    $msg .= "<p><strong>Задача:</strong> " . $content . "</p>\r\n";

    if ($leadId) {
        $msg .= "<p><strong>Лид: </strong> <a href='https://surfgroup.pipedrive.com/leads/inbox/" . $leadId . "'>Открыть</a></p>\r\n";
    }

//    if(!is_lang_ru()) {
//         if($dealLink) {
//             $msg .= "<p><strong>Сделка:</strong> <a href='".$dealLink."'>Открыть</a></p>\r\n";
//         }
//    }

    if (is_lang_en()) {
        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Устройства</h2>\r\n";
        if ($ch1 != '') {
            $msg .= "<p><strong>Мобильные устройства:</strong> Да</p>\r\n";
        }
        if ($ch2 != '') {
            $msg .= "<p><strong>Desktop:</strong> Да</p>\r\n";
        }
        if ($ch3 != '') {
            $msg .= "<p><strong>Другое:</strong> Да</p>\r\n";
        }

        $msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Виды услуг</h2>\r\n";
        if ($ch4 != '') {
            $msg .= "<p><strong>Дизайн и проектирование:</strong> Да</p>\r\n";
        }
        if ($ch5 != '') {
            $msg .= "<p><strong>Разработка:</strong> Да</p>\r\n";
        }
        if ($ch6 != '') {
            $msg .= "<p><strong>Аутсорс тестирования:</strong> Да</p>\r\n";
        }
        if ($ch7 != '') {
            $msg .= "<p><strong>Другое:</strong> Да</p>\r\n";
        }
    }

    $msg .= "</body></html>";

    // отправка сообщения
    if (wp_mail($sendto, $subject, $msg, $headers, $files)) {
        echo "true";
    } else {
        echo "false";
    }
}

add_action('wp_ajax_career_form', 'career_form');
add_action('wp_ajax_nopriv_career_form', 'career_form');
function career_form()
{
    $from    = isset($_POST['email']) ?  $_POST['email'] : 'job@surfstudio.ru';
    $sendto  = 'job@surfstudio.ru';
    $subject = "Резюме с сайта" . (isset($_POST['position']) ? '. Должность: ' . $_POST['position'] : '');

    $headers = "From: " . strip_tags($from) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($from) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";

    $files   = getFormFiles();
    $message = isset($_POST['name']) ? '<b>Имя:</b> ' . $_POST['name'] . '<br>' : '';
    $message .= isset($_POST['surname']) ? '<b>Фамилия:</b> ' . $_POST['surname'] . '<br>' : '';
    $message .= isset($_POST['email']) ? '<b>Почта:</b> ' . $_POST['email'] . '<br>' : '';
    $message .= isset($_POST['phone']) ? '<b>Телефон:</b> ' . $_POST['phone'] . '<br>' : '';
    $message .= isset($_POST['position']) ? '<b>Должность:</b> ' . $_POST['position'] . '<br>' : '';
    $message .= isset($_POST['course']) ? '<b>Направление стажировки:</b> ' . $_POST['course'] . '<br>' : '';
    $message .= isset($_POST['source']) ? '<b>Откуда о нас узнали:</b> ' . $_POST['source'] . '<br>' : '';
    $message .= isset($_POST['msg']) ? '<b>О себе:</b> ' . $_POST['msg'] . '<br>' : '';

    $clientID   = isset($_POST['clientID']) ? $_POST['clientID'] : '';
    $clientIDYM = isset($_POST['clientIDYA']) ? $_POST['clientIDYA'] : '';

    $message .= "<br><br>";
    $message .= "<p><strong>GA Сlient ID:</strong> " . $clientID . "</p>\r\n";
    $message .= "<p><strong>YM Сlient ID:</strong> " . $clientIDYM . "</p>\r\n";

    if (is_lang_ru()) {
        $clientGLink  = 'https://analytics.google.com/analytics/web/?authuser=1#/report/visitors-user-activity/a35536345w63366096p241383367/_u.dateOption=last30days&_r.userId=' . $clientID . '&_r.userListReportStates=%3F_u.dateOption=last30days&_r.userListReportId=visitors-legacy-user-id&activity-userActivityTable.activityTypeFilter=PAGEVIEW,GOAL,ECOMMERCE,EVENT&activity-userActivityTable.sorting=descending';
        $clientYMLink = 'https://metrika.yandex.ru/stat/visitors?period=month&filter=(EXISTS+ym%3Au%3AuserID+WITH+(ym%3Au%3AclientID%3D%3D%2527' . $clientIDYM . '%2527))&id=19355434';
    } else {
        $clientGLink  = 'https://analytics.google.com/analytics/web/?authuser=1#/report/visitors-user-activity/a194342940w271648625p246865472/_u.dateOption=last30days&_r.userId=' . $clientID . '&_r.userListReportStates=&_r.userListReportId=visitors-legacy-user-id&activity-userActivityTable.activityTypeFilter=PAGEVIEW,GOAL,ECOMMERCE,EVENT&activity-userActivityTable.sorting=descending';
        $clientYMLink = 'https://metrika.yandex.ru/stat/visitors?period=month&filter=(EXISTS+ym%3Au%3AuserID+WITH+(ym%3Au%3AclientID%3D%3D%2527' . $clientIDYM . '%2527))&id=81793075';
    }

    $message .= $clientID ? '<br><br><a href="' . $clientGLink . '" target="_blank">analytics.google.com</a>' : $clientID;
    $message .= '<br>';
    $message .= $clientIDYM ? '<a href="' . $clientYMLink . '" target="_blank">metrika.yandex.ru</a>' : $clientIDYM;

    if (wp_mail($sendto, $subject, $message, $headers, $files)) {
        wp_send_json_success();
    }

    wp_send_json_error();
}

/**
 * @return array
 */
function getFormFiles(): array{
    $files = $_FILES["files"];
    $bytes_in_mb = 1048576;
    $total_files_size = 0;

    if (isset($_FILES['files']) && empty($_FILES["file"]["error"])) {
        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
            $file_size = $_FILES['files']['size'][$key];
            $total_files_size += $file_size;

            if ($file_size > (60 * $bytes_in_mb)) {
                continue;
            }
            if ($total_files_size > (200 * $bytes_in_mb)) {
                break;
            }
            $file_path       = dirname($tmp_name);
            $new_file_uri    = $file_path . '/' . $_FILES['files']['name'][$key];
            $moved           = move_uploaded_file($tmp_name, $new_file_uri);
            $attachment_file = $moved ? $new_file_uri : $tmp_name;
            $files[]         = $attachment_file;
        }
    }

    return $files;
}

// function getFormFiles(): array{
// if(( 'POST' == $_SERVER['REQUEST_METHOD']  ) && ( $_FILES )) {
// 		$files = $_FILES["files"];
// 		foreach ($files['name'] as $key => $value) {	
// 				if ($files['name'][$key]) {
// 					$file = array(
// 						'name' => $files['name'][$key],
// 	 					'type' => $files['type'][$key],
// 						'tmp_name' => $files['tmp_name'][$key], 
// 						'error' => $files['error'][$key],
//  						'size' => $files['size'][$key]
// 					);
// 					$_FILES = array ("files" => $file);
// 					foreach ($_FILES as $file => $array) {			
// 						$newupload = surf_handle_attachment($file,$pid); 
// 					}
// 					$files[] = $newupload;
// 				}
// 			}
// 	}
// 	return $files;
// }