<?php

use PHPUnit\Framework\TestCase;
use kuliev\MyLog;

final class MyLogTest extends TestCase {
    public function testLog(): void {
        $this->expectOutputString("Hello, World!\n\r");
        MyLog::log("Hello, World!");
        MyLog::write();
    }

    public function testInstance(): void {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}