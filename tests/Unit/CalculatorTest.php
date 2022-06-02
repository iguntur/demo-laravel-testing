<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public function test_able_to_add_number()
    {
        $c = new Calculator();

        $this->assertEquals(5, $c->add(2, 3));
    }

    public function test_able_to_multiply()
    {
        $c = new Calculator();
        $this->assertEquals(20, $c->multiply(4, 5));
    }
}

class Calculator
{
    public function add($x, $y)
    {
        return $x + $y;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }
}
