<?php
namespace PhxWechat;

use PhxWechat\Core\Request;
use PhxWechat\Core\Wechat;
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

// 根据请求消息的类型，执行对应文件里的逻辑
switch ($requestXMLArray['MsgType']) {
    case 'event':
        break;
    case 'text':
        include './app/ResponseTextMessage.php';
        break;
    case 'image':
        include './app/ResponseImageMessage.php';
        break;
    case 'voice':
        include './app/ResponseVoiceMessage.php';
        break;
    case 'video':
        include './app/ResponseVideoMessage.php';
        break;
    case 'shortvideo':
        include './app/ResponseShortVideoMessage.php';
        break;
    case 'location':
        include './app/ResponseLocationMessage.php';
        break;
}







