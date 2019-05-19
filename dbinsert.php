<?php
include 'dbconnect.php';
$price= $_POST['price'];
$quantity=$_POST['qty'];
$food_name=$_POST['name'];
$remarks=$_POST['remarks'];
$unit=$_POST['unit'];
$sql="Insert into food_list(name,qty,unit,price,remarks)values('{$food_name}','{$quantity}','{$unit}','{$price}','{$remarks}')";

$result=mysqli_query($conn,$sql);
header('Content-Type:application/json');
echo json_encode($result);
?>