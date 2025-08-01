<!-- 
*****    
****
***
**
*

-->
<?php
$n = 5;

for($i = 1; $i<=$n; $i++){
    for($j=1;$j<=$n; $j++){
        if($j <= 6- $i){
            echo "*";
        }else{
            echo " ";
        }
    }
    echo "\n";
}
?>
