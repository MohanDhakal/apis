<?php
include 'dbconnect.php';
$food_name=$_GET['food_name'];
$fat=(double)$_GET['fat'];
$carbs=(double)$_GET['carbs'];
$protein=(double)$_GET['protein'];
$unit=$_GET['unit'];
$sql="Insert into food_macro(food_name,fat,carbs,protein,unit)
values('{$food_name}','{$fat}','{$carbs}','{$protein}','{$unit}')";
mysqli_query($conn,$sql);
$array=array("food_name"=>$food_name,"fat"=>$fat,
"carbs"=>$carbs,"protein"=>$protein,"unit"=>$unit);
//this loops around for all the array stored in $result or $r here. 
// while ($row=mysqli_fetch_assoc($r)) {
// 	$arr[]=$row;
// }
header('Content-Type:application/json');
echo json_encode($array);
?>