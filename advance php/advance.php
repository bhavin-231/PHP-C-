<?php
trait Trait1
{
    public function hello() 
    {
        print "hello ";
    }
}

trait Trait2
{
    public function world() 
    {
        print "world";
    }
}

class MyClass
{
    use Trait1;
    use Trait2;
}

$myObj = new MyClass();
$myObj->hello();
$myObj->world();
?>

<?php


?>