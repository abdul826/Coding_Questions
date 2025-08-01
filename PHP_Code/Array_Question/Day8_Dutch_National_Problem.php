<!-- 
Given an array arr[] consisting of only 0s, 1s, and 2s. The task is to sort the array, i.e., put all 0s first, then all 1s and all 2s in last.

This problem is the same as the famous “Dutch National Flag problem”. The problem was proposed by Edsger Dijkstra. The problem is as follows:

Given n balls of colour red, white or blue arranged in a line in random order. You have to arrange all the balls such that the balls with the same colours are adjacent with the order of the balls, with the order of the colours being red, white and blue (i.e., all red coloured balls come first then the white coloured balls and then the blue coloured balls). 

Examples:

Input: arr[] = {0, 1, 2, 0, 1, 2}
Output: {0, 0, 1, 1, 2, 2}
Explanation: {0, 0, 1, 1, 2, 2} has all 0s first, then all 1s and all 2s in last.


Input: arr[] = {0, 1, 1, 0, 1, 2, 1, 2, 0, 0, 0, 1}
Output: {0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 2, 2}
Explanation: {0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 2, 2} has all 0s first, then all 1s and all 2s in last. 
-->

<?php
function sortDNF(&$arr){
    $l=0;$m=0; $h = count($arr)-1;
    while($m<=$h){
        if($arr[$m]==0){
            swap($arr,$l,$m);
            $l++;
            $m++;
        }elseif($arr[$m] == 1){
            $m++;
        }else{
            swap($arr,$m, $h);
            $h--;
        }
    }
}

function swap(&$arr,$i,$j){
    $temp = $arr[$i];
    $arr[$i] = $arr[$j];
    $arr[$j] = $temp;
}

$arr = [0, 1, 2, 0, 1, 2];

sortDNF($arr);

echo "Sorted Array";
print_r($arr);


?>