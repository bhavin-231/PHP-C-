<?php


final class FinalClassExample{
    public function FunctionName()
    {
        echo "Called";
    }
}
  class OtherClass extends FinalClassExample    //Class OtherClass cannot extend in final class FinalClassExample 
{                                            // final class ne extend karva thi child class run thto nthi 
public function red()
    {
       echo "Called";
    }
}

$FinalClassExample = new OtherClass;
$FinalClassExample->red();

?>