<?php

class A
{
    public function good()
    {
        echo"this is a good object example <br>";
    }

}

$obj= new A;
$obj->good ();

?>

<?php
    class red{ 
        public function __construct() {
            echo"this is construct run<br>";
        }
     public function orange()
     {
        echo"this is a orange<br>";
     }
    }

     class cat extends red
     {
     public function dev()
     {
         echo"this is a dev object example<br>";
     }
    }

 $obj= new cat;
 $obj->orange();
 $obj->dev();
?>
