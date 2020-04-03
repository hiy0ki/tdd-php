<?php

namespace App;

use App\Dollar;
use App\Franc;


abstract class Money
{
    protected $amount;
    protected $currency;

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
               && get_class($this) === get_class($money);
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function times(int $multiplier): Money
    {
    }

    public static function dollar(int $amount): Money
    {
        return new Dollar($amount, "USD");
    }

    public static function franc(int $amount): Money
    {
        return new Franc($amount, "CHF");
    }
}