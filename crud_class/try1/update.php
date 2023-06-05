<?php

include_once("database.php");

$obj= new database;
$obj -> insert("students","student_name=>spider","age"=>"20", "city=>surat");

?>