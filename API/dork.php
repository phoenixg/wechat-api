<?php
namespace PhxWechat;

use PhxWechat\Core\Request;
use PhxWechat\Core\Wechat;
use PhxWechat\Core\XMLTemplateResponse;
use PhxWechat\Utilities\Utilities;

require './libs/Wechat.php';
require './libs/XMLTemplateResponse.php';
require './libs/Request.php';
require './libs/Utilities/Utilities.php';
$config = include '../shared/config/config.php';


// 验证接入接口
// $wechat = new Wechat($config['token']);
// $wechat->checkSignature();

$request = new Request();
$requestXMLArray = $request->getRequestXMLArray();
Utilities::logDebug($requestXMLArray);


$XMLTemplateResponse = new XMLTemplateResponse();
$text = $XMLTemplateResponse->text($requestXMLArray['ToUserName'], $requestXMLArray['FromUserName'], 'hi baby');

echo $text;







