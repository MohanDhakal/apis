<?php
include 'dbconnect.php';
$id=$_POST['id'];
$sql="Select id from food_list";
$result=mysqli_query($conn,$sql);
$arr=array();
//this loops around for all the array stored in $result . 
while ($row=mysqli_fetch_assoc($result)) {
   $arr= $row;
}

foreach ($arr as $v) {
if($v==$id){
    //data deletion query
    $mysql = "DELETE FROM food_list WHERE id=$v";
    //executes the deletion from the databse
    $result=mysqli_query($conn,$mysql);  

    //no paranthesis in echo only double invited commas
   if ($result==1){
    echo "deletion sucessfull";
   }   
}
}
?>