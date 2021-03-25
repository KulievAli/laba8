<?php

namespace kuliev;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {
    public static function log($str) {
        array_push(LogAbstract::Instance()->log, $str);
    }

    public static function write() {
        LogAbstract::Instance()->_write();
    }

    public function _write() {
        foreach (LogAbstract::Instance()->log as $value) {
            echo $value;
        }
    }
}