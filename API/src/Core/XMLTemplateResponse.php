<?php
namespace PhxWechat\Core;

class XMLTemplateResponse{


    public static function text($fromUsername, $toUsername, $content, $funcFlag=0){
        $template = <<<XML
<xml>
    <FromUserName><![CDATA[%s]]></FromUserName>
    <ToUserName><![CDATA[%s]]></ToUserName>
    <CreateTime>%s</CreateTime>
    <MsgType><![CDATA[text]]></MsgType>
    <Content><![CDATA[%s]]></Content>
    <FuncFlag>%s</FuncFlag>
</xml>
XML;
        return sprintf($template, $fromUsername, $toUsername, time(), $content, $funcFlag);
    }

    public static function image($fromUsername, $toUsername, $mediaId, $funcFlag=0){
        $template = <<<XML
<xml>
    <FromUserName><![CDATA[%s]]></FromUserName>
    <ToUserName><![CDATA[%s]]></ToUserName>
    <CreateTime>%s</CreateTime>
    <MsgType><![CDATA[image]]></MsgType>
    <Image>
    <MediaId><![CDATA[%s]]></MediaId>
    </Image>
    <FuncFlag>%s</FuncFlag>
</xml>
XML;
        return sprintf($template, $fromUsername, $toUsername, time(), $mediaId, $funcFlag);
    }
}
