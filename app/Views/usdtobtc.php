<?php
$url = "https://www.hidely.net/api/usdtobtc";   
$ch = curl_init();   
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
curl_setopt($ch, CURLOPT_URL, $url);   
echo curl_exec($ch);
?>