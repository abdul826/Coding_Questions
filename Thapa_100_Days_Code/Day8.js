// Find the factorial 


let factorial = (n)=>{
    if(n<0) return "Number is negative";
    
    let fact = 1;
    for(let i = 1; i<=n; i++){
      fact = fact * i
    }
    return fact;
}

let output = factorial(5);
console.log(output)