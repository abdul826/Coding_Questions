<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Find the average of an array</h1> 

<?php
	function calculateAverage($a)
{
  $len = count($a);
  $sum = 0;
    foreach($a as $val){
      $sum += $val;
    }
    echo "Average of given array is : ";
    echo $sum/$len;
}


calculateAverage([5,10,2,8]);
?>

    
</body>
</html>