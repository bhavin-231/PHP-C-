<?php


class FinalMethodExample{
    final public function FunctionName() // function ma aagal final lakhvathi aa function name biji vaar extend class ma use thtu nthi 
    {
        echo "Called";
    }
}
class OtherClass extends FinalMethodExample  {   //Class OtherClass cannot extend in  final class FinalMethodExample 
    public function FunctionName() {            //Cannot override final method
        echo "Called Child";                    // final method extend  class ma run na thay jo child class ma naam sem hse to 
    } 
    public function secondMethod()
    {
        echo"Second method example";
    }
}

$FinalClassExample = new OtherClass;
$FinalClassExample->FunctionName();

?> 