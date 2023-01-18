<?php
class model
{
    function construct()
    {
        echo "called model";
        $connection= new  mysqli("localhost", "root", "", "institute");
    
        echo "<pre>";
        print_r($connection);
        echo "</pre>";


    }
}







?>