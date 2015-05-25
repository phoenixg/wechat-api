<?php namespace PhxWechat\ResponseMessage;

class ResponseMessageStaticFactory
{
    public static function factory($msgType)
    {
        $className = ucfirst($msgType);

        if (!class_exists($className)) {
            throw new Exception('Missing class.');
        }

        return new $className();
    }
}
