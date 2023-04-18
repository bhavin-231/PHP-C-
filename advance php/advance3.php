<?php
class MyClass {
    const count = 'A count value';
}

$classname = 'MyClass';
echo $classname::count;

echo MyClass::count;
?>