// SUm OF digits

let n = 12345;

// Using Reduce method
/* 
1. toString is used to convert into string
2. split is used to convert it into array of substring
3. reduce is used to sum of each element
4. parseInt is use to convert substring into Int
*/
let sum = n.toString().split("").reduce((accum, curElm)=>{
    return accum + parseInt(curElm);
},0);

console.log(sum);

// Use foreach

let addDigit = 0;
n.toString().split("").forEach((curElm)=>{
    addDigit += parseInt(curElm);
});

console.log(addDigit);

// Using While loop
let sumofDigit = 0;

while(n != 0){
    let digit = n % 10;
    sumofDigit += digit;
    n = parseInt(n/10);
}

console.log(sumofDigit)
