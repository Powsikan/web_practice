<?php

$db=new mysqli("localhost","root","","tourist");
if(isset($_REQUEST['submit'])){
$name=$_REQUEST['name'];
$email=$_REQUEST['mail'];
$nationality=$_REQUEST['nationality'];
$interest=implode(",",$_REQUEST['interest']);
$message=$_REQUEST['message'];


$sql="insert into details values('$name','$email','$nationality','$interest','$message')";
	echo "message send";
$db->query($sql);

}
?>
