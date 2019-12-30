<?php

include_once('dbconnect.php');
$userid=$_GET['uid'];

$select_query="SELECT preference,feet,inch,weight from user_preference where uid='$userid'";
$res1=mysqli_query($conn,$select_query);
$row = $res1->fetch_assoc();
echo(json_encode($row));

?>