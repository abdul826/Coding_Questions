<!-- Given an array, the task is to cyclically rotate the array clockwise by one time. 

Examples:  


Input: arr[] = {1, 2, 3, 4, 5} 
Output: arr[] = {5, 1, 2, 3, 4}


Input: arr[] = {2, 3, 4, 5, 1}
Output: {1, 2, 3, 4, 5} -->

<!-- 
Steps to solve
1. Create a temp arrya and store the last element of the array;
2. Start the loop and Shift the array from last - 1 (menas at index 3 shift at 4 so the index 3 will empty then shoft index 2 to inedx 3 and so on)
3. In last index zero will be empty so put the temp variable value in 0th index
-->
<?php

$arr = [1, 2, 3, 4, 5];
$t = $arr[count($arr) - 1];
for($i = count($arr) -2 ; $i >= 0; $i--){
    $arr[$i + 1] = $arr[$i];
}
$arr[0] = $t;

echo "<pre>";
print_r($arr);
?>

<!-- 
Another Method
1. Use array_pop() : return the last element
2. use array_unshift : shift the element in the starting of array
-->

<?php

$arr = [1, 2, 3, 4, 5];

// Save the last element
$lastElement = array_pop($arr);
        
// Prepend the last element to the front
array_unshift($arr, $lastElement);


echo "<pre>";
print_r($arr);
?>