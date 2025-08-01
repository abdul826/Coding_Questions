// Write a function called checktriangleType that takes three parameters representing the length of the triangle.
/* The function should return the string indicating the type of triangle.

Note : 1. f all the sides are equal return "equilateral"
       2. If two sides are equal then return "isoceles"
       3. If all the sides are different return "scalene" */

const checktriangleType = (a,b,c)=>{
    if(a===b && b===c) return "equilateral";
    if(a===b || b===c || a===c) return "isoceles";
    return "scalene";
}

console.log(
    checktriangleType(3,3,3)
);
console.log(
    checktriangleType(3,4,3)
);
console.log(
    checktriangleType(3,6,9)
);