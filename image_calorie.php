<?php 

declare(strict_types=1);

//constants declaration 
define("f_momo",3);
define("f_chowmin",1.3);
define("f_fries",12.3);
define("c_momo",14.3);
define("c_chowmin",1.63);
define("c_fries",12.3);
define("p_momo",11.3);
define("p_chowmin",21.3);
define("p_fries",31.3);

//variable declaration
$protein_calorie;
$carbs_calorie;
$fat_calorie;
$total_calories;
$arr;

//function for calculating calories for given food using it's macros
function calculateCalorie($food_name,$protein,$carbs,$fat){
    if ($food_name=="momo1") {
        $protein_calorie=p_momo;
        $carbs_calorie=c_momo;
        $fat_calorie=f_momo;
        $total_calories=$protein_calorie+$carbs_calorie+$fat_calorie;
        $arr=array('protein_calorie'=>$protein_calorie,'carbs_calorie'=>$carbs_calorie,'fat_calorie'=>$fat_calorie,'total_calorie'=>$total_calories);
        return $arr;
    }else if($food_name=="chowmin"){
        $protein_calorie=p_chowmin;
        $carbs_calorie=c_chowmin;
        $fat_calorie=f_chowmin;
        $total_calories=$protein_calorie+$carbs_calorie+$fat_calorie;
        $arr=array('protein_calorie'=>$protein_calorie,'carbs_calorie'=>$carbs_calorie,'fat_calorie'=>$fat_calorie,'total_calorie'=>$total_calories);
        return $arr;

    }else if($food_name=="fries"){
        $protein_calorie=p_fries;
        $carbs_calorie=c_fries;
        $fat_calorie=f_fries;
        $total_calories=$protein_calorie+$carbs_calorie+$fat_calorie;
        $arr=array('protein_calorie'=>$protein_calorie,'carbs_calorie'=>$carbs_calorie,'fat_calorie'=>$fat_calorie,'total_calorie'=>$total_calories);
        return $arr;
    }else if ($food_name=="momo2"){
        $protein_calorie=p_momo*2;
        $carbs_calorie=c_momo*2;
        $fat_calorie=f_momo*2;
        $total_calories=$protein_calorie+$carbs_calorie+$fat_calorie;
        $arr=array('protein_calorie'=>$protein_calorie,'carbs_calorie'=>$carbs_calorie,'fat_calorie'=>$fat_calorie,'total_calorie'=>$total_calories);
        return $arr;
    }
}
?>