<?php
include_once("connect.php");
include("class.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>

</style>
</head>
<body>
<form class="form-horizontal" action="" method="POST">
<fieldset>
  <legend>PRODUCTS</legend>
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT LIST</label>
  <div class="col-md-4">
    <select id="product_name" name="producname" class="form-control">
      <option value="">--product_name--</option>
      <?php
$sql="select id, p_id, p_name,p_quantity,p_price from add_product";
$query=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($query))
{
   $sno=0;
  ?>
  <option value="<?=$row['id'];?>"><?=$row['p_name'];?></option>
  <?php
}
      ?>
    </select>
  </div>
</div> 
<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Product</label>
  <div class="col-md-4" ng-app="myApp" ng-controller="personCtrl">
   
<!-- <input id="toggleVisibilityButton" type="button" value="Button1"/> -->
<input id="toggleVisibilityButton" type="button" value="AddProduct"/>
  </div>
  </div>

</fieldset>
</form> 
<table  id="displaytable"  width="100%" cellpadding="1" cellspacing="0" >
    <thead>
      <tr>
         <th>S.No</th>
        <th>PRODUCT</th>
        <th>PRICE</th>
        <th>QUANTITY</th>
        <th>TOTAL</th>
      </tr>
    </thead>
    <tbody>
       
      <tr>
        <td><input type="text" calss="form-control" id="p_id" value=""></td>
        <td> <input type="text" calss="form-control" id="p_name" name="p_name" value="" > </td> 
          <td><input type="text" calss="form-control" id="p_price" name="p_price"  value=""></td>
           <td><input type="text" calss="form-control" id="p_quantity" name="p_quantity" value="" ></td>
           <td><input type="text" readonly="" calss="form-control" id="totalamt" name="total_amount" value="" ></td>
      </tr> 
    </tbody>
  </table>  
<script>
  document.getElementById("toggleVisibilityButton").addEventListener("click", function(button) {    
   if (document.getElementById("displaytable").style.display === "none")         document.getElementById("displaytable").style.display = "block";
   else document.getElementById("displaytable").style.display = "none";
}); 
  
  $(function() {
    $("#product_name").change(function() {
      var id =$('select[name=producname]').val();
      //var dataString= 'productid='+ id;
        $.ajax({    //create an ajax request to display.php
        type: "GET",
        url: "displayproduct.php",             
        dataType: "json",
        data: {
           'productid': id
        },
        cache: false,               
        success: function(response){                    
            //$("#responsecontainer").html(response); 
            console.log(response); 
            $('#p_id').val(response.p_id);
            $("#p_name").val(response.p_name);
            $("#p_price").val(response.p_price);
        }
    });
    });
    $('#p_quantity').keyup(function() {  
      var price = $('#p_price').val();
       var qty = $('#p_quantity').val();
       var total = price*qty;
       $('#totalamt').val(total);
    });

  });
 
</script>
</body>
</html>


