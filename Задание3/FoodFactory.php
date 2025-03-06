<?php

require_once 'PizzaStore.php';
require_once 'ChocolateFactory.php';

class FoodFactory extends PizzaStore {
    private $chocolateFactory;

    public function __construct() {
        $this->chocolateFactory = new ChocolateFactory();
    }

    public function orderPizza($type) {
        parent::orderPizza($type);
    }

    public function orderSnack($type) {
        $this->chocolateFactory->orderSnack($type);
    }
}