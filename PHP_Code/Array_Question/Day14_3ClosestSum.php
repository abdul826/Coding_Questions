<?php

  function threeSumClosest($nums, $target)
  {
    // Sort the array
    sort($nums);
    $closestSum = PHP_INT_MAX; // Initialize closest sum to a large value
    $n = count($nums);
    
    for ($i=0;$i<$n ; $i++ ){
      for ($j=$i+1;$j<$n ; $j++ ){
        for ($k=$j+1;$k<$n ; $k++ ){
            $currentSum = $nums[$i] + $nums[$j] + $nums[$k];
            // Check if this sum is closer to the target
                if (abs($currentSum - $target) < abs($closestSum - $target)) {
                    $closestSum = $currentSum; // Update closest sum
                }
        }
      }
    }
     return $closestSum;
  }
  $nums = [-1, 2, 1, -4];
$target = 1;
echo threeSumClosest($nums, $target);
?>