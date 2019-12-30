<?php
include_once("dbconnect.php");
$uid=$_GET['uid'];
$feet=$_GET['feet'];   
$inch=$_GET['in'];
$weight=$_GET['weight'];
$preference= $_GET['preference'];

$sql_insert_query="INSERT into user_preference (uid,feet,inch,weight,preference)
VALUES('$uid','$feet','$inch','$weight','$preference')";
$r1=mysqli_query($conn,$sql_insert_query);
if ($r1!=null) {
    # code...
    echo $r1;
}
?>