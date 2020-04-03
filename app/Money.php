<?php

namespace App;

use App\Dollar;
use App\Franc;


class Money
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, string $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
               && $this->currency === $money->currency();
    }

    public function currency(): string
    {
        return $this->currency;
    }

    public function times(int $multiplier): Money
    {
        return new Money($this->amount * $multiplier, $this->currency);
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