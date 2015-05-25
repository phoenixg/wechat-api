<?php
// require_once __DIR__ . '/vendor/autoload.php';

$config = parse_ini_file('config/config.ini');

/*



// 验证接入接口
 $wechat = new Wechat($config['token']);
 $wechat->checkSignature();

$request = new Request();
$requestXMLArray = $request->getRequestXMLArray();
Utilities::logDebug($requestXMLArray);

// 根据请求消息的类型，执行对应文件里的逻辑
$msgType = $requestXMLArray['MsgType'];
$responseMessageObj = ResponseMessageStaticFactory::factory($msgType);
$responseMessageObj->output();


switch ($requestXMLArray['MsgType']) {
    case 'event':
        switch ($request['event']) {
            case 'subscribe':
                //二维码关注
                if(isset($request['eventkey']) && isset($request['ticket'])){
                    $data = self::eventQrsceneSubscribe($request);
                    //普通关注
                }else{
                    $data = self::eventSubscribe($request);
                }
                break;
            //扫描二维码
            case 'scan':
                $data = self::eventScan($request);
                break;
            //地理位置
            case 'location':
                $data = self::eventLocation($request);
                break;
            //自定义菜单 - 点击菜单拉取消息时的事件推送
            case 'click':
                $data = self::eventClick($request);
                break;
            //自定义菜单 - 点击菜单跳转链接时的事件推送
            case 'view':
                $data = self::eventView($request);
                break;
            //自定义菜单 - 扫码推事件的事件推送
            case 'scancode_push':
                $data = self::eventScancodePush($request);
                break;
            //自定义菜单 - 扫码推事件且弹出“消息接收中”提示框的事件推送
            case 'scancode_waitmsg':
                $data = self::eventScancodeWaitMsg($request);
                break;
            //自定义菜单 - 弹出系统拍照发图的事件推送
            case 'pic_sysphoto':
                $data = self::eventPicSysPhoto($request);
                break;
            //自定义菜单 - 弹出拍照或者相册发图的事件推送
            case 'pic_photo_or_album':
                $data = self::eventPicPhotoOrAlbum($request);
                break;
            //自定义菜单 - 弹出微信相册发图器的事件推送
            case 'pic_weixin':
                $data = self::eventPicWeixin($request);
                break;
            //自定义菜单 - 弹出地理位置选择器的事件推送
            case 'location_select':
                $data = self::eventLocationSelect($request);
                break;
            //取消关注
            case 'unsubscribe':
                $data = self::eventUnsubscribe($request);
                break;
            //群发接口完成后推送的结果
            case 'masssendjobfinish':
                $data = self::eventMassSendJobFinish($request);
                break;
            //模板消息完成后推送的结果
            case 'templatesendjobfinish':
                $data = self::eventTemplateSendJobFinish($request);
                break;
            default:
                return Msg::returnErrMsg(MsgConstant::ERROR_UNKNOW_TYPE, '收到了未知类型的消息', $request);
                break;
        }
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







