<!-- 
Program to duplicate Vowels in String
Last Updated : 21 Dec, 2022
Given a string “str”, the task is to duplicate vowels in this string.

Examples: 


Input: str = “geeks”
Output: geeeeks


Input: str = “java”
Output: jaavaa 
-->

<?php

  function doublicateVovels($str){
    $arrStr = str_split($str);
    $vovelArr = ['a','e','i','o','u','A','E','I','O','U'];
    $doublicateVovel = '';
    for($i=0; $i<count($arrStr); $i++){
      if(in_array($arrStr[$i],$vovelArr)){
        $doublicateVovel .= $arrStr[$i] . $arrStr[$i];
      }else{
        $doublicateVovel .= $arrStr[$i];
      }
    }
    echo $doublicateVovel;
  }
  
	$str = "Geeks";
	echo (doublicateVovels($str));
?>