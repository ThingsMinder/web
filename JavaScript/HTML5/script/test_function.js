'use strict'

/*
function abs(){
    var x = document.getElementById('abs').value;
    
    if(typeof x !== "number"){
        var s = 'this is not a number';
        document.getElementById('output').value = s;
    }
    if(arguments.length === 0){
        document.getElementById('output').value = 0;
    }

    if(arguments[0]>=0){
        document.getElementById('output').value = arguments[0];
    }else{
        document.getElementById('output').value = -arguments[0];
    }
}


function foo(a,b,...rest){
    document.write(a+'<br>');
  
    document.write(b+'<br>');
   
    document.write(rest+'<br>');
}

foo(1,2,3,4,5,6);

*/

/*
abs(-9);
abs(2);
abs(0);
abs();
abs(q);
*/

/*
var xiaoming = {
    name:'小明',
    birth:1981,
    age:function(){
        var y = new Date().getFullYear();
        return y - this.birth;
    }
};

alert(xiaoming.age);
alert(xiaoming.age());
*/

/*
function getAge(){
    var y = new Date().getFullYear();
    return y - this.birth;
}

var xiaoming = {
    name : '小明',
    birth : 1981,
    age : getAge
};

//alert(xiaoming.age);
//alert(xiaoming.age());
//alert(getAge.apply(xiaoming,[]));
alert(getAge.apply(xiaoming,[1976]));
*/

function string2int(s){
    var s = document.getElementById('input').value;
    var arr = [];
    for(var i=0;i<s.length-1;i++){
        arr[i] = s.substring(i,i+1);
    }
    function pu(x){
        return x.split();
    }
    return arr.map(pu).reduce(function(x,y){return 10*x +y;})
}
