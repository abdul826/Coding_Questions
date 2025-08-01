<!-- 
Given an integer array arr[], print all distinct elements from this array. The given array may contain duplicates and the output should contain every element only once.

Examples: 

Input: arr[] = {12, 10, 9, 45, 2, 10, 10, 45}
Output: {12, 10, 9, 45, 2}


Input: arr[] = {1, 2, 3, 4, 5}
Output: {1, 2, 3, 4, 5}


Input: arr[] = {1, 1, 1, 1, 1}
Output: {1}

 
->

<?php
$arr = [12, 10, 9, 45, 2, 10, 10, 45];
$length = count($arr);
$res = [];

for($i=0; $i<$length; $i++){
    $flag = false;
    for($j=0; $j<$i; $j++){
        if($arr[$i] === $arr[$j]){
            $flag = true;
            break;
        }
    }
    if(!$flag){
        $res[] = $arr[$i];
    }
}
echo "<pre>";
print_r($res);
?>