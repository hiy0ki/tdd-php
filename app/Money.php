<?php

namespace App;

abstract class Money
{
    protected $amount;

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount
               && get_class($this) === get_class($money);
    }

    public function times(int $multiplier): Money
    {
    }
}