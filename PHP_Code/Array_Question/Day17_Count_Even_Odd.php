<!-- 
Count the number of even and odd numbers in an array. 
-->

<?php

$array = [34,21,65,78,1,42];
$even = 0;
$odd = 0;
foreach($array as $arr){
    if($arr%2 === 0){
        $even++;
    }else{
        $odd++;
    }
}

echo "Even : ". $even;
echo "<br/>";
echo "Odd : ". $Odd;

?>