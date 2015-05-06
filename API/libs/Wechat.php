<?php
namespace PhxWechat\Core;

class Wechat {

    private $_requestXML;
    private $_token;

    public function __construct($token) {
        if (!isset($token)) {
            throw new Exception('token is not given!');
        }

        $this->_token = $token;

        // $xml = (array) simplexml_load_string($GLOBALS['HTTP_RAW_POST_DATA'], 'SimpleXMLElement', LIBXML_NOCDATA);
        // $this->_requestXML = array_change_key_case($xml, CASE_LOWER);
    }

    public function checkSignature() {
        $signature = $_GET["signature"];
        $timestamp = $_GET["timestamp"];
        $nonce = $_GET["nonce"];

        $tmpArr = array($this->_token, $timestamp, $nonce);
        sort($tmpArr, SORT_STRING);
        $tmpStr = implode( $tmpArr );
        $tmpStr = sha1( $tmpStr );

        if( $tmpStr == $signature ){
            echo $_GET['echostr'];
            return true;
        }else{
            return false;
        }
    }


}


