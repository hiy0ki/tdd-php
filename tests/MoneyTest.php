<?php
use PHPUnit\Framework\TestCase;
use App\Dollar;

class MoneyTest extends TestCase
{
    public function test_multiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);
        $this->assertSame(10, $product->amount);

        $product = $five->times(3);
        $this->assertSame(15, $product->amount);
    }
}