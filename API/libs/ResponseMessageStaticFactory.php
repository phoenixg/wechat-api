<?php
namespace PhxWechat\Core;

class ResponseMessageStaticFactory
{
    public static function factory($msgType)
    {
        $className = 'Response' . ucfirst($msgType) . 'Message';

        if (!class_exists($className)) {
            throw new \InvalidArgumentException('Missing class.');
        }

        return new $className();
    }
}
