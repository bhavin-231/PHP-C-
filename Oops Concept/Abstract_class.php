<?php
 
abstract class main
{
  abstract public function close();
           function FunctionName()
  {
    echo "This is a function name";
  }
   
    class child extends main
    {
        public function close()
        {
            echo"This is  a close class";
            $this->FunctionName();
        }
    }
    
}
$obj=new child;
$obj->close();

?>