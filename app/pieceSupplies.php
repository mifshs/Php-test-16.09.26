<?php

namespace App;

require_once 'Supplies2.php';

class pieceSupplies extends Supplies2 {

    public function countCost($num) {
        if (!is_int($num) || $num <= 0){
            return "error";
        }
        $cost = $num * $this->getPrice();
        return $cost . 'rub';
    }

}