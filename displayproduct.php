<?php
include_once("connect.php");
if($_REQUEST['productid']) {
$sql = "SELECT * FROM add_product WHERE id='".$_REQUEST['productid']."'";
$resultset = mysqli_query($con, $sql) or die("database error:". mysqli_error($conn));
$data = array();
while( $rows = mysqli_fetch_assoc($resultset) ) {
$data = $rows;
}
echo json_encode($data);
} else {
echo 0;
}
?>