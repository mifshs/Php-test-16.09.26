<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('../vendor/autoload.php');

use App\Supplies;
use App\Tutor;

$supplies = [
    new Supplies(1, "Автомобиль", '1500000', [3, 2, 2, 2, 5]),
    new Supplies(2, "Автомобиль2", '1800000', [3, 2, 2, 2, 5]),
    new Supplies(3, "Автомобиль3", '1700000', [3, 2, 2, 2, 5]),
    new Supplies(4, "Автомобиль4", '1600000', [3, 2, 2, 2, 5]),
];
foreach ($supplies as $item)
{
    $item->product();
}
// $student ->setAge(17);
// $student -> learn();


// echo $student->addMark(3)->addMark(5)->addMark(3)->resultMark();

// $tutor = new Tutor('Oleg', 52, [4, 5], 'p-45');
// $tutor->learn();
// echo $tutor -> group;