<?php
include_once("connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<form class="form-horizontal" action="" method="POST">
<fieldset>

<!-- Form Name -->
<legend>PRODUCTS</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="pid" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="product_name" name="name" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
  <input id="available_quantity" name="quantity" placeholder="AVAILABLE QUANTITY" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">PRODUCT Price</label>  
  <div class="col-md-4">
  <input id="product_price" name="price" placeholder="PRODUCT Price" class="form-control input-md" required="" type="text">
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button  name="submit" class="btn btn-primary">Button</button>
  </div>
  </div>

</fieldset>
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
$pid=$_POST['pid'];
$pname=$_POST['name'];
$pprice=$_POST['price'];
$pquantity=$_POST['quantity'];
$sql="insert into add_product (p_id,p_name,p_price,p_quantity) values ('$pid','$pname','$pprice','$pquantity')";

if($con->query($sql)==True)
{
  ?><script>
  swal(" product added successfully!!!");
    </script>
    <?php
  //echo "record added successfully";
}else{
  ?><script>
  swal(" unable to insert product field!!!");
    </script>
    <?php
  // echo "unable to insert data";
}
  }

 ?>
