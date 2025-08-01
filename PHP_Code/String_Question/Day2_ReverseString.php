<!-- 
Reverse a String – Complete Tutorial
Given an string s, the task is to reverse the string. Reversing a string means rearranging the characters such that the first character becomes the last, the second character becomes second last and so on.

Examples:

Input: s = “GeeksforGeeks”
Output: “skeeGrofskeeG”
Explanation : The first character G moves to last position, the second character e moves to second-last and so on.


Input: s = “abdcfe”
Output: “efcdba”
Explanation: The first character a moves to last position, the second character b moves to second-last and so on.  
-->

<?php

  function reverseString($str)
  {
	  $length = strlen($str);
	  $reverse = '';
	  for($i=$length-1; $i>=0; $i--){
	    $reverse .= $str[$i];
	  }
    
    return $reverse;
  }
  
	$str = "GEEKS FOR GEEKS";
	
	echo (reverseString($str));

?>