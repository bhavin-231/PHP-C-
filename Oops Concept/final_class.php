<?php


final class FinalClassExample{
    public function FunctionName()
    {
        echo "Called";
    }
}
  class OtherClass extends FinalClassExample    //Class OtherClass cannot extend in final class FinalClassExample 
{                                            // final class ne extend karva thi child class run thto nthi 
public function red()                        //class aagal final lakhva thi e class Extend thto thi & extend kriye to run pan thto nathi
    {
       echo "Other class Called";
    }
}

$FinalClassExample = new OtherClass;
$FinalClassExample->red();

?>