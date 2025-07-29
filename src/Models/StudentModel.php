<?php

namespace Dimapasok\Gs\Models;
use Dimapasok\Gs\Core\Crud;
use Dimapasok\Gs\Core\Database;


class StudentModel extends Database implements Crud{
    public int $id;
    public string $name;
    public string $course;
    public int $year_level;
    public string $section;
    
    public function __construct(){
        parent:: __construct();
        $this->id = 0;
        $this->name ="";
        $this->course = "";
        $this->year_level =0;
        $this->section ="";
    }



public function create (){
    //create data
    $query =$this->conn->prepare ("INSERT INTO  `student`(`Id`, `Name`, `Course`, `Year_level`, `Section`) VALUES ('$this->id','$this->name','$this->course','$this->year_level','$this->section')");
    if($query ->execute()){
        echo "student inserted";
    }

   
}
public function read (){
    try {
        $sql = "SELECT * FROM student";
        $results = $this->conn->query($sql);
        return $results->fetch_all(MYSQLI_ASSOC);
        
    }catch (\throwable $th){
        echo $th->getMessage();
        //throw $th;
    }

}

public function update ($id){
    $this->id=$id;
    $sql = "UPDATE `students` SET Name = '$this->name', Course = '$this->course',
    year_level =$this->year_level, section ='$this->section' WHERE ID =$this->id";
if ($this->conn->query($sql)) {
    echo "Student updated";
}else {
    echo "Update falied:". $this->conn->error;
}

}
public function delete ($id){
    $this->id=$id;
    $sql= "DELETE FROM `students` WHERE ID = $this->id";
    if ($this->conn->query($sql)) {
        echo "Student Deleted Successfuly!";
    }else{
        echo "Delete Student Failed!" , $this->conn->error;
    }

}

}