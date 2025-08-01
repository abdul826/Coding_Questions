// Remove the dublicate element and return Unique Element

let arr = [1,2,3,1,4,3];
let uniqueElement = [];

for(let i=0; i<arr.length; i++){
    if(!uniqueElement.includes(arr[i])){
        uniqueElement.push(arr[i]);
    }
}

console.log(uniqueElement);