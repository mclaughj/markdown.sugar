#!/usr/bin/php
<?php

$long_url = trim($_ENV['E_SELECTED_TEXT']);

if ($long_url != ''):
	
	if (preg_match('/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i', $long_url)):
		$shorten = true;
		$type = 'url';
		$prepared = $long_url;
	elseif (preg_match('/[-0-9a-zA-Z._+&]+@([-0-9a-zA-Z]+[.])+[a-zA-Z]{2,6}/i', $long_url)):
		$shorten = true;
		$type = 'mail';
		$prepared = "mailto:" . $long_url;
	endif;
	
	if ($shorten == true):
	
	$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, "http://tinyurl.com/create.php?url={$prepared}");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		
		$result = curl_exec($ch);
		curl_close($ch);
		
		preg_match('/http\:\/\/tinyurl.com\/(\w{1,8})/i', $result, $short_url);
		
		if ($short_url[0] != ''):
			echo $short_url[0];
		else:
			echo $long_url . " - Could not shorten URL.";
		endif;
		
	else:
		
		echo $long_url . " - Not a valid URL or E-Mail address.";
		
	endif;
	
else:
	
	echo "Nothing selected.";
	
endif;

?>