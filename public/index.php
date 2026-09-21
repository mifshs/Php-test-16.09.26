<?php

require_once('../vendor/autoload.php');

use App\Student;
use App\Tutor;

$student = new Student("даун", 67, [5,4,4,4,4,4]);
$student->setAge(17);
$student->learn();
$student->getAge();
$student->addMark(5);
$student->addMark(3);
echo $student->addMark(5)->addMark(3)->resultMark();

$tutor = new Tutor('Oleg', 52, [4,5], 'П-45');
$tutor->learn();
echo $tutor-> group;

