<?php

require_once 'Pizza.php';
require_once 'Snack.php';
require_once 'PizzaStore.php';
require_once 'ChocolateFactory.php';
require_once 'FoodFactory.php';

require_once 'Pizzas/PepperoniPizza.php';
require_once 'Pizzas/MargheritaPizza.php';
require_once 'Pizzas/HawaiianPizza.php';

require_once 'Snacks/ChocolateBar.php';
require_once 'Snacks/ChocolateCake.php';
require_once 'Snacks/ChocolateCandy.php';

$foodFactory = new FoodFactory();

echo "Заказ пиццы Пепперони:\n";
$foodFactory->orderPizza('pepperoni');

echo "\nЗаказ пиццы Маргарита:\n";
$foodFactory->orderPizza('margherita');

echo "\nЗаказ пиццы Гавайская:\n";
$foodFactory->orderPizza('hawaiian');

echo "\nЗаказ шоколадного батончика:\n";
$foodFactory->orderSnack('chocolateBar');

echo "\nЗаказ шоколадного торта:\n";
$foodFactory->orderSnack('chocolateCake');

echo "\nЗаказ шоколадной конфеты:\n";
$foodFactory->orderSnack('chocolateCandy');