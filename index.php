<?php

class A
{
  
}

class B extends A
{
    protected $a;

    public function __construct( $a)
    {
		$this->a = $a;
    }
}

class C extends B
{
    protected $c;
    protected $b;
    public function __construct($c, $b, $a)
    {
		$this->c = $c;
        $this->b = $b;
        $this->a = $a;
    }


}

$a1 = new A();
$b2 = new B($a1);
$b3 = new B($a1);
$c4 = new C($b2, $b3, $a1);
$c5 = new B($c4);
print_r($c5);
?>