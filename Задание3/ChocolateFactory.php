<?php

class ChocolateFactory {
    public function orderSnack($type) {
        $snack = $this->createSnack($type);

        if ($snack) {
            $snack->prepare();
            $snack->cut();
        } else {
            echo "Такого snack-а нет в меню.\n";
        }
    }

    protected function createSnack($type) {
        switch ($type) {
            case 'chocolateBar':
                return new Snack("Шоколадный батончик", "молочный шоколад", ["орехи", "карамель"]);
            case 'chocolateCake':
                return new Snack("Шоколадный торт", "горький шоколад", ["крем", "ягоды"]);
            case 'chocolateCandy':
                return new Snack("Шоколадная конфета", "белый шоколад", ["нуга", "кокос"]);
            default:
                return null;
        }
    }
}