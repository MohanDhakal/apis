<?php
$conn=mysqli_connect('localhost','root','');
if(!$conn){
	echo "Database not connected";
}
else
echo "Connection Established";
$dbsel=mysqli_select_db($conn,'fitnepal');
?>