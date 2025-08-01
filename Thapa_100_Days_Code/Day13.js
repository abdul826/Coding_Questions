// Find the count of Vowel in a String

let str = "Hello World";

let vowels = ['a', 'e', 'i', 'o', 'u'];

let vowelCount = str.toLowerCase().split('').reduce((accum, curElm) => {
    if(vowels.includes(curElm)) {
        return accum + 1;
    }
    return accum;
},0);

console.log(`Count of Vowels: ${vowelCount}`);
