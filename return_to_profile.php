<?php
include_once('dbconnect.php');
    $user_id=$_GET['uid'];
    $sql1="SELECT image_id,fat_calorie,carb_calorie,protein_calorie,total_calories from image_calorie where user_id='$user_id'";

    $result = $conn->query($sql1);
    if ($result->num_rows>0) {
        $row = $result->fetch_assoc();
        echo json_encode($row);
    }
?>