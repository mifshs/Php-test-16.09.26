<?php

require_once('../vendor/autoload.php');

use App\Student;

$student = new Student();
echo $student->age;