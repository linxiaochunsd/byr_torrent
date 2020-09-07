<?php

$oriUri = $_SERVER["REQUEST_URI"];

$uri = str_replace("/plugins.local/byr_torrent/","",$oriUri);

$url = "https://tracker.byr.cn/{$uri}";

$options = array(
	'http'=>array(
		'method'=>"GET",
		'header'=> "User-Agent: Transmission/3.00\r\n",
	)
);

$context = stream_context_create($options);
$content = file_get_contents($url, false, $context);
echo $content;

