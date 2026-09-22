<?php

namespace App;

use Override;

require_once 'Supplies2.php';

class weightSupplies extends Supplies2 {
        
    public string $unit;

    public function countCost($num) {
        if ($num <= 0){
            return "error";
    }
        $cost = $num * $this->getPrice();
        return $cost . 'rub';
    }

    public function getUnit() :string {
        return $this->unit;
    }

    public function setUnit(string $unit) :void {
        $this->unit = $unit;     
    }

    #[Override]
    public function getPrice(): string
    {
        return parent::getPrice() . 'P./' . $this->unit;
    }
}