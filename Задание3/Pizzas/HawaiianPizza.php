<?php

require_once 'Pizza.php';

class HawaiianPizza extends Pizza {
    public function __construct() {
        parent::__construct("Гавайская", "сливочный", ["ветчина", "ананас", "сыр"]);
    }
}