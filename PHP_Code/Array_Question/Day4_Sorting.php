<!-- 
Sorting an array means arranging the elements of the array in a certain order. Generally sorting in an array is done to arrange the elements in increasing or decreasing order.

Problem statement: Given an array of integers arr, the task is to sort the array in ascending order and return it, without using any built-in functions.

Input: arr = [5, 2, 4, 3, 1]
Output: [1, 2, 3, 4, 5]


Input: arr = [1, 2, 2, 1, 3, 5, 4]
Output: [1, 1, 2, 2, 3, 4, 5]
-->

<?php
  
  function SortArray($arr){
    
    
    for($i=0; $i<count($arr); $i++){
      for($j=$i+1; $j<count($arr); $j++){
        $temp = 0;
        if($arr[$i] > $arr[$j]){
          $temp = $arr[$i];
          $arr[$i] = $arr[$j];
          $arr[$j] = $temp;
        }
      }
    }
    return $arr;
  }

	$arr = [78, 34, 1, 3, 90, 34, -1, -4, 6, 55, 20, -65];
	
	print_r(SortArray($arr));
?>