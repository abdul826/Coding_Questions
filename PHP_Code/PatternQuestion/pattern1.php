<!-- 
*
* *
* * *
* * * * 
Solve this Pattern -->

<?php

$n = 4;

for($row = 1; $row <=$n; $row++){
    for($col = 1; $col <= $row; $col++){
        echo " * ";
    }
    echo "\n";
}
?>