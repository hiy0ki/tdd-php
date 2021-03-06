<?php

use PHPUnit\Framework\TestCase;

use App\Money;
use App\Bank;


class MoneyTest extends TestCase
{
    public function test_multiplication()
    {
        $five = Money::dollar(5);
        $this->assertTrue((Money::dollar(10))->equals($five->times(2)));
        $this->assertTrue((Money::dollar(15))->equals($five->times(3)));
    }

    public function test_equality()
    {
        $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
        $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));

        $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
    }

    public function test_currency()
    {
        $this->assertSame("USD", Money::dollar(1)->currency());
        $this->assertSame("CHF", Money::franc(1)->currency());
    }

    public function test_simple_addition()
    {
        $sum = Money::dollar(5)->plus(Money::dollar(5));
        $reduced = Bank::reduce($sum, "USD");
        $this->assertTrue(Money::dollar(10)->equals($reduced));
    }
}