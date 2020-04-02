<?php

namespace App;

class Franc
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new self($this->amount * $multiplier);
    }

    public function equals(Franc $franc): bool
    {
        return $this->amount === $franc->amount;
    }
}