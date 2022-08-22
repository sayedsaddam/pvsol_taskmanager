<?php 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.ahgroup-pk.com/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$output = curl_exec($ch);
curl_close($ch);

preg_match_all('!//www.ahgroup-pk.com/assets/images/([^"]+)!', $output, $matches);

print_r($matches);