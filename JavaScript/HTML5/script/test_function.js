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

/*
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
*/

/*
var arr1 = [1,2,4,5,6,9,10,15];
var arr2 = ['A','B','','','C',null,undefined,'D'];
var r1 = arr1.filter(function(x){
    return x % 2 !== 0;
});
var r2 = arr2.filter(function(s){
    return s && s.trim();
});
//alert(r1);
document.write(r1+'<br>');
//alert(r2);
document.write(r2);


var r3 = r2.filter(function(element,index,self){
    console.log(element);
    console.log(index);
    console.log(self);
    return true;
});
*/

/*
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
var f0 = results[0];
var f1 = results[1];
var f2 = results[2];

//alert(f0());
//alert(f1());
//alert(f2());
//alert(results[0] + '<br>' + results[1] + '<br>' + results[2]);


function create_counter(initial){
    var x = initial || 0;
    return{
        inc:function(){
            x += 1;
            return x;
        }
    }
}

var c1 = create_counter();
document.write(c1.inc()+'</br>');
document.write(c1.inc()+"<br>");
document.write(c1.inc()+"<br>");

var c2 = create_counter(10);
document.write(c2.inc()+"<br>");
document.write(c2.inc()+"<br>");
document.write(c2.inc()+"<br>");
*/

/*
function make_pow(n){
    return function(x){
        return Math.pow(x,n);
    }
}

var pow2 = make_pow(2);
var pow3 = make_pow(3);

document.write(pow2(5)+'<br>');
document.write(pow3(7)+'<br>');
*/

var zero = function(f){
    return function(x){
        return x;
    }
};

var one = function(f){
    return function(x){
        return x;
    }
};

function add(n,m){
    return function(f){
        return function(x){
            return m(f)(n(f)(x));
        }
    }
}

var two = add(one,one);
var three = add(one,two);
var five = add(two,three);

(three(function(){
    document.write('print 3 times\n');
}))();

(five(function(){
    document.write('print 5 times');
}));
