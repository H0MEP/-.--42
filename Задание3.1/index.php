<?php

require_once 'Pizza.php';
require_once 'PizzaStore.php';

$pizzaStore = new PizzaStore();

echo "Заказ пиццы Пепперони:\n";
$pizzaStore->orderPizza('pepperoni');

echo "\nЗаказ пиццы Маргарита:\n";
$pizzaStore->orderPizza('margherita');

echo "\nЗаказ пиццы Гавайская:\n";
$pizzaStore->orderPizza('hawaiian');

echo "\nЗаказ несуществующей пиццы:\n";
$pizzaStore->orderPizza('unknown');