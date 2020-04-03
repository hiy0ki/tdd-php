<?php
use PHPUnit\Framework\TestCase;
use App\Dollar;
use App\Franc;

class MoneyTest extends TestCase
{
    public function test_multiplication()
    {
        $five = new Dollar(5);
        $this->assertTrue((new Dollar(10))->equals($five->times(2)));
        $this->assertTrue((new Dollar(15))->equals($five->times(3)));
    }

    public function test_equality()
    {
        $this->assertTrue((new Dollar(5))->equals(new Dollar(5)));
        $this->assertFalse((new Dollar(5))->equals(new Dollar(6)));
        $this->assertTrue((new Franc(5))->equals(new Franc(5)));
        $this->assertFalse((new Franc(5))->equals(new Franc(6)));

        $this->assertFalse((new Franc(5))->equals(new Dollar(5)));
    }

    public function test_franc_multiplication()
    {
        $five = new Franc(5);
        $this->assertTrue((new Franc(10))->equals($five->times(2)));
        $this->assertTrue((new Franc(15))->equals($five->times(3)));
    }

}