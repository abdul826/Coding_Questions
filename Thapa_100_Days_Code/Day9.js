// Find the average of an array

function calculateAverage(a)
{
  let sum = a.reduce((acc,currelement)=>{
   return acc + currelement;
  }) ;

  console.log(sum/a.length)
}

calculateAverage([5,10,2,8]);