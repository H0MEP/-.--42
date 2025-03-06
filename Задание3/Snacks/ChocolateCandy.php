<?php

require_once 'Snack.php';

class ChocolateCandy extends Snack {
    public function __construct() {
        parent::__construct("Шоколадная конфета", "белый шоколад", ["нуга", "кокос"]);
    }
}