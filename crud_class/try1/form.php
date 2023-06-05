<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
  <div class="row justify-content-center">
    <div class="col-md-4 ">
<form action="insert.php" method="post" enctype="multipart/form-data">
  <div class="form-group" >
    <label for="text">Student_name</label>
    <input type="text" name="student_name" class="form-control"   placeholder="Enter name">
    </div>
  <div class="form-group  ">
    <label for="number">Age</label>
    <input type="number" name="age" class="form-control" placeholder="Age">
  </div>
  <div class="form-group">
    <label for="text">City</label>
    <input type="text" name="city" class="form-control"   placeholder="Enter city">
    </div>
    
  
  <button type="submit" value="submit" class="btn btn-primary">submit</button>
</form>
</div>
</div>
</body>
</html>