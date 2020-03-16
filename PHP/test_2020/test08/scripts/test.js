'use strict'

var arr = ['apple','pear','baNana'];

//alert(arr.forEach());
//arr.forEach(console.log);
//document.getElementById('ac').innerHTML =  arr.forEach();

/*
document.getElementById('ac').innerHTML = arr.every(function(s){
    return s.length > 0;
});

document.getElementById('ac').innerHTML = arr.every(function(s){
    return s.toLowerCase() === s;
})


document.write(arr.every(function(s){
    return s.length > 0;
}));


document.write(arr.find(function(s){
    return s.toLowerCase() === s;
}));


document.write(arr.findIndex(function(s){
    return s.toLowerCase() === s;
}));


document.write(arr.forEach(function(element){
    return element;
}));

arr.forEach(function(s){
    document.write(s + '<br>');
});


function count(){
    var arr = [];
    for(var i=1;i<=3;i++){
        arr.push((function(n){
            return function(){
                return n * n;
            }
        })(i));
    }
    return arr;
}

var results = count();
var f1 = results[2];
alert(f1());
*/

function create_counter(initial){
    var x = initial || 0;
    return{
        inc:function(){
            x += 1;
            return x;
        }
    }
}

var c1 = create_counter(10);

