<?php
include('class.php');
$obj = new afan();
if(isset($_GET['update'])){
  $result=$obj->getsingledata($_GET['update']);

  $row=mysqli_fetch_array($result);
}

if(isset($_POST['submit']))
{
 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 
 $id=$_GET['update'];
 $result=$obj->update($id,$name,$email,$password);


 if($result) 
 {
  ?>
  <script>
  alert('Record updated...');
        window.location='reglist.php'
        </script>
  <?php
 }
 else
 {
  ?>
  <script>
  alert('error updating record...');
        window.location='reglist.php'
        </script>
  <?php
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
  <h2>updateuser form</h2>
  <form action="" method="POST">
    <div class="form-group">
      <label for="usr">Name:</label>
      <input type="text" class="form-control" name="name" value="<?php echo $row['name'];?>">
    </div>
    <div class="form-group">
      <label for="Email">Email:</label>
      <input type="email" name="email"  value="<?php echo $row['email'];?>" class="form-control">
    </div>
     <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" name="password" value="<?php echo $row['password'];?>">
    </div>
   <input type="submit" name="submit">
  </form>
</div>
</body>
</html>

