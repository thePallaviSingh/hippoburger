<?php
session_start();
// include_once("connect.php");
include('class.php');
if(isset($_POST['submit'])){
  
  $obj = new afan();
  $a =$obj ->login($_POST['name'],$_POST['password']);
  //var_dump($obj->con());
if(mysqli_num_rows($a)>0){
  $_SESSION['username']=$_POST['name'];
  header('location: index.php');
  //echo "<script>window.location.assign('index.php');</scrip>";
}else{
  echo" <script>alert('invalid login')</script>";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Login form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control"  name="name" >
    </div>
    
     <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" >
    </div>
    <button  type="btn" name="submit" >Submit</button>
  
  </form>
</div>
</body>
</html>
