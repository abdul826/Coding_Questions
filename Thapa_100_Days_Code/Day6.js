// Take a String and check the palendrom 

let str = "ABBA";

function palendrom(str)
{
  let splitStr = str.split('').reverse().join('');

  if(splitStr === str) return console.log("Given string is palendrom");
  
  return console.log("Given string is not a palendrom");
}

palendrom(str);

// ANother way 
// PAlindrom

let str1 = 'A man, a plan, a canal, Panama';
let strMain = str1.toLowerCase().replace(/\W/g,"");

let Palindrom = strMain.split('').reverse().join('');

if(strMain === Palindrom){
    console.log("Given Str is a Palindrom");
}else{
    console.log("Given Str is not a Palindrom");
}