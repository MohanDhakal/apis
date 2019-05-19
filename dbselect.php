<?php
include_once 'dbconnect.php';
$sql="Select*from food_list";
$r=mysqli_query($conn,$sql);
$arr=array();// initializing an array

//this loops around for all the array stored in $result or $r here. 
while ($row=mysqli_fetch_assoc($r)) {
	$arr[]=$row;
}
header('Content-Type:application/json');
//encoding the incoming data in json format 
echo json_encode($arr);