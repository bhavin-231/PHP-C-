<?php
class apple
{
     public function __get($d)         // This is a get method
    {                                          // only  variable mate 
        echo $d;
    }
}

$obj=new apple;
echo $obj->banana;

echo "<br>";

echo $obj->mango;
echo "<br>";
?>

<?php
class pink
{
    public function __set($var_name,$var_value)     // This is a get method
    {                                                      // variable & eni value mate 
        echo $var_name  ,$var_value;
    }
}

$obj=new pink;
 $obj->var="5";     

echo"<br>";
?>

<?php

class red
{
    public function __call($function_name,$argu)          // This is a call method
    {
        echo "$function_name <br>" .$argu[0];
    }
}
$obj= new red;
echo $obj->select ("user ");               // Aama select function nu naam che kaus ma che e argument che

?>
