<!-- Remove Vovels -->

<?php
	$str = "Hello, World!";
	$length = strlen($str);
	$v = ['a','e','i','o','u','A','E','I','O',"u"];
  $result= '';
  for($i=0; $i<$length; $i++)
  {
    if(!in_array($str[$i],$v)){
      $result .= $str[$i];
    }
  }
  echo $result;

?>