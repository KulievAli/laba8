<?php

namespace kuliev;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{

    public function _write()
    {
        foreach ($this->log as $mass) {
            echo $mass . PHP_EOL;
        }
    }

    public static function log($str)
    {
        self::Instance()->log[] = $str;
    }

    public static function write()
    {
        self::Instance()->_write();
    }
}