<?php
include_once('dbconnect.php');
$user_name=$_GET['UserName'];
$uid=$_GET['uid'];
//profileuri in string
$profileuri=$_GET['profile_uri'];

$insert_user_sql_query="INSERT into user(UserName,uid,profile_uri)
VALUES('$user_name','$uid','$profileuri')";
$r1=mysqli_query($conn,$insert_user_sql_query);
if ($r1!=null) {
    # code...
    echo"user inserted";
}
?>