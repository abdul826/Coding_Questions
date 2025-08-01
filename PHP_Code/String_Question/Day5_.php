<!-- 
Print words of a string in reverse order
Let there be a string say “I AM A GEEK”. So, the output should be “GEEK A AM I” . This can done in many ways. One of the solutions is given in Reverse words in a string .

Examples: 

Input : I AM A GEEK
Output : GEEK A AM I

Input : GfG IS THE BEST
Output : BEST THE IS GfG 
-->

<?php
  
  function reverseWordFromString($str)
  {
    $splitString = explode(" ",$str);
    print_r($splitString);
    
    $rev  = [];
    for($i=count($splitString)-1; $i>=0; $i--)
    {
      $rev[] = $splitString[$i] ;
    }
    $reverse = implode(" ", $rev);
    return $reverse;
  }

  $str = "I AM A GEEK" ;
  
  echo (reverseWordFromString($str));

?>