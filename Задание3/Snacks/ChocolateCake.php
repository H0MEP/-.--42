<?php

require_once 'Snack.php';

class ChocolateCake extends Snack {
    public function __construct() {
        parent::__construct("Шоколадный торт", "горький шоколад", ["крем", "ягоды"]);
    }
}