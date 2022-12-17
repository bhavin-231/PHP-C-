<?php
//use classwithoutobjet as globalclasswithoutobjet
class classwithoutobject{
    public static $abc="Hello World-static variable";
    public static function parentfunction(){
        echo "<br>Parent Function<br>";
        echo "<br>without create object of class we access or call function by using double colon sign and turn that function or variable to static. <br>";
        echo "<br>static data access by scope resolution sign<br>";
    }
}
classwithoutobject::parentfunction();
//in scope resolution datavriable used $
echo classwithoutobject::$abc;

?>


<?php

class = data member & member function only
constructor = constructor is a method which is  invoked by default , when object are created 



?>