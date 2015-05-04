<?php

require_once 'wechat.class.php';

function logdebug($text){
    file_put_contents('./debug.log',$text."\n",FILE_APPEND);
};

$wxObj = new Wechat(array(
    'token' => 'testtoken',
    'encodingaeskey' => 'FRt2c4srXRFsRz8DDS28T1eZo1o02H8QtDvvbjCT6sI',
    'appid' => 'wx12f2a9d2d05e660e',
    'appsecret' => '5f6f8b3457118a0300557eb02a0c8c70',
    'debug' => true,
    'logcallback' => 'logdebug'
));

// 验证过了就不用再验证了
// $wxObj->valid();
$type = $wxObj->getRev()->getRevType();
switch ($type) {
    case Wechat::MSGTYPE_TEXT:
        /* 可以这样直接裸的写
        //get post data, May be due to the different environments
        $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];

        //extract post data
        if (!empty($postStr)){

            $postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $fromUsername = $postObj->FromUserName;
            $toUsername = $postObj->ToUserName;
            $keyword = trim($postObj->Content);
            $time = time();
            $textTpl = "<xml>
							<ToUserName><![CDATA[%s]]></ToUserName>
							<FromUserName><![CDATA[%s]]></FromUserName>
							<CreateTime>%s</CreateTime>
							<MsgType><![CDATA[%s]]></MsgType>
							<Content><![CDATA[%s]]></Content>
							<FuncFlag>0</FuncFlag>
							</xml>";
            if(!empty( $keyword ))
            {
                $msgType = "text";
                $contentStr = "Welcome to wechat world!";
                $resultStr = sprintf($textTpl, $fromUsername, $toUsername, $time, $msgType, $contentStr);
                echo $resultStr;
            }else{
                echo "Input something...";
            }

        }else {
            echo "";
            exit;
        } */
        $wxObj->text("hello, I'm wechat")->reply();
        exit;
        break;
    case Wechat::MSGTYPE_EVENT:
        break;
    case Wechat::MSGTYPE_IMAGE:
        break;
    default:
        $wxObj->text("help info")->reply();
}
