<?php

class Byr_Torrent extends Plugin {
	private $host;
	
	function about() {
		return array(
			1.0,
			"缓存北邮人BT的RSS订阅中的torrent文件",
			"linxiaochunsd",
		);
	}
	
	function flags() {
		return array();
	}
	
	function init($host) {
		$this->host = $host;
		
		$host->add_hook($host::HOOK_ENCLOSURE_IMPORTED, $this);
	}
	
	function hook_enclosure_imported($e, $feed) {
		$e->link = str_replace("https://bt.byr.cn/download.php",SELF_URL_PATH."plugins.local/byr_torrent/download.php",$e->link);
		
		return $e;
	}
	
	function api_version() {
		return 2;
	}
	
}
