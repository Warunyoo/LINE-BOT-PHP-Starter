<?php
$access_token = 'sPT+QnFHq3lfgGW/83UTBrOkkiuuGLN/iDyOThomaLdA4dR0yt7FQYuQ8e0GLM5RbkiXSqcp4LcC+0jUCnWL6Y3Vsf/UB7SRd18t1/3N1p9nWxzMeLJp8GtRTRq7IKjGwE32Y18f6U6EXpt4w3bPDQdB04t89/1O/w1cDnyilFU=
';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);echo $result;
