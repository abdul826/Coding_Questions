<!-- 

      4       
    3 3 3     
  2 2 2 2 2   
1 1 1 1 1 1 1 



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
      
    }else
    {
      $j<4?$k++:$k-- ;
      echo " ";
    }
    echo " ";
  }
  echo "\n";
}


?>

