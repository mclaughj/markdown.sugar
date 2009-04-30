#!/usr/bin/php
<?php

$ch = curl_init();
$long_url = $_ENV['E_SELECTED_TEXT'];

curl_setopt($ch, CURLOPT_URL, "http://tinyurl.com/create.php?url={$long_url}");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

$result = curl_exec($ch);
curl_close($ch);

preg_match('/http\:\/\/tinyurl.com\/(\w{1,8})/i', $result, $short_url);

echo $short_url[0];

?>