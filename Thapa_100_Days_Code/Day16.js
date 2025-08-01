// Find the minimum value in array

function findMinimumElement(arr){
    if(arr.length <= 0) return "Array is blank";
 
    return arr.reduce((accum,curElm)=>{
        if(curElm < accum){
            accum = curElm;
        }
        return accum;
    })
}

let arr = [10,12,30,47,3];
console.log(findMinimumElement(arr));
