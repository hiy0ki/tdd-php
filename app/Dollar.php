<?php

namespace App;

class Dollar
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(Dollar $dollar): bool
    {
        return $this->amount === $dollar->amount;
    }
}