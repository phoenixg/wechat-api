<?php

use PhxWechat\Core\XMLTemplateResponse;


$XMLTemplateResponse = new XMLTemplateResponse();
echo $XMLTemplateResponse->text($requestXMLArray['ToUserName'], $requestXMLArray['FromUserName'], 'hi short video');