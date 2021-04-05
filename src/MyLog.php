<?php

namespace kuliev;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface {
    public static function log(string $str): void {
        self::Instance()->_log($str);
    }

    public function _log($str) {
        $this->log[] = $str;
    }

    public static function write(): void {
        LogAbstract::Instance()->_write();
    }

    public function _write() {
        // Read current date and time
        $d = new \DateTime();
        $date = $d->format('d.m.Y_H.i.s.ms');
        $logFileName = "log/$date.log";

        // Create log directory
        if (!file_exists("log")) {
            mkdir("log");
        }
        
        foreach ($this->log as $value) {
            echo $value . "\n\r";
        }

        file_put_contents($logFileName, implode("\n", $this->log));
    }
}