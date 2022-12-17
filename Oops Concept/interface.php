<?php


interface TOPSInterface{
    function Project();    //interface ma je mrthod aapi hoy te method extends class ma use krvi pde   
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
    public function Project(){                // 1.Project - method, - interface ni method extend class ma use kri
        echo "interface method Project"; 
    }
    public function Assignment(){             // 2.Assignment -method - interface ni method extend class ma use kri
        echo "interface method Assignment";
    }
    public function Attendance(){             // 3.Attendance -method - interface ni method extend class ma use kri
        echo "interface method Attendance";
    }
}
class Student2 implements TOPSInterface    // jo bija class ma interface method use krvi hoy to implements kri -
{                                                                                // -implement  nu naam lakhvu
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
$aa->Project    ();
$aa->Assignment();
$bb = new student2;
$bb->Project();
// $aa->Something();
?>