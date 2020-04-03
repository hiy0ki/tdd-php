<?php

namespace App;

use App\Money;

class Franc extends Money
{
    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return Money::franc($this->amount * $multiplier);
    }
}