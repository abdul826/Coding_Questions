/* Find the longest String 

Note: 
If the string is empty or contain any whitespace, just return false */


function findLongestString(str){
    if(str.trim().length === 0){
        return false;
    }

    // 1st Method
    /* strArr = str.split(" ");
    longStr = strArr.sort((a,b)=> b.length - a.length);
    console.log(`longStr String is :`);
    return longStr[0]; */

    // 2nd Method
    /* strArr = str.split(" "); 
    return strArr.reduce((accu,currVal)=> (currVal.length > accu.length ? currVal : accu), "") */

    // 3rd Method
    let longestWord = '';
  
  arraywords.map((word)=>{
    if(word.length > longestWord.length){
      longestWord = word;
    }
  });
  console.log(`longestWord - ${longestWord}`);
}



console.log(
    findLongestString("My Name Is Abdul Rahman Khan")
);