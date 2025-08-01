<!-- 
Given an unsorted array of integers, sort the array into a wave array. An array arr[0..n-1] is sorted in wave form if:
arr[0] >= arr[1] <= arr[2] >= arr[3] <= arr[4] >= …..

Input:  arr[] = {10, 5, 6, 3, 2, 20, 100, 80}
Output: arr[] = {10, 5, 6, 2, 20, 3, 100, 80} 
Explanation: 
here you can see {10, 5, 6, 2, 20, 3, 100, 80} first element is larger than the second and the same thing is repeated again and again. large element – small element-large element -small element and so on .it can be small element-larger element – small element-large element -small element too. all you need to maintain is the up-down fashion which represents a wave. there can be multiple answers.


Input: arr[] = {20, 10, 8, 6, 4, 2}
Output: arr[] = {20, 8, 10, 4, 6, 2} 
-->

<!-- Step to solve
A idea is to use sorting. First sort the input array, then swap all adjacent elements.

Follow the steps mentioned below to implement the idea:

1.Sort the array.
2.Traverse the array from index 0 to n-1, and increase the value of the index by 2.
3.While traversing the array swap arr[i] with arr[i+1]. 
-->

<?php
  
  function sorts($arr){
    for($i=0; $i<count($arr); $i++){
      for($j=$i+1; $j<count($arr); $j++){
        if($arr[$i] > $arr[$j]){
          $temp = $arr[$i];
          $arr[$i] = $arr[$j];
          $arr[$j] = $temp;
        }
      }
    }

    return $arr;
  }
  
  function SortArray($arr){
    
    $arr = sorts($arr);
    
    for($k=0; $k<count($arr)-1; $k += 2){
      $t = $arr[$k];
      $arr[$k] = $arr[$k+1];
      $arr[$k+1] = $t;
    }
    return $arr;
  }

	$arr = [78, 34, 1, 3, 90, 34, -1, -4, 6, 55, 20, -65];
	
	print_r(SortArray($arr));
?>