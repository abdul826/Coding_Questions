// check the given number is comes in power of 2 or not. If yes return "true" else return "false"

function isPowerOdTwo(num){
    if(num == 0) return "Please give me positive number";
    
    for(let i=1; i<parseInt(num/2); i++){
        if(2**i === num) return "true";
    }
    return false
}

console.log(isPowerOdTwo(8));
console.log(isPowerOdTwo(7));