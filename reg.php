<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone_number"];
$pass=$_POST["pass1"];
mysql_connect("localhost","root","")or die("connection error");
mysql_select_db("reg")or die("database error");
$query="select * from reg where email='$email' and pwrd='$pass'";
$result=mysql_query($query);
$count=mysql_num_rows($result);
if($count>0 && strlen($phone) < 10 || strlen($phone) > 14)
{
	header('location:user_registration.php');
 }
else
{
	$query="insert into reg(name,email,phone_no,pwrd) values('$name','$email','$phone','$pass')";
	mysql_query($query);
	header('location:list.php');
}
?>