<?php 
include_once('header.php');

//echo "<pre>";
  
 // print_r($_POST);
 if(isset($_POST["login"]))
 {
    if($_POST['username']=="tops" && $_POST['password']=="123")

    {
        echo"<script> alert('valid')</script>";      // this is not runn
    
    }
    else{
        echo"<script> alert('invalid')</script>";      // this is not runn
    }
 }


//echo "</pre>";
?>
<div class="container">
    <div class="raw">
        <div class="col-md-4 offset-md-4 mt-5">
            
        <div class="card border-danger mb-3">
  <div class="card-header">Login</div>
     <div class="card-body">

        <form method="post"> 

          <div class="raw mt-2">
            <div class="col">
                
            <input type="text" class="form-control" placeholder="Enter your name here" name="username" id="username">

            </div>
          </div>
          <div class="raw mt-2">
            <div class="col">
                <input type="text" class="form-control" placeholder="password" name="password" id="password">
            </div>
          </div>
                <div class="raw mt-3">
                    <div class="class">
                        <input type="submit" class= "btn btn-primary" name="login" value="login">
                    </div>
                </div>
</form>
                   </div>
            </div>
        </div>
    </div>
</div>
