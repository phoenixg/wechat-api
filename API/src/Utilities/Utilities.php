<?php namespace PhxWechat\Utilities;

class Utilities {
    //  todo: ioc container
    public static function logDebug($data){
        file_put_contents('./debug.log', print_r($data, true)."\n", FILE_APPEND);
    }
}