<?php
namespace PhxWechat;

use PhxWechat\Core\Wechat;
use PhxWechat\Utilities\Utilities;

require './libs/Wechat.php';
require './libs/Utilities/Utilities.php';
$config = include '../shared/config/config.php';


$wechat = new Wechat($config['token']);
$wechat->checkSignature();

// Utilities::logDebug();




