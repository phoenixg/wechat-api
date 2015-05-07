<?php
namespace PhxWechat\Core;
use PhxWechat\Core\XMLTemplateResponse;

class ResponseLocationMessage implements ResponseMessageInterface {
    public function output(){
        $XMLTemplateResponse = new XMLTemplateResponse();
        echo $XMLTemplateResponse->text($requestXMLArray['ToUserName'], $requestXMLArray['FromUserName'], 'hi location');
    }

}

