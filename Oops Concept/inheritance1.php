<?php

class A
{

    public function happy()
    {
        echo "this is  A class ";
    }
}

$obj = new A();
$obj->happy();

?>

<!--                                   *******************                  -->

<?php

class lion
{
    public function sinh()
    {
        echo "This is a lion class ";
    }

    public function tiger()
    {
        echo"This is a tiger function ";
    }
}

$obj= new lion();
$obj->sinh();
$obj->tiger();

?>
<!--                                   *******************                  -->
<?php

class bhavin
{
    public function very($a,$b)
    {
        echo"$a $b this is a bhavin class ";
    }

}
  $obj=new bhavin();
  $obj->very(2,3);

?>
<!--                                   *******************                  -->

<?php

class B
{
    public function abc ()
    {
        echo"This is ABC";
    }
}

class C extends B
{
    public function aaa ()
    {
        echo"This is aaa";
    }
}

$obj=new C();
$obj->abc(); 
$obj->aaa();
?>