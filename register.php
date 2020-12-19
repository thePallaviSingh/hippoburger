<?php
include_once("connect.php");
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
  <h2>Registration form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control"  name="name" id="usr">
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" name="email" class="form-control">
    </div>
     <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" id="pwd">
    </div>
   <!--  <button  name="submit" >Submit</button> -->
   <input type="submit" name="submit">
  </form>
</div>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
  if(($_POST['name'] == "" ) || ($_POST['email'] == "" ) || ($_POST['password'] == "" ))
  {
    ?><script>
  swal(" Fill all the fields!!!");
    </script>
    <?php
 
    // echo "fill all the fields";
  }else{
$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];

$sql="insert into reg (name,email,password) values('$name','$email','$password')";

if($con->query($sql)==True)
{
  ?><script>
  swal(" record added successfully!!!");
    </script>
    <?php
  //echo "record added successfully";
}else{
  ?><script>
  swal(" unable to insert data!!!");
    </script>
    <?php
  // echo "unable to insert data";
}
  }
}
?>
 
