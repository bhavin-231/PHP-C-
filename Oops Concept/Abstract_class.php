<?php                 //............Example : 1 ...............

abstract class AbstractionExample{
    abstract public function FunctionName();     // abstract class ma je method name aapi hoy te method Extend class ma lakhvi j pde  
    // public function simpleMethods(){
    //     echo "simpleMethods in abstacted class";
    // }
}
class ChildClass extends AbstractionExample{
    public function FunctionName(){      // abstract class ma function name che etle sem naam extend class ni method ma aapvu pde
        echo "called";
        // $this->simpleMethods();
    }
    public function OtherName(){
        echo "Other Function";
    }
}

$ChildClass =new ChildClass;
$ChildClass-> FunctionName();
?>

<p>Parent will declared abstracted method, abstracted methods only declared by abstracted class only </p>
<p>Abstracted class cant be initiated/able to object create </p>
<p>Abstaction => hide something</p>

....................Example  : 2 ................
<?php
 
abstract class main
{
  abstract public function close(); // aa name extend class ma use karvanu
}
class child extends main
   {
        public function close()   // abstract class ma je method aapi hoy te method extend class ma use krvi pde
        {
           echo"This is  a close class";
        }
    }
    
$obj=new child;
$obj->close();

?>                                                                             