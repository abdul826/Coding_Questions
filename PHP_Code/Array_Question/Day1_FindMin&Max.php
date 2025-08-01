<!-- 
 Given an array of size N. The task is to find the maximum and the minimum element of the array using the minimum number of comparisons.

Examples:

Input: arr[] = {3, 5, 4, 1, 9}
Output: Minimum element is: 1
        Maximum element is: 9


Input: arr[] = {22, 14, 8, 17, 35, 3}
Output:  Minimum element is: 3
         Maximum element is: 35 
-->

<!-- First Approach -->
<?php

function maxArray($arr){
    $max = $arr[0];

foreach($arr as $ar){
    if($ar > $max){
        $max = $ar;
    }
}
return $max;
}

$arr = [3, 5, 4, 1, 9];
echo "Max Array in the Array list is : ";
print_r(maxArray($arr));

function minArray($minarr){
    $min = $minarr[0];

    foreach($minarr as $mina){
        if($min > $mina){
            $min = $mina;
        }
    }
    return $min;
}

$minarr = [22, 14, 8, 17, 35, 3];
echo "Min Array in the Array list is : ";
print_r(minArray($minarr));


//  Second Approach - Use Inbuilt function 


echo "MIn Length is : ". min($arr);
echo "Max Value is : ".  max($arr);


?>
