<?php


interface TOPSInterface{
    function Project();
    function Assignment();    
    function Attendance();
    //    public function simpleMethods(){
    //     echo "simpleMethods in abstacted class";
    // }
}

class OtherStudentFromBatch{
    public function Something(){
        echo"this is main class";

    }
}
class Student extends OtherStudentFromBatch implements TOPSInterface{
    public function FunctionName(){
        echo "interface method student";
    }
    public function Project(){
        echo "interface method Project";
    }
    public function Assignment(){
        echo "interface method Assignment";
    }
    public function Attendance(){
        echo "interface method Attendance";
    }
}
class Student2 implements TOPSInterface{
    public function FunctionName1(){
        echo "interface method student 2";
    }
    public function Project(){
        echo "interface method Project from student 2";
    }
    public function Assignment(){
        echo "interface method";
    }
    public function Attendance(){
        echo "interface method";
    }
}

$aa = new Student;
$aa->FunctionName();
//$bb = new student2;
$aa->Assignment();
// $aa->Project();
// $aa->Something();
// $aa->Project();

?>