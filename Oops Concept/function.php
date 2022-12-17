<?php

 function sum()     // without argument (parameter) function
 {
    $a=2;
    $b=3;
    
    return $a+$b ;
    
 }

echo sum();

?>



<?php

function bhavin($a,$b)  // with  argument (parameter) function
{
     echo "$a $b";
}


 bhavin(3,4)


 
?>


<?php

class maths{
    function addition($a,$b){
        // $a = 50;
        // $b = 80;
        return $a +$b;
    }
}

$obj=new maths;
echo $obj->addition(50,5);

?>