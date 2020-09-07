<?php

require_once "../../classes/debug.php";

$id  = $_REQUEST["id"];
$passkey = $_REQUEST["passkey"];

$url = "https://bt.byr.cn/download.php?id={$id}&passkey={$passkey}";

header( 'Content-Type:application/x-bittorrent');
header("Content-Disposition:attachment; filename={$id}.torrent");
echo file_get_contents($url);
