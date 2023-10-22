<?php

$portal = 'https://speedinet.bitrix24.ru/rest/6/fcg15dswa8d493vg/crm.lead.add.json';
$subject = 'Заявка c сайта speedinet.ru';
// if(isset($_POST['utm_source'])){
// 	$subject = 'Тест Заявка c сайта speedinet.ru';
// }

$firstName = $_POST['adress'];
$tel = $_POST['phone'];
$b24trace = $_POST['b24trace'];
$data = array(
    'fields' => array(
        'TITLE' => $subject,
        'NAME' => $firstName,
        'PHONE' => array(array('VALUE' => $tel, 'VALUE_TYPE' => 'HOME')),
        'SOURCE_ID' => 'WEB',
        'TRACE' => $b24trace,
    ),
    'params' => array("REGISTER_SONET_EVENT" => "Y"),
);
if(!empty($_POST['utm_source'])){
    $data['fields']['UF_CRM_1605180024462'] = $_POST['utm_source'];
    $data['fields']['UF_CRM_1605180033405'] = $_POST['utm_medium'];
    $data['fields']['UF_CRM_1605180040774'] = $_POST['utm_campaign'];
}
$queryData = http_build_query($data);

$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_POST => 1,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => $portal,
    CURLOPT_POSTFIELDS => $queryData,
));
$result = curl_exec($curl);
curl_close($curl);
$result = json_decode($result, 1);

if (array_key_exists('error', $result)) {
    echo "Ошибка при отправки заявки: " . $result['error_description'] . "<br>";
} else {
    echo "Заявка успешно отправлена!";
}
