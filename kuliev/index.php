<?php
class A
{
}
class B extendes A
{
    public function __construct($a)
    {
        $this->a =$a;
    }
    protected $a;
}
class C extendes B
{
    public function __construct($a,$b,$c)
    {
        $this->b = $b;
        $this->c = $c;
        parent::__construct($a);
    }
    protected $b;
    protected $c;
}

$a1 = new A();
$b2 = new B($b3);
$b3 = new B($a1);
$b4 = new B($a1);
$c5 = new B($b2,$b4);