<?php
namespace PhxWechat\ResponseMessage;
use PhxWechat\Core\XMLTemplateResponse;

class Location implements ResponseMessageInterface {
    public function output(){
        $XMLTemplateResponse = new XMLTemplateResponse();
        echo $XMLTemplateResponse->text($requestXMLArray['ToUserName'], $requestXMLArray['FromUserName'], 'hi location');
    }

}

