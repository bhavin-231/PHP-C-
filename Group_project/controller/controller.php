<?php

class controller{
    function __construct()
    {
    $BaseURL = "http://localhost/Group_project/";  //path fix karva 

    if(isset($_SERVER['PATH_INFO'])){         // without index file run karva
        switch ( $_SERVER ['PATH_INFO']) {

            case '/home':
                include_once("view/header.php");
                include_once("view/mainpage.php");
                include_once("view/footer.php");
                break;

                case '/contact':
                    include_once("view/header.php");
                    include_once("view/contact.php");
                    include_once("view/footer.php");
                    break;
                case '/material':
                    include_once("view/header.php");
                    include_once("view/material.php");
                    include_once("view/footer.php");
                    break;
                case '/Current_Affairs':
                    include_once("view/header.php");
                    include_once("view/Current_Affairs.php");
                    include_once("view/footer.php");
                    break;

                case '/about':
                        include_once("view/header.php");
                        include_once("view/about.php");
                        include_once("view/footer.php");
                        break;
          } 
       }  
         else {
     header("location:home");       // upar na option mathi na hoy to direct home khule etla mate
     }
  }
}

$obj =new controller;
// include_once("view/header.php");
// include_once("view/mainpage.php");
// include_once("view/footer.php");


?>