// Take two array and compare both the arrya and check both are equal or not

arr1 = [2,3,5,8];
arr2 = [2,3,5,8];

// Using For each is not a good practice because it does not return value
arr1.forEach((element,ind) => {
    if(element === arr2[ind]){
        console.log("True");
    }else{
        console.log(false);
    }
});

// Second Method is every (Same as foreach but return value)

function compareArray(arr1, arr2) {
    return arr1.every((element, ind) => element === arr2[ind]);
}

console.log(compareArray(arr1, arr2)); 