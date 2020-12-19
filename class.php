<?php
class afan{
	function con(){
		$db_host="localhost";
		$db_user="root";
		$db_password="";
		$db_name="test";

$con= mysqli_connect($db_host,$db_user,$db_password,$db_name);
		//$con = mysqli_connect("localhost","root","","test");
		return $con;
	}
 function login($username,$password)
 {
 	$password=md5($password);
 	$sql ="select username,password from user_login where username='$username' and password='$password'";
 	$query=mysqli_query($this->con(),$sql)or die("error while login");
 	return $query;
 }

 function getData(){
 	$sql="select * from reg";
	$result = mysqli_query($this->con(),$sql);
	return $result;
 }
 function del($id)
 {
 	$sql="delete from reg where id='$id'";
 	$result = mysqli_query($this ->con(),$sql);
 	return $result;

 }
function getsingledata($id){
	$sql="select * from reg where id='$id'";
	$result=mysqli_query($this->con(),$sql);
	return 	$result;

}
function update($id,$name,$email,$password){
	// $name=$_POST['name'];
	// $email=$_POST['email'];
	// $password=$_POST['password'];
	$sql="UPDATE reg SET name='$name',email='$email',password='$password' WHERE id='$id'";
	$result=mysqli_query($this->con(),$sql);
	return $result;
}
function productgetdata(){
	$sql="select * from add_product";
	$result=mysqli_query($this->con(),$sql);
	return $result;
}
function totalgetdata($id,$p_id,$p_name,$p_price,$p_quantity){
	$sql="select * from add_product where id='$id'";
	$result=mysqli_query($this->con(),$sql);
	return $result;
}
}
?>