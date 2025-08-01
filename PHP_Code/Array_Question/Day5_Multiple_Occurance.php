<!-- 
Given an array of n integers. The task is to find all elements that have more than one occurrences. The output should only one occurrence of a number irrespective of number of occurrences in the input array.

Examples: 

Input: {2, 10, 10, 100, 2, 10, 11, 2, 11, 2}
Output: {2, 10, 11}


Input: {5, 40, 1, 40, 100000, 1, 5, 1}
Output: {5, 40, 1} 
-->

<!-- 
Steps 
1.Use for loops 2 times because for each element of arry we compare all the ements
2.Compare the Individual element of array with every element of the array except the own index
3.If comparision match then push that element in new array
-->

<?php
$arr = [5, 40, 1, 40, 100000, 1, 5, 1];
$res = [];
$n = count($arr);

for($i = 0; $i<$n; $i++){
    for($j=$i+1; $j<$n;$j++){
        if($arr[$i] === $arr[$j]){
            if(!in_array($arr[$i],$res)){
                $res[] = $arr[$i];
            }
        }
    }
}
echo "<pre>";
print_r($res);
?>