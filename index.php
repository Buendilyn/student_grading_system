<?php

use Dimapasok\Gs\Models\StudentModel; 

require 'vendor/autoload.php';

$student = new StudentModel;

$student->id = 2202;
$student->name ="Buen";
$student->course = "BSIT";
$student->year_level = 1;
$student->section ="D";


$student->create();
$listOfStudent = $student->read();
print_r($listOfStudent);