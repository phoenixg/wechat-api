<?php
namespace PhxWechat\Core;

use PhxWechat\Utilities\Utilities;

class Request {

    private $_requestXML;

    protected $_ToUserName;
    protected $_FromUserName;
    protected $_CreateTime;
    protected $_MsgType;
    protected $_Content;
    protected $_FuncFlag;
    protected $_PicUrl;
    protected $_MsgId;
    protected $_MediaId;

    public function __construct(){
        $this->_requestXML = $GLOBALS['HTTP_RAW_POST_DATA'];
    }

    public function getRequestXMLArray() {
        $requestXMLArray = (array) simplexml_load_string($this->_requestXML, 'SimpleXMLElement', LIBXML_NOCDATA);
        $this->_ToUserName = $requestXMLArray['ToUserName'];
        $this->_FromUserName = $requestXMLArray['FromUserName'];
        $this->_CreateTime = $requestXMLArray['CreateTime'];
        $this->_MsgType = $requestXMLArray['MsgType'];
        $this->_Content = $requestXMLArray['Content'];

        return $requestXMLArray;
    }





}
