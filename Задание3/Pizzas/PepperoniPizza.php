<?php

require_once 'Pizza.php';

class PepperoniPizza extends Pizza {
    public function __construct() {
        parent::__construct("Пепперони", "томатный", ["пепперони", "сыр", "перец"]);
    }
}