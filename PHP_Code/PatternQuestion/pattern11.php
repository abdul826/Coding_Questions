<!-- 
* * * * * 
  * * *   
    *     
    *     
  * * *   
* * * * * 
-->

<?php

for($i=1;$i<=3;$i++)
{
  for($j=1; $j<=5; $j++)
  {
    if($j>=$i && $j<= 6-$i)
    {
      echo "*";
    }else
    {
      echo " ";
    }
    echo " ";
  }
  echo "\n";
}

for($i=1;$i<=3;$i++)
{
  for($j=1; $j<=5; $j++)
  {
    if($j>=4-$i && $j<= 2+$i)
    {
      echo "*";
    }else
    {
      echo " ";
    }
    echo " ";
  }
  echo "\n";
}



?>

