<?php
require "./autoload.php";
$config = include "../shared/config/config.php";

use Overtrue\Wechat\Server;

$appId          = $config['appid'];
$token          = $config['token'];
$encodingAESKey = $config['encodingAESKey'];

$server = new Server($appId, $token, $encodingAESKey);

$server->on('message', function($message){
    return "您好！欢迎关注 overtrue!!!";
});

echo $server->serve();
