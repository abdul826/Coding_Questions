// Find the max element from array

function findMaxElement(arr){
    if(arr.length <= 0) return "Array is blank";
 
    return arr.reduce((accum,curElm)=>{
        if(curElm < accum){
            curElm = accum;
        }
        return curElm;
    })
}

let arr = [10,12,30,47,3];
console.log(findMaxElement(arr));