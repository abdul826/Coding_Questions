// Write a functionn which takes 2 array as a argument and compare length and element of both the array.
// If the length and elements are equal then return true else return false.

function arrayComperision(a,b)
{
    if(a.length !== b.length){
        console.log('false');
    }

    // 1st MEthod
    /* return a.every((val,ind)=>{
        return val === b[ind];
    }) */

    // 2nd Method
    count = 0;
    for (let i = 0; i < a.length; i++) {
        if (a[i] !== b[i]) {
        count++;
        }
    }
    if (count == 0) {
        return true;
    } else {
        return false;
    }
}


let a = [1,2,4];
let b = [1,2,4];

console.log(arrayComperision(a,b));
