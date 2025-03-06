<?php

class Snack {
    protected $name;
    protected $chocolate;
    protected $toppings = [];

    public function __construct($name, $chocolate, array $toppings) {
        $this->name = $name;
        $this->chocolate = $chocolate;
        $this->toppings = $toppings;
    }

    public function prepare() {
        echo "Началось создание snack-а {$this->name}\n";
        echo "Добавляется шоколад {$this->chocolate}\n";
        echo "Добавлены начинки: " . implode(", ", $this->toppings) . "\n";
    }

    public function cut() {
        echo "Данный snack нарезают кубиками\n";
    }
}