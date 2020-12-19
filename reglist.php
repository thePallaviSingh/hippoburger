<?php
include('class.php');
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
  <h2>Reg List</h2>
<?php
 $obj = new afan();
$result = $obj ->getData();

if(mysqli_num_rows($result)>0){
  $sno=0;
  ?>
  <table class="table">
    <thead>
      <tr>
        <th>S.No</th>
        <th>name</th>
        <th>Email</th>
        <th>Password</th>
         <th>Edit</th>
          <th>Delete</th>
      </tr>
    </thead>
    <tbody>
       <?php
     while($row = $result->fetch_assoc()){
      ?>
      <tr>
        <td><?=$sno++; ?></td>
        <td><?=$row['name']; ?></td>
        <td><?=$row['email'];?></td>
        <td><?=$row['password'];?></td>
        <td><a href="regupdate.php?update=<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" style="font-size:20px"></i></a></td>
           <td> <a href="reglist.php?del=<?php echo $row['id'];?>" onclick="return confirm('Are you sure You want to delete this record')"><i class="fa fa-trash-o" style="font-size:20px"></i></a></td>  
      </tr>
      <?php
  }  
}
else{
  echo "Error!!!!!!";
}
?>
  </tbody>
  </table>
</div>
</body>
</html>
<?php
$obj= new afan();
if(isset($_GET['del']))
{
  $obj->del($_GET['del']);
}
?>