<!-- 
      1       
    1 2 1     
  1 2 3 2 1   
1 2 3 4 3 2 1 

 
-->

<?php

for($i=1;$i<=4;$i++)
{
  $k = 1;
  for($j=1; $j<=7; $j++)
  {
    if($j>=5-$i && $j<= 3+$i)
    {
      echo $k;
      
      $j<4?$k++:$k-- ;
    }else
    {
      echo " ";
    }
    echo " ";
  }
  echo "\n";
}


?>

