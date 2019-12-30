<?php
include_once("dbconnect.php");
include_once("image_calorie.php");
    //get this from the request
    $food_name=$_GET['food_name'];
    $image_name=$_GET['image_name'];   
    $user_id=$_GET['uid'];
    $fat;
    $carbs;
    $protein;

    //get additional info from table using the provided food name  
    $sql1="SELECT food_id,fat,carbs,protein from food_macro where food_name='$food_name'";
   
    $result = $conn->query($sql1);
    if ($result->num_rows>0) {
        $row = $result->fetch_assoc();
        $fat=$row['fat'];
        $carbs=$row['carbs'];
        $protein=$row['protein'];
        $fid=$row['food_id'];
       
        // inserting the data into the image macro table
        $sql2="INSERT into image_macro(image_name,fat,carbs,protein,uid,fid)
        VALUES('$image_name','$fat','$carbs','$protein','$user_id','$fid')";    
        $r1=mysqli_query($conn,$sql2);
        echo "first sucess";
       
        // get the last id of the table
        $fetch_id="SELECT * FROM image_macro ORDER BY image_id DESC LIMIT 1";
        $res1=mysqli_query($conn,$fetch_id);
        $row = $res1->fetch_assoc();
        $image_id=$row['image_id']; 

        //calculating calories from gram 
        $myarr=calculateCalorie($food_name,$protein,$carbs,$fat);
        
        $fat_calorie=$myarr['fat_calorie'];
        $carbs_calorie=$myarr['carbs_calorie'];
        $protein_calorie=$myarr["protein_calorie"];
        $total_calories=$myarr["total_calorie"];
        
        // inserting datas into calorie table from image_calorie.php
        $sql3="INSERT into image_calorie(image_id,fat_calorie,carb_calorie,protein_calorie,total_calories,user_id) 
        VALUES('$image_id','$fat_calorie','$carbs_calorie','$protein_calorie','$total_calories','$user_id')";    
        
        $r2=mysqli_query($conn,$sql3);
        

    }else echo("null array");

?>