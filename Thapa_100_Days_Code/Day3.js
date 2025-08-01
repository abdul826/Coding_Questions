/* Write a function name counrChar that takes 2 parameter: a string and a character to count.The function should
return the number of times the specified  character appears  in string. */


function countChar(str, c){
    let newStr = str.toLowerCase();

    /* 1st Way 
    let count = '';
    for(let i=0; i<=newStr.length; i++){
        
        if(newStr[i]==c.toLowerCase()){
            count ++;
        }
    }
    return count; */

    // 2nd way 

    // let countVal = newStr.split("").reduce((accum, curElm)=>{
    //     if(curElm === c.toLowerCase()){
    //         accum++;
    //     }
    //     return accum;
    // },0);
    // return countVal;

    // Third Way

    // let count = 0;
    // splitString.map((elm,i)=>{
    //   if(elm === char){
    //     count = count + 1;
    //   }
    // });
    // return count ;
}


console.log(
    countChar("MissIssippi", "I")
);