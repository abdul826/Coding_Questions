<!-- 
Given an array arr. Find the majority element in the array. If no majority exists, return -1. A majority element in an array is an element that appears strictly more than arr.size() / 2 times in the array.

Examples : 

Input : arr[] = {1, 1, 2, 1, 3, 5, 1}
Output : 1
Explanation: Note that 1 appear 4 times which is more than  7 / 2 times 


Input : arr[] = {3, 3, 4, 2, 4, 4, 2, 4}
Output :  -1 
Explanation: There is no element whose frequency is greater than the half of the size of the array size.


Input : arr[] = {3}
Output : 3
Explanation: Appears more than n/2 times 
-->

<?php
    $arr = [1, 1, 2, 1, 3, 5, 1];
    $n = count($arr);
    
    $output = 0;
    for($i=0; $i<$n; $i++){
        $count = 0;
         for($j=0; $j<$n; $j++){
            
            if($arr[$i] == $arr[$j]){
              
                $count++;
            }
         }
         if($count > $n/2){
            $output =  $arr[$i];
         }else{
             $output = -1;
         }
         
    }
    echo $output. " Comes ".$count." times";
     
?>
