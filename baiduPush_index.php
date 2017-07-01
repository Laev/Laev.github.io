<?php 
$urls = array(
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
    'http://www.laev.club/',
);
$api = 'http://data.zz.baidu.com/urls?site=www.laev.club&token=Q1kGGTUzo1gBzmfL';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
print_r($result);
 ?>