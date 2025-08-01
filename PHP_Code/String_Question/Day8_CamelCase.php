<!-- 
There is a sequence of words in CamelCase as a string of letters, , having the following properties:

It is a concatenation of one or more words consisting of English letters.
All letters in the first word are lowercase.
For each of the subsequent words, the first letter is uppercase and rest of the letters are lowercase.
Given , determine the number of words in .

Example

There are  words in the string: 'one', 'Two', 'Three'.

Function Description

Complete the camelcase function in the editor below.

camelcase has the following parameter(s):

string s: the string to analyze
Returns

int: the number of words in 
Input Format

A single line containing string .

Constraints

Sample Input

saveChangesInTheEditor
Sample Output

5 
-->

<?php

function returnCamelCaseIntegerVal($str){
  $charArray = str_split($str);
  $charArray = strlen($str);
  $count = 1;
  for($i=0; $i<$charArray; $i++){
    if($str[$i] == strtoupper($str[$i])){
      $count++;
    }
  }
  echo $count;
}

$str = "saveChangesInTheEditor";

echo (returnCamelCaseIntegerVal($str));

?>

<!-- Second Solution use ctype_upper () function to check if the character is uppercase or not -->
<?php

/* function returnCamelCaseIntegerVal($str){
  $charArray = strlen($str);
  $count = 1;
  for($i=0; $i<$charArray; $i++){
    if(ctype_upper($str[$i])){
      $count++;
    }
  }
  return $count;
}

$str = "saveChangesInTheEditor";

echo (returnCamelCaseIntegerVal($str)); */

?>
