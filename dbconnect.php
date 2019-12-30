<?php
// $conn=mysqli_connect('localhost','root','','swasthya_nutrtion_info');
$conn=mysqli_connect('localhost','swasthya','.q50.Q1i0wzFAW','swasthya_nutrtion_info');

if(!$conn){
	echo "Database not connected";
}
else
echo "Connection Established";
?>
