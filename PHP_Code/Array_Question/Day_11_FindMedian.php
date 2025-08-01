<?php

function arrayMarged($arr1,$arr2){
  $mergedArray = $arr2;
  
  foreach($arr1 as $val){
    $mergedArray[] = $val;
  }
  return $mergedArray;
}

function arraySort($mergedArray){
  for($i=0; $i<count($mergedArray); $i++){
    for($j=$i+1; $j<count($mergedArray); $j++){
      $temp = 0;
      if($mergedArray[$i] > $mergedArray[$j]){
        $temp = $mergedArray[$i];
          $mergedArray[$i] = $mergedArray[$j];
          $mergedArray[$j] = $temp;
      }
    }
  }
  return $mergedArray;
}

function FindMedian($arr1,$arr2){
  $mergedArray = arrayMarged($arr1,$arr2);
  
  $mergedArray = arraySort($mergedArray);

  $n = count($mergedArray);
  
  if($n%2 != 0){
    $midIndex = floor($n/2);  // Give the index number
    return $mergedArray[$midIndex];
  }else{
    $firsIndex = $n/2;  // Give the index number
    $secondIndex = ($n/2) + 1;
    $median = ($firsIndex + $secondIndex) / 2;
    return $median;
  }
}

$arr1 = [1,3];
$arr2 = [2,4];

print_r(FindMedian($arr1,$arr2))

?>