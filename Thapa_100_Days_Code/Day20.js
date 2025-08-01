// Reverse the string without using js method

let myString = "Hello";
let res = '';
for(let i=myString.length-1; i>=0; i--){
    res += myString[i];
}
console.log(res);
