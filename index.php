<<<<<<< HEAD
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
=======
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
>>>>>>> 0f7e4b5b4e493dda6b64e1798f732c4c550f1b72
print_r($listOfStudent);