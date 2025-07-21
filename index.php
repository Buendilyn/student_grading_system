<?php

use Dimapasok\Gs\Models\StudentModel; 

require 'vendor/autoload.php';

$student = new StudentModel;
$listOfStudent = $student->read();
print_r($listOfStudent);