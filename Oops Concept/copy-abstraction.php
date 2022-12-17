<?php


abstract class AbstractionExample{
    abstract public function FunctionName();
    public function simpleMethods(){
        echo "simpleMethods in abstacted class";
    }
}
class ChildClass extends AbstractionExample{
    public function FunctionName(){
        echo "called";
        $this->simpleMethods();
    }
    public function OtherName(){
        echo "Other Function";
    }
}


$ChildClass =new ChildClass;

?>
<p>Abstaction => hide something</p>
<p>Parent will declared abstracted method, abstracted methods only declared by abstracted class only </p>
<p>Abstracted class cant be initiated/able to object create </p>