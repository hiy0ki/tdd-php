<?php
use PHPUnit\Framework\TestCase;
use App\Calc;

class CalcTest extends TestCase
{
    public function test_add()
    {
        $c = new Calc();
        $this->assertSame(3, $c->add(1, 2));
    }
}