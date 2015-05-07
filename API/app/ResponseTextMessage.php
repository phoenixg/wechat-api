<?php
use PhxWechat\Core\XMLTemplateResponse;


$XMLTemplateResponse = new XMLTemplateResponse();
echo $XMLTemplateResponse->text($requestXMLArray['ToUserName'], $requestXMLArray['FromUserName'], 'hi text');
// echo $XMLTemplateResponse->image($requestXMLArray['ToUserName'], $requestXMLArray['FromUserName'], 'aEDbdG7bIn_hM55o4n4N9YJEtG2vOmZBFdpzM9H31uZGRjKbWCUiRlgh9D0ZOuOM');
