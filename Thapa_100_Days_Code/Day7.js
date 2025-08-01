// Write a function findMax which take an argument as an array at the time of calling and find the MAx value from it

function findMax(val){

    // 1st Method
    
    /* let maxValue = Math.max(...val);
    console.log(`Max Value from array ${maxValue}`); */

    // 2nd value
    let maxValue = val.sort((a,b)=> {
        return b-a;
    });
    console.log(`Max Value from array ${maxValue}`); 
    
}

findMax([1,3,5,9,10,12]);