<?php
$access_token = 'XPGm9h6RxNpW9UzyxuiJmGvG5JIyGDXzd9UymxV0Cwo';
$url = 'https://notify-api.line.me/api/notify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);echo $result;
