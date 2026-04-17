<?php

declare(strict_types=1);

namespace Liza\Qubell;

abstract class PizzaStore
{
    public function orderPizza(string $type): void
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->cut();
    }

    abstract protected function createPizza(string $type): Pizza;
}
