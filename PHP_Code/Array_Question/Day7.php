<!-- 
Given a sorted array arr[] and an integer target, the task is to find the number of occurrences of target in given array.

Examples:

Input: arr[] = [1, 1, 2, 2, 2, 2, 3], target = 2
Output: 4
Explanation: 2 occurs 4 times in the given array.


Input: arr[] = [1, 1, 2, 2, 2, 2, 3], target = 4
Output: 0
Explanation: 4 is not present in the given array. 
-->

<?php
$arr = [4,4,3,2,2,1,2,2];
$target = 2;
$count = 0;

    for($i=0; $i<count($arr); $i++){
       if($arr[$i] == $t){
           $count++;
       }
    }

echo $count;

?>
