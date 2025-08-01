<!-- 
Given a string s and an integer d, the task is to left rotate the string by d positions.

Examples:

Input: s = “GeeksforGeeks”, d = 2
Output: “eksforGeeksGe”  
Explanation: After the first rotation, string s becomes “eeksforGeeksG” and after the second rotation, it becomes “eksforGeeksGe”.


Input: s = “qwertyu”, d = 2 
Output: “ertyuqw” 
Explanation: After the first rotation, string s becomes “wertyuq” and after the second rotation, it becomes “ertyuqw”. 
-->

<?php

  function reverseStringToLeftFromPositionD($str,$d)
  {
	  $length = strlen($str);
	  
	  $firstSrting = '';
	  $SecondSrting = '';
	  
	  for($i=0; $i<$d; $i++){
	    $firstSrting .= $str[$i];
	  }
	  
	  for($i=$d; $i<$length; $i++){
	    $SecondSrting .= $str[$i];
	  }
	  return $SecondSrting.$firstSrting;
  }
	$str = "GeeksforGeeks"; 
	$d = 2;
	
	echo (reverseStringToLeftFromPositionD($str,$d));

?>