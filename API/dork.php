<?php
namespace PhxWechat;

use PhxWechat\Core\Wechat;
use PhxWechat\Utilities\Utilities;

require './libs/Wechat.php';
require './libs/Utilities/Utilities.php';
$config = include '../shared/config/config.php';


$wechat = new Wechat($config['token']);
$wechat->checkSignature();

$xml = (array) simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA);
Utilities::logDebug($xml);

// $this->_requestXML = array_change_key_case($xml, CASE_LOWER);





