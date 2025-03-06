<?php

class Pizza {
    private $name;
    private $sauce;
    private $toppings = [];

    public function __construct($name, $sauce, array $toppings) {
        $this->name = $name;
        $this->sauce = $sauce;
        $this->toppings = $toppings;
    }

    public function prepare() {
        echo "Началась готовка пиццы {$this->name}\n";
        echo "Добавлен соус {$this->sauce}\n";
        echo "Добавлены топики: " . implode(", ", $this->toppings) . "\n";
    }

    public function cut() {
        echo "Данную пиццу нарезают по диагонали\n";
    }
}