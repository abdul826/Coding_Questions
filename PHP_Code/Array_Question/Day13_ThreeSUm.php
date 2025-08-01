<!-- 
Given an integer array nums, return all the triplets [nums[i], nums[j], nums[k]] such that i != j, i != k, and j != k, and nums[i] + nums[j] + nums[k] == 0.

Notice that the solution set must not contain duplicate triplets.

 

Example 1:

Input: nums = [-1,0,1,2,-1,-4]
Output: [[-1,-1,2],[-1,0,1]]
Explanation: 
nums[0] + nums[1] + nums[2] = (-1) + 0 + 1 = 0.
nums[1] + nums[2] + nums[4] = 0 + 1 + (-1) = 0.
nums[0] + nums[3] + nums[4] = (-1) + 2 + (-1) = 0.
The distinct triplets are [-1,0,1] and [-1,-1,2].
Notice that the order of the output and the order of the triplets does not matter.
Example 2:

Input: nums = [0,1,1]
Output: []
Explanation: The only possible triplet does not sum up to 0.
Example 3:

Input: nums = [0,0,0]
Output: [[0,0,0]]
Explanation: The only possible triplet sums up to 0. 
-->

<?php
function indexValueTogetThreeSum($nums) {
    $indexVal = [];
    
    for ($i = 0; $i < count($nums); $i++) {
        for ($j = $i + 1; $j < count($nums); $j++) {
            for ($k = $j + 1; $k < count($nums); $k++) {
                if ($nums[$i] + $nums[$j] + $nums[$k] == 0) {
                    $triplet = [$nums[$i], $nums[$j], $nums[$k]];
                 
                    $triplet = sortArray($triplet);
                    // Check if the triplet is already in the result to avoid duplicates
                    if (!in_array($triplet, $indexVal)) {
                        $indexVal[] = $triplet;
                    }
                }
            }
        }
    }

    return $indexVal;
}

function sortArray($triplet){
    for ($i = 0; $i < count($triplet); $i++) {
        for ($j = $i + 1; $j < count($triplet); $j++) {
           $temp = 0;
           if($triplet[$i] > $triplet[$j]){
               $temp = $triplet[$i];
               $triplet[$i] = $triplet[$j];
               $triplet[$j] = $temp;
           }
        }
    }
    return $triplet;
}

$nums = [-1, 0, 1, 2, -1, -4];
print_r(indexValueTogetThreeSum($nums));
?>