<?php

class PizzaStore {
    public function orderPizza($type) {
        $pizza = $this->createPizza($type);

        if ($pizza) {
            $pizza->prepare();
            $pizza->cut();
        } else {
            echo "Такой пиццы нет в меню.\n";
        }
    }

    protected function createPizza($type) {
        switch ($type) {
            case 'pepperoni':
                return new Pizza("Пепперони", "томатный", ["пепперони", "сыр", "перец"]);
            case 'margherita':
                return new Pizza("Маргарита", "томатный", ["сыр", "базилик", "помидоры"]);
            case 'hawaiian':
                return new Pizza("Гавайская", "сливочный", ["ветчина", "ананас", "сыр"]);
            default:
                return null;
        }
    }
}