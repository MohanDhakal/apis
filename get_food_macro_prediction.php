<?php
include 'dbconnect.php';
$food_name=$_GET['food_name'];
$sql1="SELECT food_id,fat,carbs,protein from food_macro where food_name='$food_name'";   
$result=mysqli_query($conn,$sql1);
$row = $result->fetch_assoc();
json_encode($row);
?>