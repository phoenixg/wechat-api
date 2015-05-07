<?php
namespace PhxWechat\Core;

class Wechat {
    private $_token;

    public function __construct($token) {
        if (!isset($token)) {
            throw new Exception('token is not given!');
        }

        $this->_token = $token;
    }

    public function serve() {

    }


    // 接入验证
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
            echo 'YOU SHALL NOT PASS!';
            return false;
        }
    }

}


