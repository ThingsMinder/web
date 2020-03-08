'use strict'

/*
function sum(...rest){
    var i,x=0;
    for(i=0;i<rest.length;i++){
        x += rest[i];
    }
    return x;
}


//document.write(sum(1,2,3,4));
document.getElementById("ac").innerHTML = sum(1,2,3,4,5);
*/


/*
function string2int(strX){
    return strX.split('').map(function(x){
        return x * 1;
    }).reduce(function(x,y){
        return x * y;
    });
}
*/


function string2int(s){
    return s * 1;
}

document.getElementById('ac').innerHTML = string2int('23435435355');
