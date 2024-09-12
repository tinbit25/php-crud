<?php
include "db_conn.php";
if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
   
    $sql="INSERT INTO `fistcrud`(`id`, `first_name`, `last_name`, `email`, `gender`) 
    VALUES ('$id','$first_name','$last_name','$email','$gender')";
    $result=mysqli_query($conn,$sql);
    if($result)
    {
     header("location:index.php?msg=new record created successfully");}
     else{
        echo "Failed:" . mysqli_error($conn);
     
    }
}



?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php crud application</title>
  </head>
  <body>
  <nav class="navbar navbar-light justify-content-center  fs-3 mb-5" style = "background-color:aquamarine;">

Registration
</nav>
<div class="container">
<div class="text-center mb-4">Add new user

<p class="text-muted">complete the form to add user</p></div>
<div class="container d-flex justify-content-center">
    <form method="post" action="" style="width: 500vw; min-width:300px;">
<div class="row">
<div class="col">
    <label class="form-lable">First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="first name">

</div>
<div class="col">
    <label class="form-lable">Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="last name">
</div>
</div>
<div class="mb-3">
    <label class="form-lable">Email</label>
    <input type="email" class="form-control" name="email" placeholder="Email">
</div>
<div class="form-group mb-3">
    <label>Gender :</label>   &nbsp;  &nbsp;  &nbsp;
    <input type="radio" class="form-check-input" name="gender" 
    id="male" value="male">
    <label for="male" class="form-input-label">   Male</label>
    &nbsp;  &nbsp;  &nbsp;
    <input type="radio" class="form-check-input" name="gender"
     id="female" value="female">
    <label for="female" class="form-input-label">Female</label>
</div>
<div>
    <button type="submit" class="btn btn-success" name="submit">save</button>
<a href="index.php" class="btn btn-danger">cancel</a>
</div>
</form>
</div>
</div>
   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" 
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
    crossorigin="anonymous"></script>
  </body>
  </body>
</html>