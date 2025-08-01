<!-- 
 
Check If a Value is Present in an Array in Java
Last Updated : 15 Apr, 2025
Given an array of Integers and a key element. Our task is to check whether the key element is present in the array. If the element (key) is present in the array, return true; otherwise, return false.

Example: 

Input: arr[] = [3, 5, 7, 2, 6, 10], key = 7
Output: Is 7 present in the array: true

Input: arr[] = [-1, 1, 5, 8], key = -2
Output: Is -2 present in the array: false 

-->

<?php
$arr = [3, 5, 7, 2, 6, 10];
$key = 7;

foreach($arr as $a){
    if($a === $key){
        echo "Value is present in array ";
    }else{
       echo "Value is not present in array "; 
    }
}
?>