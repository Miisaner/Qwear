<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\ItalianPizzaStore;

$store = new ItalianPizzaStore();

echo "=== Маргарита ===\n";
$store->orderPizza('margherita');
echo "\n=== Пепперони ===\n";
$store->orderPizza('pepperoni');
echo "\n=== Заказ BBQ ===\n";
$store->orderPizza('bbq');
