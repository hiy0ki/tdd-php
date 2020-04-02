<?php
use PHPUnit\Framework\TestCase;
use App\Dollar;

class MoneyTest extends TestCase
{
    public function test_multiplication()
    {
        $five = new Dollar(5);
        $five->times(2);
        $this->assertSame(10, $five->amount);
    }
}