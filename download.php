<?php
use Rych\Bencode\Bencode;

require "bencode/Bencode.php";
require "bencode/Decoder.php";
require "bencode/Encoder.php";


$id      = $_REQUEST["id"];
$passkey = $_REQUEST["passkey"];

$url = "https://bt.byr.cn/download.php?id={$id}&passkey={$passkey}";
$content = file_get_contents($url);

$arr = Bencode::decode($content);
$uri = $_SERVER['SERVER_ADDR']."/plugins.local/byr_torrent";
$arr["announce"] = str_replace("tracker.byr.cn", $uri, $arr["announce"]);
$content = Bencode::encode($arr);

header('Content-Type:application/x-bittorrent');
header("Content-Disposition:attachment; filename={$id}.torrent");
echo $content;
