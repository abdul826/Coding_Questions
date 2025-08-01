// Generate hash in string> Hash should be at prifix position and there is not whitespace in string 
// and the 1st character of every word should be capital

function generateHash(str){
    strArr = str.split(" ");
    // console.log(strArr);
    let capLetter = strArr.map((elm,i)=> {
        // First Way
        // str = elm.replace(elm[0], elm[0].toUpperCase());
        // return str

        // Second Way
        str = elm.charAt(0).toUpperCase() + elm.slice(1);
        return str;
    }) 
    str = `#${capLetter.join("")}`
    console.log(str);
}

console.log(generateHash("my name is abdul rahman."));


// Steps to solve the problem
/* 1. create a function and take a parameter
2. split the string by " " so it comes into Array.
3. apply map method to the array 
4. use replace method and toUppercase to change 1st character of every word capital Letter.
5. return the value inside map.
6. use join method to change array to string.
7. use "#" in starting with string. */

