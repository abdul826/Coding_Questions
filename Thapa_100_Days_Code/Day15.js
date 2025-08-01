// Calculate the sum of square of array element
// example: [1,2,3] => 1*1 + 2*2 + 3*3 = 14

function squareAndSumOfArrayElements(arr){
    if(arr.length <= 0) return "Array is blank";
 
    return arr.reduce((accum,curElm)=>{
        return accum = (curElm * curElm) + accum;
    },0)
}

let arr = [1,2,3];
console.log(squareAndSumOfArrayElements(arr));
