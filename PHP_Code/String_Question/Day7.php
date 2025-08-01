<!-- 
Program to accept a Strings which contains all the Vowels
Last Updated : 14 Sep, 2023
Given a string S, the task is to check and accept the given string if it contains all vowels i.e. ‘a’, ‘e’, ‘i’.’o’, ‘u’ or ‘A’, ‘E’, ‘I’, ‘O’, ‘U’.

Examples: 


Input: S = “GeeksforGeeks” 
Output: Not Accepted 
Since S does not contain vowels a, i and u


Input: S = “ABeeIghiObhkUul” 
Output: Accepted 
Since S contains all vowels a, e, i, o and u  
-->

<?php

  function containAllVovels($str){
    $arrStr = str_split(strtolower($str));
    $vovelArr = ['a','e','i','o','u','A','E','I','O','U'];
    $arr = [];
    $seen = [];
    for($i=0; $i<count($arrStr); $i++)
    {
      if(in_array($arrStr[$i],$vovelArr) && !in_array($arrStr[$i],$seen))
      {
        $arr[] = $arrStr[$i];
        $seen[] = $arrStr[$i];
      }else{
        continue;
      }
    }
    if(count($arr) == 5){
      return "Accepted ";
    }else{
      return "Not Accepted";
    }
  }
  
	$str = "ABeeIghiObhkUul";
	echo (containAllVovels($str));
?>