<?php
class main
{
    public static function ram()  //   static method 
    {
        echo "This is a static method";  
    }
}

class child extends main
{
    public static function ram()   // static method
    {
        echo "This is a child static method";  
    }
}

main::ram();
child::ram();
?>