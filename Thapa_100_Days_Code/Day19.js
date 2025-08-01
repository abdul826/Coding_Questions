// check the sub string start with 1st word of string or not

function checkSubString(s1,s2){
    let strArray = s1.split(" ");
    if(strArray[0].toLowerCase() === s2.toLowerCase()) return "true";
    return "false";
}


console.log(checkSubString("Hello World","hello"));
console.log(checkSubString("Hello World","world"));