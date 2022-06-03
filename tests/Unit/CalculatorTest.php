<?php

beforeEach(function() {
    $this->c = new Calculator();
});

test('can add two number', function () {
    $value = $this->c->add(2, 3);
    $expected = 5;

    expect($value)->toEqual($expected);
});

test('can multiply two number', function () {
    $value = $this->c->multiply(2, 3);
    $expected = 6;

    expect($value)->toEqual($expected);
});


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
