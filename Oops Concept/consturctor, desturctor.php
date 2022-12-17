<?php                                       // This is a construct method 

class A
{
    public function __construct()          
    {
        echo "This is a construct method";
    }
}
 $obj = new A;
 
?>

<?php                                      // This is a destruct method
class B
{
    public function __destruct()         
    {
        echo"This is a Destruct method";
    }
}
 $obj= new B;
 

?>