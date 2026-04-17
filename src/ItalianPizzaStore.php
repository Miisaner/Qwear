<?php

namespace App;

use Liza\Qubell\PizzaStore;
use Liza\Qubell\Pizza;
use Liza\Qubell\MargheritaPizza;
use Liza\Qubell\PepperoniPizza;
use Liza\Qubell\BBQPizza;

class ItalianPizzaStore extends PizzaStore
{
    protected function createPizza(string $type): Pizza
    {
        return match ($type) {
            'margherita' => new MargheritaPizza(),
            'pepperoni'  => new PepperoniPizza(),
            'bbq'        => new BBQPizza(),
            default => throw new \InvalidArgumentException("Unknown pizza type"),
        };
    }
}
