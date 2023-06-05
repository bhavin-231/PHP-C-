<?php
include_once("database.php");

$obj = new database () ; 
// $obj-> insert ('students',['student_name'=>'jay','age'=>'12','city'=>'amd']);
$obj-> insert ('students',$_POST);
?>

<script>
     alert("Data inserted ");
     window.location.href="form.php";
</script>
