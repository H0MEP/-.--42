<?php

require_once 'Pizza.php';

class MargheritaPizza extends Pizza {
    public function __construct() {
        parent::__construct("Маргарита", "томатный", ["сыр", "базилик", "помидоры"]);
    }
}