<?php
namespace PhxWechat;

use PhxWechat\Core\Wechat;
use PhxWechat\Core\XMLTemplateResponse;
use PhxWechat\Utilities\Utilities;

require './libs/Wechat.php';
require './libs/XMLTemplateResponse.php';
require './libs/Utilities/Utilities.php';
$config = include '../shared/config/config.php';


$wechat = new Wechat($config['token']);

// 验证接入接口
// $wechat->checkSignature();

$requestXMLArray = $wechat->getRequestXMLArray();

$XMLTemplateResponse = new XMLTemplateResponse();
$text = $XMLTemplateResponse->text($requestXMLArray['ToUserName'], $requestXMLArray['FromUserName'], '小朋友你好');
echo $text;







