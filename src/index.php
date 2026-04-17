<?php

require_once __DIR__ . '/vendor/autoload.php';

use Liza\Qubell\MargheritaPizza;
use Liza\Qubell\PepperoniPizza;
use Liza\Qubell\BBQPizza;


class MyPizzaStore extends \Liza\Qubell\PizzaStore
{
    protected function createPizza(string $type): Liza\Qubell\Pizza
    {
        switch ($type) {
            case 'margherita':
                return new MargheritaPizza();
            case 'pepperoni':
                return new PepperoniPizza();
            case 'bbq':
                return new BBQPizza();
            default:
                throw new InvalidArgumentException("Unknown pizza type");
        }
    }
}

$store = new MyPizzaStore();

echo "=== Заказ Маргариты ===\n";
$store->orderPizza('pepperoni');

echo "\n=== Заказ Пепперони ===\n";
$store->orderPizza('pepperoni');

echo "\n=== Заказ BBQ ===\n";
$store->orderPizza('bbq');