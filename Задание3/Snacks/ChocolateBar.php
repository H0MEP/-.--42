<?php

require_once 'Snack.php';

class ChocolateBar extends Snack {
    public function __construct() {
        parent::__construct("Шоколадный батончик", "молочный шоколад", ["орехи", "карамель"]);
    }
}