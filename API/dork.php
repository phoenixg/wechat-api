<?php
namespace PhxWechat;

use PhxWechat\Core\Wechat;

require './libs/Wechat.php';
$config = include '../shared/config/config.php';

$wechat = new Wechat($config['token']);
$wechat->checkSignature();



