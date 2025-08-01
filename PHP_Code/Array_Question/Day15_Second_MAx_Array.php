<!-- Find the second max and second minimum array in the php without using in-built function -->
<?php

// Second MAx
function secondMaximum($arr){
    if($arr[0] > $arr[1]){
        $max = $arr[0];
        $secondMax = $arr[1];
    }else{
        $max = $arr[1];
        $secondMax = $arr[0];
    }

    for($i=2; $i<count($arr); $i++){
        if($arr[$i]>$max){
            $secondMax = $max;
            $max = $arr[$i];
        }elseif($arr[$i] > $secondMax){
            $secondMax = $arr[$i];
        }
    }
}

$arr = [4,1,76,90,3,54,76,11];
secondMaximum($arr);

// Second Minimum
function secondMinimum($arr){
    if($arr[0] < $arr[1]){
        $min = $arr[0];
        $secondMin = $arr[1];
    }else{
        $min = $arr[1];
        $secondMin = $arr[0];
    }

    for($i=2; $i<count($arr); $i++){
        if($arr[$i]<$min){
            $secondMin = $min;
            $min = $arr[$i];
        }elseif($arr[$i] < $secondMin){
            $secondMin = $arr[$i];
        }
    }

    echo "Second Min valie in array is : ". $secondMin;
}

secondMinimum($arr);
?>