<?php

error_reporting(E_ALL ^ E_NOTICE);
define("STORAGE","file"); //file 文件存储，mysql 数据库存储，redis 缓存存储
define("DOMAIN","Your domain");
define("KEYDIR","Your key");
define('ONLINE_DIR','Your dir');

/*房间配置*/
$rooms = array(
	'a' => '聊天室一',
	'b' => '聊天室二',
	'c' => '聊天室三',
	'd' => '聊天室四',
	'e' => '聊天室五',
	'f' => '聊天室六'
);

?>