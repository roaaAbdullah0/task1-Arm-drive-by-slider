<?php

mysql_connect("localhost","root","");
mssql_select_db("robot") or die("error");
$slider1=$post ['slider1'];
$slid=$post ['slide'];
$slider2=$post ['slider2'];
$slider3=$post ['slider3'];
$slider4=$post ['slider4'];
$slider5=$post ['slider5'];
$slider6=$post ['slider6'];

$conn = new mysqli('localhost','root','','robot');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}else{
	$stmt= $conn->prepare()
	
}
?>