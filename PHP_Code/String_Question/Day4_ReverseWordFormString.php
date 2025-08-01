<!-- 
Reverse words in a string

Given a string str, the task is to reverse the order of the words in the given string. Note that str may contain leading or trailing dots(.) or multiple trailing dots(.) between two words. The returned string should only have a single dot(.) separating the words.

Examples:

Input: str = “i.like.this.program.very.much” 
Output: str = “much.very.program.this.like.i” 


Input: str = ”..geeks..for.geeks.” 
Output: str = “geeks.for.geeks” 
-->

<?php

$str = "i.like.this.program.very.much";
$strArray = explode(".",$str);
$len = count($strArray) - 1;
$reverseStrArray = [];
for($i=$len; $i>=0; $i--){
  $reverseStrArray[] = $strArray[$i];
}

$rev = implode(".",$reverseStrArray);
echo $rev

?>